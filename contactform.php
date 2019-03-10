<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = "* New Message from ayyadgranite.com *";
    $phone = $_POST['phone'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = 'staff@ayyadgranite.com';
    $headers = 'From: '.$mailFrom;
    $txt = "Name: ".$name."\n".
    "Email: ".$mailFrom."\n".
    "Phone: ".$phone."\n".
    "Message: \n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}