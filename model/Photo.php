    <?php


require_once MVC_BASE_PATH.'config/config.php';
 
class PhotoModel extends Db {

   
 function get_photo() {
     
        $handler = $this->connect();
        $query_select = "SELECT * FROM photo  ";
        $query = $handler->query($query_select);

      
        while ($query_row = $query->fetch()) {
            //$results = $query_row;
            
             $results = array(
                'data' => $query_row
               
                
            );
        }
        return $results;
    }
    function photo_remove($id) {

        $handler = $this->connect();
        $query_remove = "DELETE FROM photo WHERE   id ='".$id."' ";
        $query = $handler->query($query_remove);
    }

    function photo_edit($id,$photo_name) {

        $handler = $this->connect();
        $query_update = "UPDATE photo SET photo_name= '" . $photo_name . "' WHERE id = '".$id."' ";
        $query = $handler->query($query_update);
    }
}

