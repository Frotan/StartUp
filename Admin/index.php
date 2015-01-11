<?php 
$con=mysql_connect("localhost","root","root") or die ("Connection error".mysql_error());
mysql_select_db("startup");
    $hobbarray=implode(",",$_POST['interested']);
    $name=$_POST['name'];
if(isset($_POST['submit'])){
    
    $qry="INSERT INTO example(name,hobby) VALUeS ('$name','".$hobbarray."')";
    $result=mysql_query($qry);
    if($result)
        echo "Value has been inserted successfully";
    else
        echo mysql_error();

}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin-startup.af</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/font-awesome.css" rel="stylesheet">
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->

</head>
<body>
<div class="container">
    <div class="row">
        <h1>A simple form</h1>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <input type="text" name="name" placeholder="You name goes here">
        <input type="checkbox" name="interested[]" value="ski">ski
        <input type="checkbox" name="interested[]" value="football">football
        <input type="checkbox" name="interested[]" value="muaythai">muay thai

        <input type="submit" value="Submit" name="submit">
        </form>
        <table>
            <tr>
        <?php 
        $result=mysql_query("Select * from example");

        while($row=mysql_fetch_array($result)){
            echo "<td>".$row['name']."</td><td>interested in:".$row['hobby']."</td>";
        }

?>
            </tr>
        </table>
</div>
</div>


</body>

</html>