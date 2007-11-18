<?php

$from =  $_GET['from'];
$message = $_GET['msg'];

$to      = 'gelberdev@gmail.com';
$subject = 'MrGrimod.de';
$headers = 'From: '.$from;

mail($to, $subject, $message, $headers);
echo "success";
?> 