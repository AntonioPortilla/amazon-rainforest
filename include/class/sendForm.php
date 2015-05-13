<pre>
<?php 
	var_dump($_POST);
?>
</pre>

<?php 
	require_once 'PHPMailer-5.2.0/class.phpmailer.php'; 
	//require_once 'PHPMailer-5.2.0/class.pop3.php';
	//require_once 'PHPMailer-5.2.0/class.smtp.php'; 
	$correo = $_POST['correo'];

	$mail = new PHPMailer();

	$mail->IsSMTP();                                      // set mailer to use SMTP
	//$mail->Host = "smtp1.example.com;smtp2.example.com";  // specify main and backup server
	$mail->Host = "smtp.mandrillapp.com";  // specify main and backup server
	$mail->SMTPAuth = true;     // turn on SMTP authentication
	$mail->Username = "julioantonio.lp@gmail.com";  // SMTP username
	$mail->Password = "-d-umFuoFIOIFX_O6nXQoQ"; // SMTP password
	$mail->Port = 587;

	$mail->From = "no-reply@amazonrainforestproducts.com";
	$mail->FromName = "Amazon Rainforest Products";
	$mail->AddAddress("julioantonio.lp@gmail.com", "Julio Laveriano");
	//$mail->AddAddress("ellen@example.com");                  // name is optional
	$mail->AddReplyTo("info@example.com", "Information");

	$mail->WordWrap = 50;                                 // set word wrap to 50 characters
	//$mail->AddAttachment("/var/tmp/file.tar.gz");         // add attachments
	//$mail->AddAttachment("/tmp/image.jpg", "new.jpg");    // optional name
	$mail->IsHTML(true);                                  // set email format to HTML

	$mail->Subject = "Correo de ARP";
	$mail->Body    = "Mensaje de <b>".$correo ."</b>";
	$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

	if(!$mail->Send())
	{
	   echo "Error de envío. <p>";
	   echo "Mailer Error: " . $mail->ErrorInfo;
	   exit;
	}

	echo "Mensaje enviado correctamente";
	?>
