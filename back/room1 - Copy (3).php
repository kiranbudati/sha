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
	$json1 = file_get_contents('https://api.thingspeak.com/channels/254852/fields/1.json?results=2');
	$obj1 = json_decode($json1,true);

	foreach ($obj1["feeds"] as $field1) {

		$load1 = $field1["field1"];
 	}
?>
<?php 
	$json2 = file_get_contents('https://api.thingspeak.com/channels/254852/fields/2.json?results=2');
	$obj2 = json_decode($json2,true);

	foreach ($obj2["feeds"] as $field2) {

		$load2 = $field2["field2"];
 	}
?>
<?php 
	$json3 = file_get_contents('https://api.thingspeak.com/channels/254852/fields/3.json?results=2');
	$obj3 = json_decode($json3,true);

	foreach ($obj3["feeds"] as $field3) {

		$load3 = $field3["field3"];
 	}
?>
<?php 
	$json4 = file_get_contents('https://api.thingspeak.com/channels/254852/fields/4.json?results=2');
	$obj4 = json_decode($json4,true);

	foreach ($obj4["feeds"] as $field4) {

		$load4 = $field4["field4"];
 	}
?>
<?php 
	$json5 = file_get_contents('https://api.thingspeak.com/channels/254852/fields/5.json?results=2');
	$obj5 = json_decode($json5,true);

	foreach ($obj5["feeds"] as $field5) {

		$load5 = $field5["field5"];
 	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Room 1</title>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

		<script type="text/javascript" src="js/jquery-latest.js"></script>

		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

		<script type="text/javascript">
			function load1_off()
            {
               
                $.ajax({
                type: 'POST',
                url: 'https://api.thingspeak.com/update?api_key=6JH3YU0MDO0BC5AT&field1=off',
                data: {},
                dataType: 'json',
                success: function(data) 
                { 
                	alert('got here with data'); 
                },
                error: function() { 
                	alert('something bad happened'); 
                }
                });

            }
            function load1_off()
            {
               
                $.ajax({
                type: 'POST',
                url: 'https://api.thingspeak.com/update?api_key=6JH3YU0MDO0BC5AT&field1=off',
                data: {},
                dataType: 'json',
                success: function(data) 
                { 
                	alert('got here with data'); 
                },
                error: function() { 
                	alert('something bad happened'); 
                }
                });

            }
            function load1_off()
            {
               
                $.ajax({
                type: 'POST',
                url: 'https://api.thingspeak.com/update?api_key=6JH3YU0MDO0BC5AT&field1=off',
                data: {},
                dataType: 'json',
                success: function(data) 
                { 
                	alert('got here with data'); 
                },
                error: function() { 
                	alert('something bad happened'); 
                }
                });

            }
            function load1_off()
            {
               
                $.ajax({
                type: 'POST',
                url: 'https://api.thingspeak.com/update?api_key=6JH3YU0MDO0BC5AT&field1=off',
                data: {},
                dataType: 'json',
                success: function(data) 
                { 
                	alert('got here with data'); 
                },
                error: function() { 
                	alert('something bad happened'); 
                }
                });

            }
            function load1_off()
            {
               
                $.ajax({
                type: 'POST',
                url: 'https://api.thingspeak.com/update?api_key=6JH3YU0MDO0BC5AT&field1=off',
                data: {},
                dataType: 'json',
                success: function(data) 
                { 
                	alert('got here with data'); 
                },
                error: function() { 
                	alert('something bad happened'); 
                }
                });

            }
            function load1_off()
            {
               
                $.ajax({
                type: 'POST',
                url: 'https://api.thingspeak.com/update?api_key=6JH3YU0MDO0BC5AT&field1=off',
                data: {},
                dataType: 'json',
                success: function(data) 
                { 
                	alert('got here with data'); 
                },
                error: function() { 
                	alert('something bad happened'); 
                }
                });

            }
            function load1_off()
            {
               
                $.ajax({
                type: 'POST',
                url: 'https://api.thingspeak.com/update?api_key=6JH3YU0MDO0BC5AT&field1=off',
                data: {},
                dataType: 'json',
                success: function(data) 
                { 
                	alert('got here with data'); 
                },
                error: function() { 
                	alert('something bad happened'); 
                }
                });

            }
			function load1_off()
            {
               
                $.ajax({
                type: 'POST',
                url: 'https://api.thingspeak.com/update?api_key=6JH3YU0MDO0BC5AT&field1=off',
                data: {},
                dataType: 'json',
                success: function(data) 
                { 
                	alert('got here with data'); 
                },
                error: function() { 
                	alert('something bad happened'); 
                }
                });

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
	  <h2>Room 1</h2>
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
						  		if($load1=="on"){
						  			echo '<button class="btn btn-info" onclick="load1_on()" name="load1_on" id="load1_on" disabled="">On</button>
						  			<button class="btn btn-danger" onclick="load1_off()" name="load1_off" id="load1_off">Off</button>';
						  		}
						  		elseif($load1=="off"){
						  			echo '<button class="btn btn-info" onclick="load1_on()" name="load1_on" id="load1_on">On</button>
						  			<button class="btn btn-danger" onclick="load1_off()" name="load1_off" id="load1_off"  disabled="">Off</button>';	
						  		}
						  		else{
						  			echo '<a href="#" class="btn btn-info">On</a>
						  			<button class="btn btn-danger" name="load1_off" id="load1_off">Off</button>';	
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
					  	<div> Status : <?php echo $load2; ?></div>
					  	<hr>
					  	<div>
						  	<?php 
						  		if($load2=="on"){
						  			echo '<button class="btn btn-info" onclick="load2_on()" name="load2_on" id="load2_on" disabled="">On</button>
						  			<button class="btn btn-danger" onclick="load2_off()" name="load2_off" id="load2_off">Off</button>';
						  		}
						  		elseif($load2=="off"){
						  			echo '<button class="btn btn-info" onclick="load2_on()" name="load2_on" id="load2_on">On</button>
						  			<button class="btn btn-danger" onclick="load2_off()" name="load2_off" id="load2_off"  disabled="">Off</button>';	
						  		}
						  		else{
						  			echo '<a href="#" class="btn btn-info">On</a>
						  			<a href="#" class="btn btn-danger">Off</a>';
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
					  	<div> Status : <?php echo $load3; ?></div>
					  	<hr>
					  	<div>
						  	<?php 
						  		if($load3=="on"){
						  			echo '<button class="btn btn-info" onclick="load3_on()" name="load3_on" id="load3_on" disabled="">On</button>
						  			<button class="btn btn-danger" onclick="load3_off()" name="load3_off" id="load3_off">Off</button>';
						  		}
						  		elseif($load3=="off"){
						  			echo '<button class="btn btn-info" onclick="load3_on()" name="load3_on" id="load3_on">On</button>
						  			<button class="btn btn-danger" onclick="load3_off()" name="load3_off" id="load3_off"  disabled="">Off</button>';	
						  		}
						  		else{
						  			echo '<a href="#" class="btn btn-info">On</a>
						  			<a href="#" class="btn btn-danger">Off</a>';	
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
					  	<div> Status : <?php echo $load4; ?></div>
					  	<hr>
					  	<div>
						  	<?php 
						  		if($load4=="on"){
						  			echo '<button class="btn btn-info" onclick="load4_on()" name="load4_on" id="load4_on" disabled="">On</button>
						  			<button class="btn btn-danger" onclick="load4_off()" name="load4_off" id="load4_off">Off</button>';
						  		}
						  		elseif($load4=="off"){
						  			echo '<button class="btn btn-info" onclick="load4_on()" name="load4_on" id="load4_on">On</button>
						  			<button class="btn btn-danger" onclick="load4_off()" name="load4_off" id="load4_off"  disabled="">Off</button>';	
						  		}
						  		else{
						  			echo '<a href="#" class="btn btn-info">On</a>
						  			<a href="#" class="btn btn-danger">Off</a>';	
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
					  	<div> Status : <?php echo $load5; ?></div>
					  	<hr>
					  	<div>
						  	<?php 
						  		if($load5=="on"){
						  			echo '<button class="btn btn-info" onclick="load5_on()" name="load5_on" id="load5_on" disabled="">On</button>
						  			<button class="btn btn-danger" onclick="load5_off()" name="load5_off" id="load5_off">Off</button>';
						  		}
						  		elseif($load5=="off"){
						  			echo '<button class="btn btn-info" onclick="load5_on()" name="load5_on" id="load5_on">On</button>
						  			<button class="btn btn-danger" onclick="load1_off()" name="load1_off" id="load1_off"  disabled="">Off</button>';	
						  		}
						  		else{
						  			echo '<a href="#" class="btn btn-info">On</a>
						  			<a href="#" class="btn btn-danger">Off</a>';	
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