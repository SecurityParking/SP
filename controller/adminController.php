<?php
class adminController{
    private $model;
    public function __construct() {
        try {
          $this->model= new index();    
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function registry_admin(){
        require_once ('view/all/header.php');
        //require_once ('view/all/navbar.php');
      //  require_once ('view/admin/registry.php');
        require_once ('view/all/footer.php');
        require_once ('view/all/menu.php');
    }
}
