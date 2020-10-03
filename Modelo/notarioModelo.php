<?php namespace Modelo;
class notarioModelo
{
	 private $RUC;
	 private $nombres;
	 private $apellidos;
	 private $telefono;
	 private $ubicacion;
	 private $con;

	 public function __construct()
	 {
	 	$this->con = new Conexion();
	 }
	
	 public function set($atributo, $contenido)
	 {
	 	$this->$atributo = $contenido;
	 }

	 public function get($atributo)
	 {
	 	return $this->$atributo;
	 }

	 public function listar()
	 {
	 	$sql = "SELECT * FROM notarios";
	 	$datos = $this->con->consultaRetorno($sql);
	 	return $datos;
	 }

	 /*public function add()
	 {
	 	$sql = "INSERT INTO solicitantes (DNI,nombres,apellidoPaterno,apellidoMaterno,telefono,email) values 
('{$this->DNI}','{$this->nombre}','{$this->apellidoPaterno}','{$this->apellidoMaterno}','{$this->telefono}','{$this->email}')";
	 	$this->con->consultaSimple($sql);
	 }

	 public function edit()
	 {
	 	$sql = "UPDATE solicitantes";
	 	$this->con->consultaSimple($sql);
	 }

	 public function view()
	 {
	 	$sql = "SELECT * FROM solicitudes WHERE idSolicitante = '{$this->idSolicitante}'";
	 	$datos = $this->con->consultaRetorno($sql);
	 	$row = mysqli_fetch_assoc($datos);
	 	return $row;
	 }*/
}