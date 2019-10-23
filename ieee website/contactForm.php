<?php

if(isset($_POST['submit'])){
   $name = $_POST['Name']; 
   $emailFrom = $_POST['Email']; 
   $subject = $_POST['Subject']; 
   $message = $_POST['Message']; 
    
   $mailTo = "yanetnunez132@gmail.com";
   $headers = "From: ".emailFrom; 
   $txt = "IEEE Website-You have received an e-mail from ". $name.".\n\n".$message;    
   mail($mailTo,$subject,$txt,$header);    
}