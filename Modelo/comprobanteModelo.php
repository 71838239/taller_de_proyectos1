<?php 
namespace Modelo;
class comprobanteModelo{

	 private $idComprobante;
	 private $detalle;
	 private $costoTotal;
	 private $idOrden;
	 private $numOrden;
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
	 	$sql = "SELECT * FROM comprobantes";
	 	$datos = $this->con->consultaRetorno($sql);
	 	return $datos;
	 }

	 public function add()
	 {
	 	$sql = "INSERT INTO comprobantes (idComprobante,detalle,fecha,costoTotal,idOrden) 
	 	VALUES (null,'{$this->detalle}', NOW(),'{$this->costoTotal}','{$this->idOrden}')";
	 	$this->con->consultaSimple($sql);
	 }

	 public function view()
	 {
	 	$sql = "SELECT * FROM comprobantes WHERE idComprobante = '{$this->idComprobante}'";
	 	$datos = $this->con->consultaRetorno($sql);
	 	$row = mysqli_fetch_assoc($datos);
	 	return $row;
	 }

	 public function validate_orden() {
	 	$sql = "SELECT ord.idOrden, ord.numOrden, ord.precioInicial, cli.idCliente, cli.nombres, cli.apellidos, cli.direccion,
				cli.celular,cli.email FROM ordenes AS ord INNER JOIN clientes AS cli ON ord.idCliente = cli.idCliente WHERE ord.numOrden ='{$this->numOrden}'";
	 	$datos = $this->con->consultaRetorno($sql);
	 	$row = mysqli_num_rows($datos);
	 	return $row;
	 }

	 public function obtener_idorden() {
	 	$sql = "SELECT ord.idOrden, ord.numOrden, ord.precioInicial, cli.idCliente, cli.nombres, cli.apellidos, cli.direccion,
				cli.celular,cli.email FROM ordenes AS ord INNER JOIN clientes AS cli ON ord.idCliente = cli.idCliente WHERE ord.numOrden ='{$this->numOrden}'";
	 	$datos = $this->con->consultaRetorno($sql);
	 	$row = mysqli_fetch_assoc($datos);
	 	return $row;
	 }

	 public function obtener_lista_busqueda() {
	 	$sql = "SELECT cli.idCliente, ord.idOrden, ord.numOrden, ord.precioInicial, prod.tipo, prod.marca, prod.descProb,
				prod.precio FROM ordenes AS ord INNER JOIN clientes AS cli ON ord.idCliente = cli.idCliente 
				INNER JOIN productos AS prod ON prod.idOrden = ord.idOrden WHERE ord.numOrden = '{$this->numOrden}'";
	 	$datos = $this->con->consultaRetorno($sql);
	 	return $datos;
	 }

	 public function impresion(){
	  	$sql = "SELECT cli.nombres,cli.apellidos,cli.direccion,cli.celular,cli.email,ord.numOrden,ord.fecha,ord.precioInicial,
				prod.tipo,prod.descTrab,prod.precio,comp.idComprobante FROM clientes AS cli INNER JOIN ordenes AS ord ON cli.idCliente = ord.idCliente 
				INNER JOIN productos AS prod ON prod.idOrden = ord.idOrden INNER JOIN comprobantes as comp ON ord.idOrden = comp.idOrden WHERE ord.idOrden ='{$this->idOrden}'";
	  	$datos = $this->con->consultaRetorno($sql);
	 	return $datos;
	 }

	 public function impresion_before(){
	  	$sql = "SELECT ord.idOrden,ord.numOrden,comp.idComprobante,comp.detalle, comp.fecha,comp.costoTotal, cli.idCliente, cli.nombres, 
	  			cli.apellidos,cli.celular,cli.direccion,cli.email FROM ordenes AS ord INNER JOIN comprobantes AS comp 
	  			ON comp.idOrden = ord.idOrden INNER JOIN clientes AS cli ON cli.idCliente = ord.idCliente WHERE ord.idOrden = '{$this->idOrden}'";
	  	$datos = $this->con->consultaRetorno($sql);
	  	$row = mysqli_fetch_assoc($datos);
	 	return $row;
	 }

	 public function impresion_online(){
	  	$sql = "SELECT ord.idOrden,ord.numOrden,ord.fecha,ord.precioInicial,cli.nombres,cli.apellidos,cli.direccion,prod.idProducto,prod.tipo,prod.marca,prod.modelo,
				prod.precio,prod.descProb,prod.descTrab,prod.Estado FROM ordenes AS ord INNER JOIN productos AS prod
				ON prod.idOrden = ord.idOrden INNER JOIN clientes AS cli ON ord.idCliente = cli.idCliente WHERE ord.idOrden='{$this->idOrden}'";
	  	$datos = $this->con->consultaRetorno($sql);
	 	return $datos;
	 }
}