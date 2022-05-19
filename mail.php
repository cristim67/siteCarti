<?php 

if (isset($_POST['reg_user'])) {
    $to = $_POST['email']; 
    $subject = "Datele dumneavoastra";
    $username = $_POST['username'];
    $message = "Username: ".$_POST['username']."\n"."Parola: ".$_POST['password_1'];
    $from = "miloiu.cristi22@gmail.com";
    $headers = "From:" . $from;

    mail($to,$subject,$message,$headers);
}
?>