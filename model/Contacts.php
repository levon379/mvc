<?php

require_once MVC_BASE_PATH .'config/config.php';

class ContactsModel extends Db {

    function get_contacts() {
        $handler = $this->connect();
        $query_select = "SELECT * FROM contacts ";
        $query = $handler->query($query_select);


        while ($query_row = $query->fetch()) {
            //$results = $query_row;

            $results = array(
                'data' => $query_row
            );
        }
        return $results;
    }

    function contacts_remove() {

        $handler = $this->connect();
        $query_remove = "DELETE FROM contacts WHERE   id =1 ";
        $query = $handler->query($query_remove);
    }

    function contacts_edit($contacts_photo_name, $contacts_text, $contacts_mail) {

        $handler = $this->connect();
        $query_update = "UPDATE contacts SET contacts_photo_name= '" . $contacts_photo_name . "',contacts_text='" . $contacts_text . "',contacts_mail='" . $contacts_mail . "' WHERE id = 1";
        $query = $handler->query($query_update);
    }

}

