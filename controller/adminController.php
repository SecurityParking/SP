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
    public function query_program(){
        require_once('view/all/header.php');
        require_once('view/all/navbar.php');
        require_once('view/admin/program_formation.php');
        require_once('view/all/footer.php');
    }
    public function query_registrys(){
        require_once('view/all/header.php');
        require_once('view/all/navbar.php');
        require_once('view/admin/registrys.php');
        require_once('view/all/footer.php');
    }
    public function query_users(){
        require_once('view/all/header.php');
        require_once('view/all/navbar.php');
        require_once('view/admin/users.php');
        require_once('view/all/footer.php');
    }
    public function query_admins(){
        require_once('view/all/header.php');
        require_once('view/all/navbar.php');
        require_once('view/admin/admins.php');
        require_once('view/all/footer.php');
    }
    public function query_history(){
        require_once('view/all/header.php');
        require_once('view/all/navbar.php');
        require_once('view/admin/program_formation.php');
        require_once('view/all/footer.php');
    }
    public function query_problems(){
        require_once('view/all/header.php');
        require_once('view/all/navbar.php');
        require_once('view/admin/problems.php');
        require_once('view/all/footer.php');
    }
    public function query_last_entry(){
        require_once('view/all/header.php');
        require_once('view/all/navbar.php');
        require_once('view/admin/last_entry.php');
        require_once('view/all/footer.php');
    }
}
