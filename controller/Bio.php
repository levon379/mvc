    <?php


 

class BioController extends BaseController {

   
 function index() {
  
      
          $bio_model = new BioModel();
        $bio = $bio_model->get_bio();
       // var_dump($bio);die;
        $view = new View();
        $view->set_file_name('bio');
        $params = array(
            'bio' => $bio,
        );
        $view->show($params);
    }
     function bio_remove() {

       
    }

    function bio_edit() {

       
    }
}

