<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Startup Afghanistan</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- js files -->
        <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <style>
    #con .well{
      height:10px;
      margin-right:40px;
    }
    
    #nav.affix {
      position: fixed;
      top: 0;
      width: 100%;
      z-index:1030;
    }

    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body data-spy="scroll">
    <div class="container" id="intro">
      <div class="row">
      <div class="col-md-12">
        <ul class="nav navbar-nav navbar-right">
             <li><a href="#" style="line-height:0px;font-size:12px"><i class="fa fa-video-camera"></i> Media</a></li>
             <li><a href="#" style="line-height:0px;font-size:12px"><i class="fa fa-calendar"></i> Events</a></li>
             <li><a href="#" style="line-height:0px;font-size:12px"><i class="fa fa-rss"></i> blog</a></li>
             <li><a href="#" style="line-height:0px;font-size:12px"><i class="fa fa-user"></i> Languages</a></li>
             <li><a href="#" style="line-height:0px;font-size:12px"><i class="fa fa-user"></i> Sister Programs</a></li>
            </ul>
          </div>
        </div>
     </div>
    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation" data-spy="affix" data-offset-top="10" id="nav">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#intro"><img src="img/stlogo.png" alt="startup logo"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#intro">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#program">Program</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#curriculum">Curriculum</a>
                    </li>
                    <li>
                      <a class="page-scroll" href="#services">Services</a>
                    </li>
                    <li>
                      <a class="page-scroll" href="#join">Join</a>
                    </li>
                    <li>
                      <a class="page-scroll" href="#event">Events</a>
                    </li>
                    <li>
                      <a class="page-scroll" href="#media">Media</a>
                    </li>
                    <li>
                      <a class="page-scroll" href="#">Resources</a>
                    </li>
                </ul>
                
                <ul class="page-scroll nav navbar-nav navbar-right">

                  <li><a href="#Teams" class="page-scroll">About</a></li>
                  <li><a href="#" class="page-scroll">Partners</a></li>
                  <li><a href="#" class="page-scroll">Press</a></li>
                  <li><a href="#contact" class="page-scroll">Contact</a></li>
                  
                </ul>
            </div>
            
            
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
        
    </nav>

    <!-- Intro Section -->
    <?php require("includes/intro.php"); ?>  

    <!-- How We do Section -->
    <?php require("includes/how_we_do.php"); ?>  

    <!-- Program Section -->
    <?php require("includes/program.php"); ?>

    <!-- Curriculum Section -->
    <?php require("includes/curriculum.php"); ?>

    <!-- Services section-->
    <?php require("includes/services.php"); ?> 

    <!-- join section-->
    <?php require("includes/join.php"); ?> 

    <!-- media section-->
    <?php require("includes/media.php"); ?>

   <!-- about section -->
   <?php require("includes/about.php"); ?>

    <!-- contacta section-->
    <?php require("includes/contact.php"); ?>

    <?php
    include("includes/modal.php");
    ?>

          <!--  JS files -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
    <script type="text/javascript" src="js/parsley.js"></script>

</body>

</html>
