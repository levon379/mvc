<?php

class AdminController extends BaseController {

    function index() {



        $view = new View();
        $view->set_file_name('admin');
        $view->show();
    }

    function news_index() {



        $news_model = new NewsModel();
        $news = $news_model->get_news();
//        var_dump($news);die;
        $view = new View();
        $view->set_file_name('admin_news');
        $params = array(
            'news' => $news,
            'id' => $id,
        );
        $view->show($params);
    }

    function news_delete($id = null) {
        $news_model = new NewsModel();
        $news = $news_model->news_remove($id);
        $url = MVC_BASE_URL . '/admin/news_index';
        header('Location: ' . $url);
        die;
    }

    function news_one_edit($id = null) {

        $name = $_FILES['file']['name'];
        $extension = strtolower(substr($name, strpos($name, '.') + 1));
        $type = $_FILES['file']['type'];
        $tmp_name = $_FILES['file']['tmp_name'];

        if (isset($_POST['news_title']) && isset($_POST['news_text'])){
        $news_title = $_POST['news_title'];
        $news_text = $_POST['news_text'];
        }
        $one_news_model = new NewsModel();
        $one_news = $one_news_model->one_news_update($id, $name, $extension, $type, $tmp_name, $news_title, $news_text);
//        var_dump($news);die;
    }

    function news_one_show($id = null) {
        $one_news_model = new NewsModel();
        $one_news = $one_news_model->get_one_news($id);
//        var_dump($news);die;
        $view = new View();
        $view->set_file_name('admin_news_one');
        $params = array(
            'news' => $one_news,
        );
        $view->show($params);
    }

    function contacts_edit() {
        
    }

}

