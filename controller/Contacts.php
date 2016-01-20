    <?php


 

class ContactsController extends BaseController {

   
 function index() {
  
      
          $contacts_model = new ContactsModel();
        $contacts = $contacts_model->get_contacts();
       // var_dump($contacts);die;
        $view = new View();
        $view->set_file_name('contacts');
        $params = array(
            'contacts' => $contacts,
        );
        $view->show($params);
    }
     function contacts_remove() {

       
    }

    function contacts_edit() {

       
    }
}

