<?php
require "./connection.php";

echo "Connected successfully";


echo "hi";
if(isset($_POST['submit']))
{
     $name=$_POST["name"];
    $email=$_POST["email"];
    $subject=$_POST["subject"];
    $messgae=$_POST["message"];
    $submit=$_POST["submit"];
    
    $mailto = "adkhatri22@gmail.com";
    $header = "From:".$email;
    $text= "ypu have received a mail from ".$name.".\n\n.".$message;
    
    mail($mailto,$subject,$text,$header);
    
    echo "done";
    
}
?>