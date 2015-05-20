<?php
if (isset($_POST)) {
 	require_once 'PHPMailer-5.2.0/class.phpmailer.php'; 
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

		$mail->IsSMTP(); 
		$mail->Host = "smtp.mandrillapp.com"; 
		$mail->SMTPAuth = true;    
		$mail->Username = "julioantonio.lp@gmail.com";  
		$mail->Password = "-d-umFuoFIOIFX_O6nXQoQ"; 
		$mail->Port = 587;

		$mail->From = "no-reply@amazonianherbs.com";
		$mail->FromName = "Amazon Rainforest Products";
		$mail->AddAddress("julioantonio.lp@gmail.com", "Julio Laveriano");
		$mail->AddReplyTo("java.cpp@hotmail.com", "JALP");

		$mail->WordWrap = 50;                                
		$mail->IsHTML(true);                                 

		$mail->Subject = 'Cotización :: amazonianherbs.com';
		$mail->Body    = $message;
		$mail->AltBody = $altMessage; 
		$mail->CharSet = 'UTF-8';
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

	

