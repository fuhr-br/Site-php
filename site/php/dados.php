<?php 

include('./conexao.php');

$nome=$_POST['nome'];
$alimentacao=$_POST['alimentacao'];
$status=$_POST['status'];
$ensinoF=$_POST['ensinoF'];
$ensinoM=$_POST['ensinoM'];
$ensinoS=$_POST['ensinoS'];
$cursoProf=$_POST['cursoProf'];
$cursoTec=$_POST['cursoTec'];
$especializacoes=$_POST['especializacoes'];
$ne=$_POST['ne'];
$opcao=$_POST['opcao'];
$cachorro=$_POST['cachorro'];
$passarinho=$_POST['passarinho'];
$gato=$_POST['gato'];
$outros=$_POST['outros'];
$nenhum=$_POST['nenhum'];
$financeiro=$_POST['financeiro'];
$alime=$_POST['alime'];
$bemestar=$_POST['bemestar'];
$culinaria=$_POST['culinaria'];
$fina=$_POST['fina'];
$educacao=$_POST['educacao'];
$our=$_POST['our'];
$atividade=$_POST['atividade'];
$mensagem=$_POST['mensagem'];

$sql="INSERT INTO formulario (nome,alimentacao,status,ensinoF,ensinoM,ensinoS,cursoProf,cursoTec,especializacoes,ne,opcao,cachorro,passarinho,gato,outros,nenhum,financeiro,alime,bemestar,culinaria,educacao,fina,our,atividade,mensagem )
VALUES('$nome','$alimentacao','$status','$ensinoF','$ensinoM','$ensinoS','$cursoProf','$cursoTec','$especializacoes','$ne','$opcao','$cachorro','$passarinho','$gato','$outros','$nenhum','$financeiro','$alime','$bemestar','$culinaria','$educacao','$fina','$our','$atividade','$mensagem')";

if ($conn->query($sql) === TRUE) {
    
	echo "<script language='javascript' type='text/javascript'>
			alert('Pesquisa realizada com sucesso!');
			window.location.href='../index.php';</script>";			
			die();

} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
	echo "<br />";
	echo "Não foi possível realizar o cadastro";
}

$conn->close();

 ?>
