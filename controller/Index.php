<?php


class IndexController extends BaseController  {

    public function index() {

        $view = new View();
        $view->set_file_name('Index');
        $view->show();
    }

}
