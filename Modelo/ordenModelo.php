<?php namespace Modelo;
class ordenModelo
{
	 private $idOrden;
	 private $numOrden;
	 private $precioInicial;
	 private $idTecnico;
	 private $idCliente;
	 private $email;
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
	 	$sql = "SELECT ord.idOrden,ord.numOrden,prod.idProducto,prod.tipo,prod.marca,prod.descTrab,prod.Estado,tec.nombres,tec.apellidos FROM tecnicos AS tec INNER JOIN ordenes AS ord ON tec.idTecnico = ord.idTecnico INNER JOIN productos AS prod
				ON prod.idOrden = ord.idOrden order by ord.numOrden";
	 	$datos = $this->con->consultaRetorno($sql);
	 	return $datos;
	 }

	 public function listar_por_tecnico()
	 {
	 	$sql = "SELECT ord.idOrden,ord.numOrden,prod.idProducto,prod.tipo,prod.marca,prod.descTrab,prod.Estado,tec.idTecnico,tec.nombres,tec.apellidos FROM tecnicos AS tec INNER JOIN ordenes AS ord ON tec.idTecnico = ord.idTecnico INNER JOIN productos AS prod
				ON prod.idOrden = ord.idOrden WHERE tec.idTecnico = '{$this->idTecnico}' order by ord.numOrden DESC";
	 	$datos = $this->con->consultaRetorno($sql);
	 	return $datos;
	 }

	 public function listar_por_email() {
	 	$sql = "SELECT ord.idOrden,ord.numOrden,ord.fecha,prod.idProducto,prod.tipo,prod.marca,prod.descTrab,prod.descProb,prod.Estado,cli.nombres,
				cli.apellidos,cli.email FROM ordenes AS ord INNER JOIN productos AS prod ON prod.idOrden = ord.idOrden INNER JOIN clientes 
				AS cli ON ord.idCliente = cli.idCliente WHERE cli.email = '{$this->email}' order by ord.numOrden DESC";
	 	$datos = $this->con->consultaRetorno($sql);
	 	return $datos;
	 }

	 public function add()
	 {
	 	 $query = "INSERT INTO Ordenes (idOrden,numOrden,precioInicial,fecha,fechasalida,idTecnico,idCliente,interfaz) VALUES (null,'{$this->numOrden}',null,NOW(),null,null,'{$this->idCliente}','cliente')";
	 	 $this->con->consultaSimple($query);
	 }

	 public function delete()
	 {
	 	$sql = "DELETE FROM Ordenes where idOrden = '{$this->idOrden}'";
	 	$this->con->consultaSimple($sql);
	 }

	 public function edit()
	 {
	 	$sql = "UPDATE Ordenes SET precioInicial = '{$this->precioInicial}' WHERE idOrden = '{$this->idOrden}'";
	 	$this->con->consultaSimple($sql);
	 }

	 public function view()
	 {
	 	$sql = "SELECT * FROM Ordenes WHERE idOrden = '{$this->idOrden}'";
	 	$datos = $this->con->consultaRetorno($sql);
	 	$row = mysqli_fetch_assoc($datos);
	 	return $row;
	 }

	 public function ultima_orden() {
	 	$sql = "SELECT * FROM Ordenes";
	 	$datos = $this->con->consultaRetorno($sql);
		$j = 0;
            while ($fila = mysqli_fetch_array($datos)) { 
               	$j = $fila['idOrden'];
            }
        return $j;
	 }
	 
	 public function ultima_orden_num() {
	 	$sql = "SELECT * FROM Ordenes";
	 	$datos = $this->con->consultaRetorno($sql);
		$j = 0;
            while ($fila = mysqli_fetch_array($datos)) { 
               	$j = $fila['numOrden'];
            }
        return $j;
	 }

	 public function impresion(){
	 	$sql = "SELECT cli.nombres,cli.apellidos,cli.direccion,cli.celular,cli.email,tec.nombres AS tecnombres,tec.apellidos AS tecapellidos,
				ord.numOrden,ord.fecha,ord.precioInicial,prod.tipo,prod.serie,prod.descTrab,prod.descProb,prod.precio FROM clientes AS cli INNER JOIN ordenes AS ord ON cli.idCliente = ord.idCliente 
				INNER JOIN tecnicos AS tec ON tec.idTecnico = ord.idTecnico INNER JOIN productos AS prod ON prod.idOrden = ord.idOrden WHERE ord.idOrden = '{$this->idOrden}'";
	 	$datos = $this->con->consultaRetorno($sql);
	 	return $datos;
	 }

	 public function ver_todo(){
	 	$sql = "SELECT cli.nombres,cli.apellidos,cli.direccion,cli.celular,cli.email,tec.nombres AS tecnombres,tec.apellidos AS tecapellidos,
				ord.numOrden,ord.fecha,ord.precioInicial,prod.tipo,prod.serie,prod.descTrab,prod.precio FROM clientes AS cli INNER JOIN ordenes AS ord ON cli.idCliente = ord.idCliente 
				INNER JOIN tecnicos AS tec ON tec.idTecnico = ord.idTecnico INNER JOIN productos AS prod ON prod.idOrden = ord.idOrden WHERE ord.idOrden = '{$this->idOrden}'";
	 	$datos = $this->con->consultaRetorno($sql);
	 	$row = mysqli_fetch_assoc($datos);
	 	return $row;
	 }
}