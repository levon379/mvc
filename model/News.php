    <?php


require_once MVC_BASE_PATH.'config/config.php';
 
class NewsModel extends Db {

   
 function get_news() {
     
        $handler = $this->connect();
        $query_select = "SELECT * FROM news  ";
        $query = $handler->query($query_select);
      
        while ($query_row = $query->fetchAll(PDO::FETCH_ASSOC)) {
            //$results = $query_row;
            
             $results = array(
                'data' => $query_row
               
                
            );
        }
        return $results;
        
        
        
    }
 function get_one_news($id=null) {
//     die($id);
        $handler = $this->connect();
        $query_select = "SELECT * FROM news where id = '".$id."' ";
        $query = $handler->query($query_select);
      
        while ($query_row = $query->fetch()) {
            //$results = $query_row;
            
             $results = array(
                'data' => $query_row
               
                
            );
        }
        return $results;
        
        
        
    }
     function news_remove($id=null) {
//die($id);
        $handler = $this->connect();
        $query_remove = "DELETE FROM news WHERE   id ='".$id."' ";
        $query = $handler->query($query_remove);
    }

    function one_news_update($id, $name, $extension, $type, $tmp_name, $news_title, $news_text) {
//        var_dump($id, $name, $extension, $type, $tmp_name, $news_title, $news_text);die('dcd');
        $rand_name = rand(1, 999999);
     if ($extension == 'gif' || $extension == 'jpeg' ||
                $extension == 'jpg' || $extension == 'png' ) {

            $location = 'var/www/mvc/view/uploads/' . $rand_name . '_'; 
//            die('a');
            $move_upload = move_uploaded_file($tmp_name, $location . $name);
            var_dump($tmp_name, $location . $name,'aaa');die('dcd');
            if ($move_upload) {
 
        $handler = connect();
        $query_update = "UPDATE news SET news_photo_name= '" . $name . "',news_title='" . $news_title . "',news_text='" . $news_text . "' WHERE id = '".$id."'";
        $query = $handler->query($query_update);
           
                echo 'Uploaded'.'<br />';
             
            } else {
                echo 'There was an error';
            }
        } else {
            echo 'Please choose a file';
        }
       
    }
}

