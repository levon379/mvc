<?php

class BaseModel {

    public function get_method($url) {
        if (isset($_SESSION['login_data']) && isset($_SESSION['login_data']['api_key'])) {
            $url = $url . '/?api_key=' . $_SESSION['login_data']['api_key'];
        }
      //  echo $url;
        
        $ch = curl_init(API_BASE_URL . $url);
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $returndata = curl_exec($ch);
        $data = json_decode($returndata, true);
        return $data;
    }

    public function post_method($url, $params) {
        if (isset($_SESSION['login_data']) && isset($_SESSION['login_data']['api_key'])) {
            $url = $url . '/?api_key=' . $_SESSION['login_data']['api_key'];
        }
        $ch = curl_init(API_BASE_URL . $url);
        curl_setopt($ch, CURLOPT_POST, true);
        $post_string = http_build_query($params);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $returndata = curl_exec($ch);
        $data = json_decode($returndata, true);
        return $data;
    }

    public function delete_method($url) {
        if (isset($_SESSION['login_data']) && isset($_SESSION['login_data']['api_key'])) {
            $url = $url . '/?api_key=' . $_SESSION['login_data']['api_key'];
        }
        $ch = curl_init(API_BASE_URL . $url);
//        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $returndata = curl_exec($ch);
        $data = json_decode($returndata, true);
        return $data;
    }

}
