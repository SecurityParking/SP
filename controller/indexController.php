<?php

class indexController{
    private $model;
    public function __construct() {
        try {
          $this->model= new index();    
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function index(){
        require_once ('view/all/header.php');
        require_once ('view/all/navbar.php');
        //require_once ('view/all/logo.php');
        //require_once ('view/all/carousel.php');
        require_once ('view/index/index.php');
        require_once ('view/all/footer.php');
        require_once ('view/all/menu.php');
    }

}

