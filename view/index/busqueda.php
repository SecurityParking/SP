<?php 
	$accion = $_POST["accion"];
	if ($accion == "cargar") {
        foreach ($this->model->consulta("usuarios","documento","1") as $resultado){
         echo  "<tr><td>".$resultado->documento;
        }
	}



 ?>