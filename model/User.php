<?php

require_once MVC_BASE_PATH . 'model/Base.php';

class UserModel extends BaseModel {

    public function login($email, $password) {
        $api_url = 'user_login';
        $params = array(
            'email' => $email,
            'password' => $password,
        );
        $result = $this->post_method($api_url, $params);
        return $result;
    }

    public function signup($email, $password) {
        $api_url = 'user_signup';
        $params = array(
            'email' => $email,
            'password' => $password,
        );
        $result = $this->post_method($api_url, $params);
        return $result;
    }

//    function signup() {
//        $result = $this->post_method($path);
//        return $result;
//    }
}
