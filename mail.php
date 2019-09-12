<?php
if (isset($_POST['submit'])){

    $mail_setFromEmail=$_POST['email'];
    $destinatario = "ventas@gscomp.com.mx";
    $asunto = 'MSYS Contacto';
    $cuerpo = '
    <html>
        <h1 align="center">Mensaje enviado desde el formulario de MSYS</h1>     
        <h3 align="center">El siguiente correo quiere contactarse: <br><b>Email:</b> '.$mail_setFromEmail.'</h3>
      
    </html>'
    ;
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
    mail($destinatario,$asunto,$cuerpo);
    header('Location: exito.php');

}else{
    header('Location: error.php');
}




?>