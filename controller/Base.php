<?php

require_once MVC_BASE_PATH . 'model/View.php';
require_once MVC_BASE_PATH . 'model/Order.php';
require_once MVC_BASE_PATH . 'model/Product.php';
require_once MVC_BASE_PATH . 'model/Category.php';
require_once MVC_BASE_PATH . 'model/User.php';
require_once MVC_BASE_PATH . 'model/News.php';
require_once MVC_BASE_PATH . 'model/Bio.php';
require_once MVC_BASE_PATH . 'model/Contacts.php';
require_once MVC_BASE_PATH . 'model/Photo.php';
require_once MVC_BASE_PATH . 'model/Video.php';
require_once MVC_BASE_PATH . 'model/Users.php';
//require_once MVC_BASE_PATH . 'config/config.php';
//






class BaseController {

    public $segment = array();

    public function __construct() {
        
    }

    public function explode_segments() {
        $request_uri = $_SERVER['REQUEST_URI'];
        foreach (explode("/", preg_replace("|/*(.+?)/*$|", "\\1", $request_uri)) as $val) {
            // Filter segments for security
            if ($val != '') {
                $this->segment[] = $val;
            }
        }
        return $this->segment;
    }

}
