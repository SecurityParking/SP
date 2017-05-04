<?php
  class login{
    private $pdo;
    public function __construct() {
      try {
        $this->pdo= Database::Conexion();   
      }
      catch (Exception $e) {
        die($e->getMessage());
      }
    }
   //consultar los datos con el pdo 
    public function consulta($document_user,$pass){
      //exit ($document_user.$pass);
      try {
        $stm=$this->pdo->prepare("SELECT id FROM usuarios WHERE documento='$document_user' AND contrasena='$pass'");
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_OBJ);
      }
      catch(Exception $e) {
        die($e->getMessage());
      }
    }
  }
?>
