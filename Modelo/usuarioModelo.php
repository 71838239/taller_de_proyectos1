<?php namespace Modelo;
class usuarioModelo
{
	 private $DNI;
	 private $nombres;
	 private $apellidoPaterno;
	 private $apellidoMaterno;
	 private $telefono;
	 private $email;
	 private $direccion;
	 private $rol;
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
	 	$sql = "SELECT * FROM usuarios";
	 	$datos = $this->con->consultaRetorno($sql);
	 	return $datos;
	 }

	 public function add()
	 {
	 	$sql = "INSERT INTO Clientes (idCliente,nombres,apellidos,dni,direccion,celular,email,contrasenia) 
	 			VALUES (null,'{$this->nombre}','{$this->apellido}','{$this->dni}','{$this->direccion}','{$this->celular}','{$this->email}',null)";
	 	$this->con->consultaSimple($sql);
	 }

	 public function delete()
	 {
	 	$sql = "DELETE FROM Clientes where idCliente = '{$this->idCliente}'";
	 	$this->con->consultaSimple($sql);
	 }

	 public function edit()
	 {
	 	$sql = "UPDATE Clientes SET nombres = '{$this->nombre}', apellidos = '{$this->apellido}', dni = '{$this->dni}', 
	 	direccion = '{$this->direccion}',celular = '{$this->celular}',email = '{$this->email}' WHERE idCliente = '{$this->idCliente}'";
	 	$this->con->consultaSimple($sql);
	 }

	 public function ver_user_ac()
	 {
	 	$sql = "SELECT * FROM usuarios WHERE rol = 'AtencionCliente'";
	 	$datos = $this->con->consultaRetorno($sql);
	 	$row = mysqli_fetch_assoc($datos);
	 	return $row;
	 }
}