<?php
require('../___assets/connect.php');
try{
if(isset($_POST['contactSubmit'])){
$msg=$_POST['contactMsg'];
$phone=$_POST['contactPhone'];
$email=$_POST['contactEmail'];
$name=$_POST['contactName'];
$submit="INSERT INTO contact VALUES(null,:name,:email,:phone,:message)";
$insStmt=$con->prepare($submit);
$insStmt -> bindParam(":name",$name, PDO::PARAM_STR);
$insStmt -> bindParam(":email",$email, PDO::PARAM_STR);
$insStmt -> bindParam(":phone",$phone, PDO::PARAM_STR);
$insStmt -> bindParam(":message",$msg, PDO::PARAM_STR);
$row = $insStmt -> execute();
if($row){
	//sending email to admin
	require('libs/PHPMailerAutoload.php');
	$mail = new PHPMailer(true);
	$mail->IsSMTP();
	$mail->SMTPDebug = 2;
    $mail->Host       = "smtp.gmail.com";     
  	$mail->SMTPAuth   = true;                 
  $mail->SMTPSecure = "tls";                   
  $mail->Port       = 587;                  
  $mail->Username   = "sajjadhosaini1"; 
  $mail->Password   = "!&%)$))))";        // 
  $mail->AddReplyTo('sajjadhosaini1@gmail.com', 'Dear Sajjad'); // 
  $mail->AddAddress('sajjadhosaini@gmail.com', 'sajjadhosaini');
  $mail->SetFrom('sajjadhosaini1@gmail.com', 'Sajjad Hosaini');
  $mail->Subject = 'PHPMailer تست'; 
  $mail->CharSet = 'UTF-8';
  $mail->ContentType = 'text/html';
	var_dump($mail->send());


	echo "Thank you, we'll keep in touch soon! ";
}else
	echo "An error occured, please try again later";

}


}catch(Exception $r){
	echo $r->getMessage();
}
?>