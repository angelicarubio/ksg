<?php
  require ( __DIR__ . '/vendor/phpmailer/phpmailer/src/PHPMailer.php' );
  require ( __DIR__ . '/vendor/phpmailer/phpmailer/src/Exception.php' );
  require ( __DIR__ . '/vendor/autoload.php' );

  $mail = new PHPMailer\PHPMailer\PHPMailer();

  //Server settings
  // $mail->SMTPDebug = 2;
  // $mail->Debugoutput = 'html';
  $mail->isSMTP();
  $mail->Host = 'bmdc-m8vn.accessdomain.com';
  $mail->Port = 587;
  $mail->SMTPAuth = true;
  $mail->Username = 'pruebas@tonico.mx';
  $mail->Password = 'T{)7!erlo1Y';
  $mail->SMTPSecure = 'tls';
  $mail->CharSet = "UTF-8";

  // Params
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  //Recipients
  $mail->setFrom($email, $name);
  $mail->addAddress('helloribs@gmail.cm', 'KSG');

  //Content
  $mail->isHTML(true);
  $mail->Subject = 'Contacto por web: '.$name;
  $mail->Body    = 'Nombre: '.$name.'<br>Email: '.$email.'<br>Mensaje: '.$message;
  $mail->AltBody = "Nombre: $name\nEmail: $email\nMensaje: $message";

  if ($mail->send()) {
    header('Location: /?contactSent=true');
  } else {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
  }
?>
