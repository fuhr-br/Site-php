 <?php 
$email=$_POST['email'];
$mensagem ='Olá seja bem vindo ao Vida Alternativa!';
$assunto = "Noticias"
mail($email,$assunto,$mensagem);	
//if (!$mail->send()) {
//	echo "Falha ao enviar o email: " . $mail->ErrorInfo;
//} else {
//	echo "Mensagem enviada com Sucesso!";
//}
  ?>