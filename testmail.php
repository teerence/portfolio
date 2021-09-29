<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "test@hostinger-tutorials.fr";
    $to = "gwaminim1@gmail.com";
    $subject = "Mail de " .$_POST['email'];
    $Nom = "Nom: \n" .$_POST['name'];
    $choix = "Choix de matiere: \n " .$_POST['subject'];
    $message =  "Nom :".$_POST['name']."\n\nSUjet : ".$_POST['subject']."\n\nMessage : ".$_POST['message']."\n\nMail : ".$_POST['email'];
    
    ;

    $headers = "De :" . $from;
    mail($to,$subject,$message, $headers);
    
    
    echo "L'email a été envoyé.";
?>