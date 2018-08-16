<?php 
	$conexion=mysqli_connect('localhost','root','','dbweb');

	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$email=$_POST['email'];
	$sel=($_POST['sel']);
	$titular=($_POST['titular']);
	$ntarjeta=($_POST['ntarjeta']);
	$cvv=($_POST['cvv']);
	$fecha=($_POST['fecha']);
	$direccion=($_POST['direccion']);
	$cuidad=($_POST['cuidad']);
	$pais=($_POST['pais']);
	$numero=($_POST['numero']);

	$sql="INSERT INTO tbl_formulario VALUES ('".$nombre."','".$apellido."','".$email."','".$sel."','".$titular."','".$ntarjeta."','".$cvv."','".$fecha."','".$direccion."','".$cuidad."','".$pais."','".$numero."')";
	echo mysqli_query($conexion,$sql);
 ?>