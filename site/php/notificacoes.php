 <?php 

 include('./conexao.php');

$email=$_POST['email'];

$sql="INSERT INTO notificacoes(email)
VALUES('$email')";

if ($conn->query($sql)===TRUE) {
	echo "<script language='javascript' type='text/javascript'>

			alert('Obrigada por se cadastrar em nosso site, em breve receberá nosso email com novidades:)!');

			window.location.href='../index.php';</script>";			

			die();
}else{

	echo "Erro:".$sql."<br/>".$conn->error;
	echo "<br/>";
	echo "Não possivel realizar o cadastro";
}
$conn->close();

 
  










  ?>