<?php

 class Db {

    function connect() {
        $handler = '';
        try {
            $handler = new PDO('mysql:host=localhost;dbname=singer', 'root', '123');
            $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $handler;
    }

}