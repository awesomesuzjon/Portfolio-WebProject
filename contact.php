<?php
if(isset($_POST['submit'])){
$name =$_POST['name'];
$email =$_POST['email'];
$message =$_POST['message'];

$to='bohorasujan39@gmail.com';
$subject='MyWebpage Messages';
$message="Name: ".$name. "\n". "Wrote the following: "."\n\n".$message;
$headers="From: ".$email;

if(mail($to, $subject, $message, $headers)){
 echo "<h1>Sent Successfully ! Thank You "." ".$name.", Glad for the response !</h1>";
}
else{
echo "something went wrong!";

}
}
?>