<?php
if(isset($_POST['changepassword'])){
	  if(!empty($_POST['newpassword']) && !empty($_POST['newrepassword']) && !empty($_POST['oldpassword'])){
  $password=sha1($_POST['oldpassword']);
  $newpassword=sha1($_POST['newpassword']);
  $sql = "SELECT name,password FROM users WHERE password = :password";
  $stmt = $con->prepare($sql);
  $stmt -> bindValue(":password",$password);
  $stmt -> execute();
  $row =$stmt->fetch();
  if($row){
      $updateSql="UPDATE users SET password= :newpassword";
      $updateqry=$con->prepare($updateSql);
      $updateqry->bindValue(':newpassword',$newpassword,PDO::PARAM_STR);
      $updateqry->execute(); 
      echo "<span class='text-success text-center'>successfuly updated</span>";
  }
  	else
      echo "<span class='text-center text-danger'>Something went wrong! try again.</span>";
  }




	}