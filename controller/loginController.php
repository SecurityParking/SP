<?php

class loginController{
    private $model;
    public function __construct() {
        try {
          $this->model= new login();    
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function login_user(){
        require_once ('view/all/header.php');
        require_once ('view/all/navbar.php');
        require_once ('view/login/login.php');
        require_once ('view/all/footer.php');
        require_once ('view/all/menu.php');
    }
    public function query_login()
    {
        extract($_POST);
        $pass =md5($password_user);
        foreach ($this->model->consulta($document_user,$pass) as $result) {
            exit($result->id);
        }

    }

}

