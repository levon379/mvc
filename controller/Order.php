<?php


class OrderController extends BaseController {

    public function index() {

        $order_model = new OrderModel();
        $orders = $order_model->get_orders();

        $view = new View();
        $view->set_file_name('Orders');
        $params = array(
            'orders' => $orders,
        );
        $view->show($params);
    }

    public function add_order() {
        $request_uri = $_SERVER['REQUEST_URI'];
        $tokens = explode('/', $request_uri);
        $product_id = $tokens[3];
        $add_order_model = new OrderModel();
        $add_order_model->add_order($product_id);
        $url = MVC_BASE_URL . 'order/index';
        header('Location: ' . $url);
        die;
    }

    public function order_remove() {
        $request_uri = $_SERVER['REQUEST_URI'];
        $tokens = explode('/', $request_uri);
        $order_id = $tokens[3];
        $delete_orders_model = new OrderModel();
        $delete_orders_model->order_remove($order_id);
        $url = MVC_BASE_URL . 'order/index';
        header('Location: ' . $url);
        die;
    }

}
