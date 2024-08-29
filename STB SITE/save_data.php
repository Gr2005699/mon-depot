<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
$nom=$_POST['nom'];
$gmail=$_POST['gmail'];
$message=$_POST['message'];
$data="nom:$nom\nGmail:$gmail\nMessage:$message\n\n";
$_file='form_data/form_data.txt'; file_put_contents($_file,$data,FILE_APPEND | LOCK_EX);
$to ='jeremymavinga51@gmail.com';
$subject = 'nouveau message de:';
$body="nom:$nom\nGmail:$gmail\nMessage:$message";
$headers="From:$gmail\r\n";
if(mail($to,$subject,$body,$headers)){
    header("Location:merci.html");
    exit();
} else{
    echo "erreur lors de l'envoi de l'email";
}
}
?>