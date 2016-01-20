<?php

class UserController extends BaseController {

    public function login() {
        if (isset($_POST['submit'])) {
            $this->login_handle_submit();
        } else {
            $this->login_show_html();
        }
    }

    private function login_show_html() {
        $view = new View();
        $view->set_file_name('login');
        $view->show();
    }

    private function login_handle_submit() {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $model = new UserModel();
        $login_data = $model->login($email, $password);
        if (isset($login_data['is_loggedin']) && true == $login_data['is_loggedin']) {
            $_SESSION['login_data'] = array(
                'user_id' => $login_data['user_id'],
                'api_key' => $login_data['api_key'],
            );
            $url = MVC_BASE_URL . 'product/index';
            header('Location: ' . $url);
            die;
        } else {
            $url = MVC_BASE_URL . 'user/login';
            header('Location: ' . $url);
            die;
        }
    }

    public function signup() {
        if (isset($_POST['submit_signup'])) {
            $this->signup_handle_submit();
        } else {
            $this->signup_show_html();
        }
    }

    private function signup_show_html() {
        $view = new View();
        $view->set_file_name('Signup');
        $view->show();
    }

    private function signup_handle_submit() {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $model = new UserModel();
        $signup_data = $model->signup($email, $password);
        $url = MVC_BASE_URL . 'index/index';
        header('Location: ' . $url);
        die;
    }

}
