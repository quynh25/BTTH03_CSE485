<?php
require './interface/EmailServerInterface.php';
require './class/EmailSender.php';
require './class/MyEmailServer.php';



$emailServer = new MyEmailServer();
$emailSender = new EmailSender($emailServer);
echo $emailSender->send('ttquynh25052002@gmail.com', "Điểm danh ngày 8/3/2023", "Điểm danh");
