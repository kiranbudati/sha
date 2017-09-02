<?php
	ini_set('display_errors',1);
	error_reporting(E_ALL);
    session_start();

    if( !isset($_SESSION['user_name']) ){
  	  	header("location:index.php");
    	exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Panel</title>
	<script type="text/javascript" src="js/jquery-latest.js"></script>
	<script type="text/javascript" src="js/prefixfree.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style type="text/css">
		body
			{
			  background-color:#f0f0f0;
			}

			.perspective
			{
			   background: url("img/doorBorder.png");
			            background-repeat: no-repeat;
			            background-position: center center;
			            position: relative;
			            display: inline;
			            float: left;
			            height: 274px;
			            width: 147px;
			            margin: 20px;
			            margin-left: 0px;
			            -webkit-perspective: 450;
			            border-radius: 3px;
			            box-sizing: border-box;
			        }
        
        .thumb
        {
            background: url("img/ClassDoor.png");
            background-repeat: no-repeat;
            background-position: center center;
            width: 147px;
            height: 274px;
            position: absolute;
            box-sizing: border-box;
            border-radius: 3px;
            box-shadow: 0 0 0 10px rgba(255, 255, 255, .0) inset;
            transition: 1s transform linear;
            transform-origin: left;
            cursor: pointer;
        }
        
        .thumbOpened
        {
            transform: rotateY(-90deg);
            transform-origin: 8px;
            transition: .5s linear;
        }

		.alert {
		padding: 8px 35px 8px 14px;
		margin-bottom: 20px;
		text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
		background-color: #fcf8e3;
		border: 1px solid #fbeed5;
		-webkit-border-radius: 4px;
		-moz-border-radius: 4px;
		border-radius: 4px;
		  color: #000;
		  
		    transform-origin: left;
		  transform:rotateY(180deg);
		  opacity:0;
		  animation-name: go;
		  animation-duration: 0.5s;
		  animation-timing-function: ease-in-out;
		  animation-fill-mode: forwards;
		  animation-delay: 0.5s;
		  width:350px;
		}
		@keyframes go {
		  100%{
		    opacity:1;
		    transform:rotateY(0deg);
		  }
		}
	</style>
	<script type="text/javascript">
		function openDoor(field) {
            var y = $(field).find(".thumb");
            var x = y.attr("class");
            if (y.hasClass("thumbOpened")) {
                y.removeClass("thumbOpened");
            }
            else {
                $(".thumb").removeClass("thumbOpened");
                y.addClass("thumbOpened");
            }
        }
	</script>
</head>
<body>
	<!-- Top nav Bar start -->
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Smart Home Automation</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="room1.php">Room 1</a></li>
        <li><a href="room2.php">Room 2</a></li>
        <li><a href="room3.php">Room 3</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

	<!-- Top nav Bar End -->


<!-- manin content -->

	<div class="container">
		<div class="row">
			<div class="col-md-4" align="center">				
				<div class="perspective" onclick="openDoor(this)">
		            <div class="thumb"></div>
		        </div>
			</div>
			<div class="col-md-4" align="center">
				<div class="perspective" onclick="openDoor(this)">
		            <div class="thumb"></div>
		        </div>
			</div>
			<div class="col-md-4" align="center" >
				<div class="perspective" onclick="openDoor(this)">
		            <div class="thumb"></div>
		        </div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-4" align="">
				<a href="room1.php" class="btn btn-primary">Room 1</a>
			</div>
			<div class="col-md-4" align="">
				<a href="room2.php" class="btn btn-primary">Room 2</a>
			</div>
			<div class="col-md-4" align="">
				<a href="room3.php" class="btn btn-primary">Room 3</a>
			</div>
		</div>
	</div>
</body>
</html>