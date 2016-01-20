<?php

require_once MVC_BASE_PATH . 'model/Base.php';

class OrderModel extends BaseModel {

    function get_orders() {
        $api_url = 'getorders';
        $result = $this->get_method($api_url);
        return $result;
    }

    function order_remove($order_id) {

        $api_url = 'remove_order/' . $order_id;
        $result = $this->delete_method($api_url);
        return $result;
    }

    function add_order($product_id) {
        $api_url = 'add_order/' . $product_id;
        $result = $this->get_method($api_url);
        return $result;
    }

}
