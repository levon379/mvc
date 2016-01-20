<?php

require_once MVC_BASE_PATH . 'model/Base.php';

class ProductModel extends BaseModel {

    function get_products() {
        $api_url = 'getproducts';
        $result = $this->get_method($api_url);
        return $result;
    }

    function get_product($product_id) {
        $api_url = 'getproduct/' . $product_id;
        $result = $this->get_method($api_url);

        return $result;
    }

//    function result_products_single() {
//
//        $result = $this->get_method($path);
//
//        return $result;
//    }
}
