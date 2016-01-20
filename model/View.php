<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of View
 *
 * @author levon
 */

class View {

    protected $file_name;

    public function get_file_name() {
        return $this->file_name;
    }

    public function set_file_name($file_name) {
        $this->file_name = $file_name;
    }

    public function show($params = array()) {
//        die($id);
        require MVC_BASE_PATH . 'view/' . $this->get_file_name() . '.php';
    }

}
