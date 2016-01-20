    <?php


require_once MVC_BASE_PATH.'config/config.php';
 
class VideoModel extends Db {

   
 function get_video() {
     
        $handler = $this->connect();
        $query_select = "SELECT * FROM video  ";
        $query = $handler->query($query_select);

      
        while ($query_row = $query->fetchAll(PDO::FETCH_ASSOC)) {
            //$results = $query_row;
            
             $results = array(
                'data' => $query_row
               
                
            );
        }
        return $results;
    }
     function video_remove($id) {

        $handler = $this->connect();
        $query_remove = "DELETE FROM video WHERE   id ='".$id."' ";
        $query = $handler->query($query_remove);
    }

    function video_edit($id,$title,$url) {

        $handler = $this->connect();
        $query_update = "UPDATE video SET title= '" . $title . "',url= '" . $url . "' WHERE id = '".$id."' ";
        $query = $handler->query($query_update);
    }
}
