    <?php


require_once MVC_BASE_PATH.'config/config.php';
 
class UsersModel extends Db {

   
 function get_users($login=null, $password=null) {
//         die($login);
        $handler = $this->connect();
       $query_select = "SELECT * FROM users where login='" . $login . "' and password='" . $password . "'";
        $query = $handler->query($query_select);

      
        $results = array(
            'is_loggedin' => false
        );

        while ($row = $query->fetch()) {
            $results = array(
                'is_loggedin' => true,
                'user_id' => $row[0]['id'],
                'privileges' => $row['privileges'],
            );
        }
        return $results;
    }
     function user_remove($id) {

        $handler = $this->connect();
        $query_remove = "DELETE FROM users WHERE   id ='".$id."' ";
        $query = $handler->query($query_remove);
    }

    function user_edit($id,$login,  $password,$privileges) {

        $handler = $this->connect();
        $query_update = "UPDATE users SET login= '" . $login . "',password='" . md5($password) . "',privileges='" . $privileges . "' WHERE id = '".$id."'";
        $query = $handler->query($query_update);
    }
}
    function user_login($email, $password) {
        
        $handler = connect();
        $query_select = "SELECT * FROM user where email='" . $email . "' and password='" . $password . "'";
        $query = $handler->query($query_select);
        $results = array(
            'is_loggedin' => false
        );

        while ($row = $query->fetch()) {
            $results = array(
                'is_loggedin' => true,
                'api_key' => $row['api_key'],
                'user_id' => $row['id'],
            );
        }
        return $results;
     
    }
