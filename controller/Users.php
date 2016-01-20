    <?php

class UsersController extends BaseController {

   
 function login() {
  
//      die('aa');
     if(isset($_POST)){
    if(!empty($_POST['login'])&&!empty($_POST['password'])){
      $login =  $_POST['login'];
      $password =  $_POST['password'];
    }
}
//var_dump($login,$password);die;
          $users_model = new UsersModel();
        $login_data = $users_model->get_users($login,$password);
//        var_dump($users);die;
          if (isset($login_data['is_loggedin']) && true == $login_data['is_loggedin']) {
            $_SESSION['login_data'] = array(
                'user_id' => $login_data['id'],
            );
            $url = MVC_BASE_URL . '/admin/index';
            header('Location: ' . $url);
            die;
        } else {
            $url = MVC_BASE_URL . '/users/login';
            header('Location: ' . $url);
            die;
        }
    }
     function users_remove($id) {

       
    }

    function users_edit($id,$news_users_name, $news_title, $news_text) {

       
    }
       function index() {
        $view = new View();
        $view->set_file_name('users');
        $view->show();
    }
}

