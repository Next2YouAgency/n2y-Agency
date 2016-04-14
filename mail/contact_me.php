<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
	
// Create the email and send the message
$to = 'hugo.allnet@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Contato:  $name";
$email_body = "Voc� recebeu uma mensagem atrav�s do portal da ag�ncia.\n\n"."Detalhes:\n\nNome: $name\n\nE-mail: $email_address\n\nTelefone: $phone\n\nMensagem:\n$message";
$headers = "De: hugo.alllnet@gmail.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Responder para: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>