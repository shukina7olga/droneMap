<?php
$name = $_POST['name'];
$message = $_POST['message'];

$to  = "<michanya1045@gmail.com>" ; 

$subject = "Письмо с сайта"; 

$headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
$headers .= "From: Письмо от <$name>\r\n"; 

mail($to, $subject, $message, $headers); 
?>

<html>
<head>
<title>Сообщение отправлено</title>
</head>
<body>
<h1>Сообщение успешно отправлено</h1>
</body>
</html>