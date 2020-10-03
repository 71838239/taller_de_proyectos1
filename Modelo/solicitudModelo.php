<?php namespace Modelo;
class solicitudModelo
{
	 private $idSolicitud;
	 private $fechaRegistro;
	 private $otorgadoX;
	 private $aFavor;
	 private $fechaDoc;
	 private $pathVoucher;
	 private $fechaPago;
	 private $fechaEntrega;
	 private $codAcceso;
	 private $Estados_idEstado;
	 private $Notarios_RUC;
	 private $Solicitantes_DNI;
	 private $Usuarios_DNI;
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
	 	$sql = "SELECT * FROM solicitudes";
	 	$datos = $this->con->consultaRetorno($sql);
	 	return $datos;
	 }

	 public function add()
	 {
	 	$sql = "CALL sp_c_solicitudes('{$this->otorgadoX}','{$this->aFavor}','{$this->Notarios_RUC}','{$this->Solicitantes_DNI}',
	 		'{$this->Usuarios_DNI}');";
		/*$sql = "INSERT INTO solicitudes (idSolicitud,fechaRegistro,otorgadoX,aFavor,fechaDoc,pathVoucher,fechaPago,fechaEntrega,codAcceso,
				Estados_idEstado,Notarios_RUC,Solicitantes_DNI,Usuarios_DNI) values (null,NOW(),'{$this->otorgadoX}','{$this->aFavor}',
				null,null,null,null,null,'PROCBUSQ','{$this->Notarios_RUC}','{$this->Solicitantes_DNI}','{$this->Usuarios_DNI}')";*/
	 	$this->con->consultaSimple($sql);
	 }

	 public function edit()
	 {
	 	
	 }

	 public function view_by_dni_sol()
	 {
	 	$sql = "SELECT * FROM solicitudes WHERE Solicitantes_DNI = '{$this->Solicitantes_DNI}'";
	 	$datos = $this->con->consultaRetorno($sql);
	 	$row = mysqli_fetch_assoc($datos);
	 	return $row;
	 }
}