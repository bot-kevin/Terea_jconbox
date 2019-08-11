<?php
	
	require_once('conexion.php');
	//para saber si hay algun error
		error_reporting(0);

	
	$cedula=$_POST['txtcedula'];
	$nombre=$_POST['txtnombre'];
	$apeliido=$_POST['txtapellido'];
	$estado=$_POST['rEst'];
	$rol=$_POST['txtrol'];





	$sql="INSERT INTO persona values('$cedula','$nombre','$apeliido','$estado','$rol')";
	mysqli_query($conexion,$sql);

	function llenarcombo(){

		$conexion=new PDO("mysql:host=localhost;dbname=taller","root","");
		$sentencia=$conexion->query(" select dnombre from depart");
		$res=$sentencia->fetchAll(PDO::FETCH_ASSOC);
		return $res;
	}
?>