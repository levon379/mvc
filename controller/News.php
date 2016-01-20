    <?php


 

class NewsController extends BaseController {

   
 function index() {
    
      
          $news_model = new NewsModel();
        $news = $news_model->get_news();
//        var_dump($news);die;
        $view = new View();
        $view->set_file_name('news');
        $params = array(
            'news' => $news,
            'id' => $id,
            
        );
        $view->show($params);
    }
    
     function news_one($id=null) {
   $one_news_model = new NewsModel();
        $one_news = $one_news_model->get_one_news($id);
//        var_dump($news);die;
        $view = new View();
        $view->set_file_name('news_one');
        $params = array(
            'news' => $one_news,
            
            
        );
        $view->show($params);
       
    }
   

    function news_edit($id,$news_photo_name, $news_title, $news_text) {

       
    }
}

