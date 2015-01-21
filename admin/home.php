<?php
session_start();
if(isset($_SESSION['loggedin'])){
?>

<!doctype html>
<html lang="en">
<header>
<?php require('../___assets/header.php');	
      require('../___assets/connect.php');

?>
</header>
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
          <a href="../index.php">Public Home Page</a>
        </li>
        <li>
          <a href="logout.php">Logout</a>
        </li>
      </ul>
    </nav>
  </div>
</nav>

<div id="masthead">  
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>&nbsp;&nbsp;
            <p class="lead">With Affix and Scrollspy</p>
          </h1>
        </div>
      </div> 
  </div><!--/container-->
</div><!--/masthead-->

<!--main-->
<div class="container">
    <div class="row">
      <!--left-->
      <div class="col-md-3" id="leftCol">
        <ul class="nav nav-stacked" id="sidebar">
          <li><a href="#sec0">Startup</a></li>
          <li><a href="#sec1">Mentor</a></li>
          <li><a href="#sec3">Partner</a></li>
        </ul>

        <br/><br/>
  <?php require('../___assets/change_password.php');   ?>

<form data-parsley-validate class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
<fieldset>
<legend>Change Password</legend>
<div class="form-group">
  <div class="col-md-10">
    <input id="oldpassword" name="oldpassword" placeholder="Old Password" class="form-control input-md" required="" data-parsley-trigger='blur' type="password">
  </div>
</div>
<div class="form-group">
  <div class="col-md-10">
    <input id="newpassword" name="newpassword" placeholder="New Password" class="form-control input-md" required="" type="password">
  </div>
</div>
<div class="form-group">
  <div class="col-md-10">
    <input id="newrepassword" name="newrepassword" placeholder="Re-type New Password" class="form-control input-md" required="" type="password">
  </div>
</div>
<div class="form-group">
  <div class="col-md-10">
    <input type="submit" id="changepassword" name="changepassword" class="form-control input-md btn btn-primary" value="Change" required="">
  </div>
  <span class='text-danger' id='errorMsg'></span>
</div>
</fieldset>
</form>
<script type="text/javascript">
    $(document).ready(function (){
      $('#newrepassword').blur(function(){
      var newpassword=$('#newpassword').val();
      var newrepassword=$('#newrepassword').val();
      if(newpassword!=newrepassword)
        $('span#errorMsg').html('Password does not match');
      
});

    });
</script>
      </div><!--/left-->
      
      <!--right-->
      <div class="col-md-9">
        <h2 id="sec0">Content</h2>
        <p>
          At Bootply we like to build simple Bootstrap templates that utilize the code Bootstap CSS without a lot of customization. Sure you can 
          find a lot of Bootstrap themes and inspiration, but these templates tend to be heavy on customization.</p>
        
        <hr>
        <p>
          Rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae 
          dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia cor magni dolores 
          eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, 
          sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
          Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut.              
          Rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae 
          dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia cor magni dolores 
          eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, 
          sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
          Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut!</p>
        
        <h2 id="sec1">Content</h2>
        <p>
          Rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae 
          dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut.
        </p>
        <div class="row">
          <div class="col-md-6">
            <div class="panel panel-default">
              <div class="panel-heading"><h3>Hello.</h3></div>
              <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
                Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
                dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
                Aliquam in felis sit amet augue.
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="panel panel-default">
              <div class="panel-heading"><h3>Hello.</h3></div>
              <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
                Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
                dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
                Aliquam in felis sit amet augue.
              </div>
            </div>
          </div>  
        </div>
        
        <hr>
        
        <h2 id="sec2">Section 2</h2>
        <p>
          Rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae 
          dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia cor magni dolores 
          eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, 
          sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
          Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut!
        </p>
        <div class="row">
          <div class="col-md-4"><img src="//placehold.it/300x300" class="img-responsive"></div>
          <div class="col-md-4"><img src="//placehold.it/300x300" class="img-responsive"></div>
          <div class="col-md-4"><img src="//placehold.it/300x300" class="img-responsive"></div>
        </div>
        
        <hr>
        
        <h2 id="sec3">Section 3</h2>
        <p>
          Images are responsive sed @mdo but sum are more fun peratis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
          totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae 
          dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia cor magni dolores 
          eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, 
          sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
          Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut..</p>
        <p>
          Fos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, 
          sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
          Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut..</p>
        
        
        <h2 id="sec4">Section 4</h2>
        <p>
          Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
          totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae 
          dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia cor magni dolores 
          eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, 
          sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
          Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut.</p>
        
        <hr>
        <h4><a href="http://www.bootply.com/Gygh9swISB">Edit on Bootply</a></h4>
        <hr>

        </div><!--/right-->
    </div><!--/row-->
</div><!--/container-->
</body>
</html>
<?php 
 }else header('location:index.php?loggedin=false');
 ?>