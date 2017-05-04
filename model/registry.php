<?php
  class registry{
    private $pdo;
    public function __construct() {
      try {
        $this->pdo= Database::Conexion();   
      }
      catch (Exception $e) {
        die($e->getMessage());
      }
    }
    //Insertar datos  a la base de datos
    public function insertar($document_user,$name_user,$surnames_User,$birth_date_User,$Email_User,$gender_User,$pass,$file_User,$telephone_User){
      try {
        $stm=$this->pdo->prepare("INSERT INTO usuarios(documento,nombres,apellidos,correo,edad,genero,contrasena,ficha,telefono) VALUES('$document_user','$name_user','$surnames_User','$Email_User','$birth_date_User','$gender_User','$pass','$file_User','$telephone_User')");
        $stm->execute();
      }
      catch (Exception $e) {
        die($e->getMessage());
      }
      exit($name_user);
    }
  }
?>
