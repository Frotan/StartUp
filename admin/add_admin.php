<?php
require('../___assets/connect.php');
	?>
<!doctype html>

<html lang="en">
<head>
<?php require('../___assets/header.php'); ?>
    <link href="../css/font-awesome.css" type="text/css" rel="stylesheet">
    <script src="../js/parsley.js" type="text/javascript"></script>
    <style>
        a:hover{
         color:#222222;
        }
        .form-control{
            padding: 6px 12px;
            font-size: 14px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="../index.php" class="navbar-brand"><img src="../img/stlogo.png"></a>
    </div>
    <nav class="collapse navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
        <li>
          <a href="home.php">Home</a>
        </li>
        <li class="active">
          <a href="add_admin.php" >Change Password or Add New Admin</a>
        </li>
        <li>
      </ul>
    </nav>
  </div>
</nav>

</body>


</html>
<?php } ?>
