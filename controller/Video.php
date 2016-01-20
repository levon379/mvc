    <?php

class VideoController extends BaseController {

   
 function index() {
  
      
          $video_model = new VideoModel();
        $video = $video_model->get_video();
//        var_dump($video);die;
        $view = new View();
        $view->set_file_name('video');
        $params = array(
            'video' => $video,
        );
        $view->show($params);
    }
     function video_remove($id) {

       
    }

    function video_edit($id,$news_photo_name, $news_title, $news_text) {

       
    }
}

