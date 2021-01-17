<?php 
  if (isset($_POST["send"])) {
    $to = "damil.berdyev04@inbox.ru";
    $subject = "Письмо с сайта";
    $charset = "utf-8";
    $headerss ="Content-type: text/html; charset=$charset\r\n";
    $headerss.="MIME-Version: 1.0\r\n";
    $headerss.="Date: ".date('D, d M Y h:i:s O')."\r\n";
    $form = "Имя: ".$_POST["name"]."\n";$form .= "Телефон: ".$_POST["telephone"]."\n";$form .= "Сообщение: ".$_POST["message"]."\n";
    mail($to, $subject, $form, $headerss);
    header("Location: http://top-stocks/");
    die();
  }
?>