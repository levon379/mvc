    <?php


require_once MVC_BASE_PATH .'config/config.php';

class BioModel extends Db {

   
 function get_bio() {
     
        $handler = $this->connect();
        $query_select = "SELECT * FROM bio  ";
        $query = $handler->query($query_select);

      
        while ($query_row = $query->fetch()) {
            //$results = $query_row;
            
             $results = array(
                'data' => $query_row
               
                
            );
        }
        return $results;
    }
     function bio_remove() {

        $handler = connect();
        $query_remove = "DELETE FROM bio WHERE   id =1 ";
        $query = $handler->query($query_remove);
    }

    function bio_edit($id,$bio_photo_name,  $bio_text) {

        $handler = connect();
        $query_update = "UPDATE bio SET bio_photo_name= '" . $bio_photo_name . "',bio_text='" . $bio_text . "' WHERE id = '".$id."'";
        $query = $handler->query($query_update);
    }
}

