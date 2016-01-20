<?php

require_once MVC_BASE_PATH . 'model/Base.php';

class CategoryModel extends BaseModel {

    function get_categories() {
        $api_url = 'getcategories';
        $result = $this->get_method($api_url);
        return $result;
    }

    function get_products_by_category($category_id) {
       
        $api_url = 'get_products_by_category/' . $category_id;
        $result = $this->get_method($api_url);
        return $result;
    }

}
