<?php
header("Content-type: text/html;charset=\"utf-8\"");
$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$empresa = $_POST['empresa'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Empresa: " . $empresa . " \r\n";
$mensaje .= "Asunto: " . $asunto . " \r\n";
$mensaje .= "Mensaje: " . $mensaje . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'contacto@solucioneimpulso.cl';
$asunto = 'Mensaje de mi sitio web';

if (mail($para, $asunto, utf8_decode($mensaje), $header))
echo "<script type='text/javascript'>alert('Tu mensaje ha sido enviado exitosamente');</script>";
echo "<script type='text/javascript'>window.location.href='https://www.solucioneimpulso.cl';</script>";

?>