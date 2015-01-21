<?php
session_start();
if(isset($_SESSION['loggedin'])){
    header('location:home.php');
}
else
    header('location:index.php');
session_destroy();