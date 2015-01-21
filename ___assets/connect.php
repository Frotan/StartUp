<?php
try{
$con=new PDO("mysql:host=localhost;dbname=startup","root","root");

}catch(Exception $err){
	echo "Unable to connect: ".$err->getMessage();
}