<?php
	ini_set('display_errors',1);
	error_reporting(E_ALL);
    session_start();

    if( !isset($_SESSION['user_name']) ){
  	  	header("location:index.php");
    	exit();
}
?>
<?php 
	$json1 = file_get_contents('https://api.thingspeak.com/channels/254833/fields/1.json?results=2');
	$obj1 = json_decode($json1,true);

	foreach ($obj1["feeds"] as $field1) {

		$load1 = $field1["field1"];
 	}
?>
<?php 
	$json2 = file_get_contents('https://api.thingspeak.com/channels/254833/fields/2.json?results=2');
	$obj2 = json_decode($json2,true);

	foreach ($obj2["feeds"] as $field2) {

		$load2 = $field2["field2"];
 	}
?>
<?php 
	$json3 = file_get_contents('https://api.thingspeak.com/channels/254833/fields/3.json?results=2');
	$obj3 = json_decode($json3,true);

	foreach ($obj3["feeds"] as $field3) {

		$load3 = $field3["field3"];
 	}
?>
<?php 
	$json4 = file_get_contents('https://api.thingspeak.com/channels/254833/fields/4.json?results=2');
	$obj4 = json_decode($json4,true);

	foreach ($obj4["feeds"] as $field4) {

		$load4 = $field4["field4"];
 	}
?>
<?php 
	$json5 = file_get_contents('https://api.thingspeak.com/channels/254833/fields/5.json?results=2');
	$obj5 = json_decode($json5,true);

	foreach ($obj5["feeds"] as $field5) {

		$load5 = $field5["field5"];
 	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Room 1</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
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
		        <li ><a href="user.php">Home</a></li>
		        <li class="active"><a href="room1.php">Room 1</a></li>
		        <li><a href="room2.php">Room 2</a></li>
		        <li><a href="room3.php">Room 3</a></li>
		        <li><a href="logout.php">Logout</a></li>
		      </ul>
		    </div>
		  </div>
		</nav>

	<!-- Top nav Bar End -->

	<div class="well well-lg"" align="center">
	  <h1>Room 1</h1>
	</div>
	<hr>
		<div class="container panel panel-default panel-body" style="margin-top: 2%">
			<div class="row">
				<div class="col-md-4" align="center">
					<div class="panel panel-primary">
					  <div class="panel-heading">
					    <h3 class="panel-title">Load 1</h3>
					  </div>
					  <div class="panel-body" >
					  	<div> Status : <?php echo $load1; ?></div>
					  	<hr>
					  	<div>
						  	<?php 
						  		if($load1=="ON"){
						  			echo '<a href="#" class="btn btn-info" disabled="">On</a>
						  			<a href="#" class="btn btn-danger">Off</a>';
						  		}
						  		else{
						  			echo '<a href="#" class="btn btn-info">On</a>
						  			<a href="#" class="btn btn-danger" disabled="">Off</a>';	
						  		}
						  	?>
						  	
					  	</div>
					  </div>
					</div>
				</div>
				<div class="col-md-4" align="center">
					<div class="panel panel-primary">
					  <div class="panel-heading">
					    <h3 class="panel-title">Load 2</h3>
					  </div>
					  <div class="panel-body" >
					  	<div> Status : <?php echo $load1; ?></div>
					  	<hr>
					  	<div>
						  	<?php 
						  		if($load1=="ON"){
						  			echo '<a href="#" class="btn btn-info" disabled="">On</a>
						  			<a href="#" class="btn btn-danger">Off</a>';
						  		}
						  		else{
						  			echo '<a href="#" class="btn btn-info">On</a>
						  			<a href="#" class="btn btn-danger" disabled="">Off</a>';	
						  		}
						  	?>
						  	
					  	</div>
					  </div>
					</div>
				</div>
				<div class="col-md-4" align="center">
					<div class="panel panel-primary">
					  <div class="panel-heading">
					    <h3 class="panel-title">Load 3</h3>
					  </div>
					  <div class="panel-body" >
					  	<div> Status : <?php echo $load1; ?></div>
					  	<hr>
					  	<div>
						  	<?php 
						  		if($load1=="ON"){
						  			echo '<a href="#" class="btn btn-info" disabled="">On</a>
						  			<a href="#" class="btn btn-danger">Off</a>';
						  		}
						  		else{
						  			echo '<a href="#" class="btn btn-info">On</a>
						  			<a href="#" class="btn btn-danger" disabled="">Off</a>';	
						  		}
						  	?>
						  	
					  	</div>
					  </div>
					</div>
				</div>
			</div>	
			
			<div class="row" style="margin-top: 20px">
				<div class="col-md-2">
					
				</div>
				<div class="col-md-4" align="center">
					<div class="panel panel-primary">
					  <div class="panel-heading">
					    <h3 class="panel-title">Load 4</h3>
					  </div>
					  <div class="panel-body" >
					  	<div> Status : <?php echo $load1; ?></div>
					  	<hr>
					  	<div>
						  	<?php 
						  		if($load1=="ON"){
						  			echo '<a href="#" class="btn btn-info" disabled="">On</a>
						  			<a href="#" class="btn btn-danger">Off</a>';
						  		}
						  		else{
						  			echo '<a href="#" class="btn btn-info">On</a>
						  			<a href="#" class="btn btn-danger" disabled="">Off</a>';	
						  		}
						  	?>
						  	
					  	</div>
					  </div>
					</div>
				</div>
				<div class="col-md-4" align="center">
					<div class="panel panel-primary">
					  <div class="panel-heading">
					    <h3 class="panel-title">Load 5</h3>
					  </div>
					  <div class="panel-body" >
					  	<div> Status : <?php echo $load1; ?></div>
					  	<hr>
					  	<div>
						  	<?php 
						  		if($load1=="ON"){
						  			echo '<a href="#" class="btn btn-info" disabled="">On</a>
						  			<a href="#" class="btn btn-danger">Off</a>';
						  		}
						  		else{
						  			echo '<a href="#" class="btn btn-info">On</a>
						  			<a href="#" class="btn btn-danger" disabled="">Off</a>';	
						  		}
						  	?>
						  	
					  	</div>
					  </div>
					</div>
				</div>
			</div>	
		</div>
		<hr>	
	</body>

</html>