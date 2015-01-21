<?php 
session_start();
require("../___assets/connect.php");
if(isset($_POST['submit'])){
try{
  $password=sha1($_POST['password']);
  $name=$_POST['name'];
  if(!empty($name) && !empty($password)){
  $sql = "SELECT name,password FROM users WHERE name = :name AND password = :password";
  $stmt = $con->prepare($sql);
  $stmt -> bindValue(":name",$name);
  $stmt -> bindValue(":password",$password);
  $stmt -> execute();
  $row =$stmt->fetch();
  if($row){
    $_SESSION['loggedin']=true;
      echo "logged in successfuly!";
      header('location:home.php');

  }
  else
      echo "<h2 class='text-center text-danger'>Invalid username/password try again!</h2>";
  }
  $errorInfo = $stmt -> errorInfo();
    if(isset($errorInfo[2])){
        $err=$errorInfo[2];
     }
  }catch(Exception $e){
  $err=$e->getMessage();
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php require('../___assets/header.php'); ?>
    <style type="text/css">
      .form-login {
    background-color: #EDEDED;
    padding-top: 20px;
    padding-bottom: 20px;
    padding-left: 20px;
    padding-right: 20px;
    border-radius: 4px;
    border-color:#d2d2d2;
    border-width: 5px;
    box-shadow:0 1px 0 #cfcfcf;
}


  form h4 { 
   border:0 solid #fff; 
   border-bottom-width:1px;
   padding-bottom:10px;
   text-align: center;
  } 

    </style>
</head>
<body style="background-color:#cfcfcf;">
<div class="container">
    <div class="row">
        <div class="col-md-offset-4 col-md-3">
          <br/><br/>
            <div class="form-login">
   <form class="form-horizontal" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?> " 
            <h4 class="text-center">Welcome</h4>
            <input type="text" name="name" class="form-control input-sm chat-input" placeholder="username" />
            </br>
            <input type="password" name="password" class="form-control input-sm chat-input" placeholder="password" />
            </br>
            <div class="text-center">
            <input type="submit" value="Login" name="submit" class="btn btn-cta-primary">
            </div>
            </form>
            </div>
        
        </div>
    </div>
</div>
</body>

</html>