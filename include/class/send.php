<?php
if (isset($_POST)) {
 	require_once 'PHPMailer-5.2.0/class.phpmailer.php'; 
	//require_once 'PHPMailer-5.2.0/class.pop3.php';
	//require_once 'PHPMailer-5.2.0/class.smtp.php';
	if (empty($_POST['nombres']) || empty($_POST['correo']) || empty($_POST['comentario'])) {
	 	$json = array('type'=>2, 'message'=>'Los campos con (*) son requeridos.');
	 } elseif (filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL)) {
	 	$message = '<h4>De: '.$_POST['nombres'].'</h4>
						<ul>
						<li><b>Correo:</b> '.$_POST['correo'].'</li>
						<li><b>Empresa:</b> '.$_POST['empresa'].'</li>
						<li><b>Cargo:</b> '.$_POST['cargo'].'</li>
						<li><b>Tel&eacute;fono:</b> '.$_POST['telefono'].'</li>
						<li>'.$_POST['comentario'].'</li>
						<ul>';

		$altMessage = "De: ".$_POST['nombres']."\n\n
							Correo:</b> ".$_POST['correo']."\n
							Empresa:</b> ".$_POST['empresa']."\n
							Cargo:</b> ".$_POST['cargo']."\n
							Tel&eacute;fono:</b> ".$_POST['telefono']."\n\n
							".$_POST['comentario'];

		$mail = new PHPMailer();

		$mail->IsSMTP();                                      // set mailer to use SMTP
		//$mail->Host = "smtp1.example.com;smtp2.example.com";  // specify main and backup server
		$mail->Host = "smtp.mandrillapp.com";  // specify main and backup server
		$mail->SMTPAuth = true;     // turn on SMTP authentication
		$mail->Username = "julioantonio.lp@gmail.com";  // SMTP username
		$mail->Password = "-d-umFuoFIOIFX_O6nXQoQ"; // SMTP password
		$mail->Port = 587;

		$mail->From = "no-reply@amazonianherbs.com";
		$mail->FromName = "Amazon Rainforest Products";
		$mail->AddAddress("julioantonio.lp@gmail.com", "Julio Laveriano");
		//$mail->AddAddress("ellen@example.com");                  // name is optional
		$mail->AddReplyTo("julioantonio.lp@gmail.com", "JALP");

		$mail->WordWrap = 50;                                 // set word wrap to 50 characters
		//$mail->AddAttachment("/var/tmp/file.tar.gz");         // add attachments
		//$mail->AddAttachment("/tmp/image.jpg", "new.jpg");    // optional name
		$mail->IsHTML(true);                                  // set email format to HTML

		$mail->Subject = "Mensaje desde amazonianherbs.com";
		$mail->Body    = $message;
		$mail->AltBody = $altMessage; // en caso que el navegador no soporte HTML, le llega este mensaje plano

		try {
			if ($mail->send()) {
				$json = array('type'=>1, 'message'=>'Mensaje enviado correctamente, en breve nos estaremos comunicando');
			} else {
				$json = array('type'=>3, 'message'=>'No se pudo enviar el mensaje, intentelo de nuevo'. $mail->ErrorInfo);
			}
		} catch (phpmailerException $pex) {
			$json = array('type'=>4, 'message'=>$pex->getMessage());
		}
	 } else {
	 	$json = array('type'=>4, 'message'=>'El correo es inválido, escriba uno válido por favor.');
	 }

	
 } else {
 	$json = array('type'=>4, 'message'=>'Petición inválida');
 }

 echo json_encode($json);

	

