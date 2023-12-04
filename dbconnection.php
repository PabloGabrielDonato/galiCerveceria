<?php

//  Conexión con MySQL
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'database_gali';


try {
	$conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
	die('Connection Failed: ' . $e->getMessage());
}

// conexion a Base de Datos para el Excel
$con = new mysqli("localhost", "root", "", "database_gali") or die("not connected" . mysqli_connect_error());
mysqli_query($con, "SET SESSION collation_connection ='utf8_unicode_ci'");
$db = mysqli_select_db($con, $database) or die("Upps! Error en conectar a la Base de Datos");

//otra conexion
$conexion = new mysqli("localhost", "root", "", "database_gali") or die("not connected" . mysqli_connect_error());


// $sql = "SELECT *  FROM productos";
// $result = mysqli_query($conexion, $sql);

// if (mysqli_num_rows($result) > 0) {
// 	foreach ($result as $inscriptos) {
// 		print_r($inscriptos);
// 	};
// };
