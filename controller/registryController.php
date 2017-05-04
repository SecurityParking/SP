<?php
class registryController{
    private $model;
    public function __construct() {
        try {
          $this->model= new registry();    
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function registry_user(){
        require_once ('view/all/header.php');
        require_once ('view/all/navbar.php');
        require_once ('view/registry/registry_user.php');
        require_once ('view/all/footer.php');
        require_once ('view/all/menu.php');
    }
    public function process_registry()
    {
        extract($_POST);
        $pass=md5($password_User);
        $this->model->insertar($document_user,$name_user,$surnames_User,$birth_date_User,$Email_User,$gender_User,$pass,$file_User,$telephone_User);
    }

}
