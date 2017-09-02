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
	$json1 = file_get_contents('https://api.thingspeak.com/channels/254856/fields/1.json');
	
	$obj1 = json_decode($json1,true);

		foreach ($obj1["feeds"] as $field1) {

			if($field1["field1"]==null){
				continue;
			}
			elseif($field1["field1"]=="ON")
			{
				$load1 = "ON";
			}
			else{
				$load1 = "OFF";
			}
 		}

?>
<?php 
	$json2 = file_get_contents('https://api.thingspeak.com/channels/254856/fields/2.json');

	$obj2 = json_decode($json2,true);


	foreach ($obj2["feeds"] as $field2) {

			if($field2["field2"]==null){
				continue;
			}
			elseif($field2["field2"]=="ON")
			{
				$load2 = "ON";
			}
			else{
				$load2 = "OFF";
			}
 		}

?>
<?php 
	$json3 = file_get_contents('https://api.thingspeak.com/channels/254856/fields/3.json');
	$obj3 = json_decode($json3,true);

	foreach ($obj3["feeds"] as $field3) {

			if($field3["field3"]==null){
				continue;
			}
			elseif($field3["field3"]=="ON")
			{
				$load3 = "ON";
			}
			else{
				$load3 = "OFF";
			}
 		}
?>

<?php 
	$json4 = file_get_contents('https://api.thingspeak.com/channels/254856/fields/4.json');
	$obj4 = json_decode($json4,true);

	foreach ($obj4["feeds"] as $field4) {

			if($field4["field4"]==null){
				continue;
			}
			elseif($field4["field4"]=="ON")
			{
				$load4 = "ON";
			}
			else{
				$load4 = "OFF";
			}
 		}
?>
<?php 
	$json5 = file_get_contents('https://api.thingspeak.com/channels/254856/fields/5.json');
	$obj5 = json_decode($json5,true);

	foreach ($obj5["feeds"] as $field5) {

			if($field5["field5"]==null){
				continue;
			}
			elseif($field5["field5"]=="ON")
			{
				$load5 = "ON";
			}
			else{
				$load5 = "OFF";
			}
 		}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Room 2</title>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

		<script type="text/javascript" src="js/jquery-latest.js"></script>

		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

		<script type="text/javascript">
			
			function load1_on()
            {
               
                $.ajax({
                type: 'POST',
                url: 'https://api.thingspeak.com/update?api_key=QMXOKV3H33IGX741&field1=ON',
                data: {},
                dataType: 'json',
                success: function(data) 
                { 
                	location.reload();
                	alert('Load 1 : on'); 
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
                url: 'https://api.thingspeak.com/update?api_key=QMXOKV3H33IGX741&field1=OFF',
                data: {},
                dataType: 'json',
                success: function(data) 
                { 
                	location.reload(); 
                	alert('Load 1 : off'); 
                },
                error: function() { 
                	alert('something bad happened'); 
                }
                });
            }

            function load2_on()
            {
               
                $.ajax({
                type: 'POST',
                url: 'https://api.thingspeak.com/update?api_key=QMXOKV3H33IGX741&field2=ON',
                data: {},
                dataType: 'json',
                success: function(data) 
                { 
                	location.reload(); 
                	alert('Load 2 : on'); 
                },
                error: function() { 
                	alert('something bad happened'); 
                }
                });
            }

			function load2_off()
            {
               
                $.ajax({
                type: 'POST',
                url: 'https://api.thingspeak.com/update?api_key=QMXOKV3H33IGX741&field2=OFF',
                data: {},
                dataType: 'json',
                success: function(data) 
                { 
                	location.reload(); 
                	alert('Load 2 : off'); 
                },
                error: function() { 
                	alert('something bad happened'); 
                }
                });
            }

            function load3_on()
            {
               
                $.ajax({
                type: 'POST',
                url: 'https://api.thingspeak.com/update?api_key=QMXOKV3H33IGX741&field3=ON',
                data: {},
                dataType: 'json',
                success: function(data) 
                { 
                	location.reload(); 
                	alert('Load 3 : on'); 
                },
                error: function() { 
                	alert('something bad happened'); 
                }
                });
            }

			function load3_off()
            {
               
                $.ajax({
                type: 'POST',
                url: 'https://api.thingspeak.com/update?api_key=QMXOKV3H33IGX741&field3=OFF',
                data: {},
                dataType: 'json',
                success: function(data) 
                { 
                	location.reload(); 
                	alert('Load 3 : off'); 
                },
                error: function() { 
                	alert('something bad happened'); 
                }
                });
            }

            function load4_on()
            {
               
                $.ajax({
                type: 'POST',
                url: 'https://api.thingspeak.com/update?api_key=QMXOKV3H33IGX741&field4=ON',
                data: {},
                dataType: 'json',
                success: function(data) 
                { 
                	location.reload(); 
                	alert('Load 4 : on'); 
                },
                error: function() { 
                	alert('something bad happened'); 
                }
                });
            }

			function load4_off()
            {
               
                $.ajax({
                type: 'POST',
                url: 'https://api.thingspeak.com/update?api_key=QMXOKV3H33IGX741&field4=OFF',
                data: {},
                dataType: 'json',
                success: function(data) 
                { 
                	location.reload(); 
                	alert('Load 4 : off'); 
                },
                error: function() { 
                	alert('something bad happened'); 
                }
                });
            }

            function load5_on()
            {
               
                $.ajax({
                type: 'POST',
                url: 'https://api.thingspeak.com/update?api_key=QMXOKV3H33IGX741&field5=ON',
                data: {},
                dataType: 'json',
                success: function(data) 
                { 
                	location.reload(); 
                	alert('Load 5 : on'); 
                },
                error: function() { 
                	alert('something bad happened'); 
                }
                });
            }

			function load5_off()
            {
               
                $.ajax({
                type: 'POST',
                url: 'https://api.thingspeak.com/update?api_key=QMXOKV3H33IGX741&field5=OFF',
                data: {},
                dataType: 'json',
                success: function(data) 
                { 
                	location.reload(); 
                	alert('Load 5 : off'); 
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
		        <li><a href="room1.php">Room 1</a></li>
		        <li class="active"><a href="room2.php">Room 2</a></li>
		        <li><a href="room3.php">Room 3</a></li>
		        <li><a href="logout.php">Logout</a></li>
		      </ul>
		    </div>
		  </div>
		</nav>

	<!-- Top nav Bar End -->

	<div align="center">
	  <h2>Room 2</h2>
	</div>
	<hr>
		<div class="container panel panel-default panel-body" style="margin-top: 1%">
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
						  			echo '<button class="btn btn-info" onclick="load1_on()" name="load1_on" id="load1_on">On</button>
						  			<button class="btn btn-danger" onclick="load1_off()" name="load1_off" id="load1_off">Off</button>';	
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
						  			echo '<button class="btn btn-info" onclick="load2_on()" name="load2_on" id="load2_on">On</button>
						  			<button class="btn btn-danger" onclick="load2_off()" name="load2_off" id="load2_off">Off</button>';
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
						  			echo '<button class="btn btn-info" onclick="load3_on()" name="load3_on" id="load3_on">On</button>
						  			<button class="btn btn-danger" onclick="load3_off()" name="load3_off" id="load3_off">Off</button>';	
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
						  			echo '<button class="btn btn-info" onclick="load4_on()" name="load4_on" id="load4_on">On</button>
						  			<button class="btn btn-danger" onclick="load4_off()" name="load4_off" id="load4_off">Off</button>';	
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
						  			<button class="btn btn-danger" onclick="load5_off()" name="load5_off" id="load5_off"  disabled="">Off</button>';	
						  		}
						  		else{
						  			echo '<button class="btn btn-info" onclick="load5_on()" name="load5_on" id="load5_on">On</button>
						  			<button class="btn btn-danger" onclick="load5_off()" name="load5_off" id="load5_off">Off</button>';	
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