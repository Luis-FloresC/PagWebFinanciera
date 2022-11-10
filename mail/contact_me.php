<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
// Create the email and send the message
$to = 'info@mipymefinanciero.net'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Formulario de contacto del sitio web Mi Pyme Financiero";
$email_body = "Ha recibido un nuevo mensaje del formulario de contacto de su sitio web Mi Pyme Financiero.\n\n"."Estos son los detalles:\n\nNombre: $name\n\nCorreo Electrónico: $email_address\n\nTeléfono: $phone\n\nMensaje:\n$message";
$headers = "From: info@mipymefinanciero.net\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   

return mail($to,$email_subject,$email_body,$headers);
         
?>
