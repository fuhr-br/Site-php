<?php 

$host='us-cdbr-east-06.cleardb.net';
$user='b84ef50cd15b47';
$senha='23c7afc4';
$banco='heroku_1f4753d840a732b';

$conn = new mysqli($host, $user, $senha, $banco);

if ($conn->connect_error){
	die("Falha na conexão: " . $conn->connect_error);	
}





































 ?>