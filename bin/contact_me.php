<?php
// check if fields passed are empty
if(empty($_POST['name'])  		||
   empty($_POST['phone']) 		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$phone = $_POST['phone'];
$email_address = $_POST['email'];
$message = $_POST['message'];
	
// create email body and send it	
$to = 'harryellimpiouclm@gmail.com'; // PUT YOUR EMAIL ADDRESS HERE
$email_subject = "Formulario de contacto de Harry el Limpio:  $name"; // EDIT THE EMAIL SUBJECT LINE HERE
$email_body = "Ha recibido un nuevo mensaje del formulario de contacto.\n\n"."Aquí los detalles:\n\nNombre: $name\n\nTeléfono: $phone\n\nEmail: $email_address\n\nMensaje:\n$message";
$headers = "From: contacto@harryellimpio.albacete.com\n";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>