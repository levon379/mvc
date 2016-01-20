    <?php

class PhotoController extends BaseController {

   
 function index() {
  
      
          $photo_model = new PhotoModel();
        $photo = $photo_model->get_photo();
//        var_dump($photo);die;
        $view = new View();
        $view->set_file_name('photo');
        $params = array(
            'photo' => $photo,
        );
        $view->show($params);
    }
     function photo_remove($id) {

       
    }

    function photo_edit($id,$news_photo_name, $news_title, $news_text) {

       
    }
}

