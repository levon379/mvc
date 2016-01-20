<?php

class ProductController extends BaseController  {

    public function index() {
         $request_uri = $_SERVER['REQUEST_URI'];
        $tokens = explode('/', $request_uri);

//        $category_id =  $tokens[3];
        if (isset($tokens[3])) {
            $category_id =  $tokens[3];
            
            $products_by_category_model = new CategoryModel();
            $products = $products_by_category_model->get_products_by_category($category_id);
        } else {
            $product_model = new ProductModel();
            $products = $product_model->get_products();
        }
        $category_model = new CategoryModel();
        $categories = $category_model->get_categories();
        $view = new View();
        $view->set_file_name('products');
        $params = array(
            'products' => $products,
            'categories' => $categories,
        );
        $view->show($params);
    }

    public function product() {
        $request_uri = $_SERVER['REQUEST_URI'];
        $tokens = explode('/', $request_uri);

        $product_id =  $tokens[3];
//        $product_id = $_GET['id'];
        $product_model = new ProductModel();
        $product = $product_model->get_product($product_id);
        $view = new View();
        $view->set_file_name('single_product');
        $params = array(
            'product' => $product,
        );
        $view->show($params);

//        var_dump($products);die;
    }

//
}
