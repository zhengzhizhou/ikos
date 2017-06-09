<?php
$to = "zhengzhi757@gmail.com";
$subject = $_POST["subject"];
$message = $_POST["message_content"];
mail($to, $subject, $message, $headers);
?> 
 