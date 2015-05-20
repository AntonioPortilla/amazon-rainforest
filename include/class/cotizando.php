<?php
if (isset($_POST)) {
 	require_once 'PHPMailer-5.2.0/class.phpmailer.php'; 
	if (empty($_POST['nombres']) || empty($_POST['correo']) || empty($_POST['comentario'])) {
	 	$json = array('type'=>2, 'message'=>'Los campos con (*) son requeridos.');
	 } elseif (filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL)) {
	 	$a = $_POST['cant_unia'];
	 	$b = $_POST['cant_chuchuhuasi'];
	 	$rpta = array($a, $b);

	 	$message = '<h4>De: '.$_POST['nombres'].'</h4>
						<ul>
						<li><b>Correo:</b> '.$_POST['correo'].'</li>
						<li><b>Empresa:</b> '.$_POST['empresa'].'</li>
						<li><b>Cargo:</b> '.$_POST['cargo'].'</li>
						<li><b>Tel&eacute;fono:</b> '.$_POST['telefono'].'</li>
						<li>'.$_POST['comentario'].'</li>
						<ul><br><br>
					<hr><br><br>
					<h1 style="text-decoration:underline">Productos a Cotizar</h1>
					<table style="border-collapse:collapse">
						<thead style="background: #009245;color: white;">
						  <tr>
						     <th style="padding:8px">Producto</th>
						     <th style="padding:8px">Cantidad</th>
						     <th style="padding:8px">Presentación</th>
						  </tr>
						  </thead>						  
						  <tbody>
						  <tr style="outline:1px solid #ccc">
						     <td style="padding:10px">Uña de Gato</td>
						     <td style="text-align:center;pading:10px">'. $_POST['cant_unia'] .'</td>
						     <td style="padding:10px">'. $_POST['pre_unia'] .'</td>
						  </tr>
						  <tr style="outline:1px solid #ccc">
						     <td style="padding:10px">Chuchuhuasi</td>
						     <td style="text-align:center;padding: 10px">'. $_POST['cant_chuchuhuasi'] .'</td>
						     <td style="padding:10px">'. $_POST['pre_chuchuhuasi'] .'</td>
						  </tr>
						  </tbody>
						  <tfoot style="background: #333;color: white">
							  <tr>
							      <td style="padding:10px">Total:</td>
							      <td style="padding:10px" colspan="2"><strong>'. array_sum($rpta) .'</strong> Unids</td>						      
							  </tr>
						  </tfoot>
					</table>';

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
		$mail->AddReplyTo("julioantonio.lp@gmail.com", "JALP");

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

	

