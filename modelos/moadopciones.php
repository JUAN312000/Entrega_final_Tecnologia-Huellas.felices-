<?php 
	require "../config/conexion.php";

Class Xadopciones
{
	public function __construct(){}


function guardar($nombre,$apellidos,$email,$telefono,$mensaje,$idanimalito){

	$sql = "INSERT INTO mensajes(nombre, apellidos,email, telefono, mensaje, idadopcion)
            VALUES('$nombre','$apellidos','$email','$telefono','$mensaje','$idanimalito')";
	        return   ejecutarConsulta($sql);

	}

	 public function getAnimales() {
            $sql = "SELECT * FROM adopciones WHERE activo=1";
            return ejecutarConsulta($sql);
        }
}
