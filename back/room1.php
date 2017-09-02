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
	$json1 = file_get_contents('https://api.thingspeak.com/channels/254852/fields/1.json?results=5');
	
	$obj1 = json_decode($json1);
	

?>
<?php 
	$json2 = file_get_contents('https://api.thingspeak.com/channels/254852/fields/2.json?results=5');

	$obj2 = json_decode($json2);


	if($obj2->feeds[1]->field2==null){

		$load2 = $obj2->feeds[0]->field2;
	}
	else{
		$load2 = $obj2->feeds[1]->field2;
	}

?>
<?php 
	$json3 = file_get_contents('https://api.thingspeak.com/channels/254852/fields/3.json?results=5');
	$obj3 = json_decode($json3);

	if($obj3->feeds[1]->field3==null){

		$load3 = $obj3->feeds[0]->field3;
	}
	else{
		$load3 = $obj3->feeds[1]->field3;
	}
?>

<?php 
	$json4 = file_get_contents('https://api.thingspeak.com/channels/254852/fields/4.json?results=5');
	$obj4 = json_decode($json4);

	if($obj4->feeds[1]->field4==null){

		$load4 = $obj4->feeds[0]->field4;
	}
	else{
		$load4 = $obj4->feeds[1]->field4;
	}
?>
<?php 
	$json5 = file_get_contents('https://api.thingspeak.com/channels/254852/fields/5.json?results=5');
	$obj5 = json_decode($json5);

	if($obj5->feeds[1]->field5==null){

		$load5 = $obj5->feeds[0]->field5;
	}
	else{
		$load5 = $obj5->feeds[1]->field5;
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
			
			function load1_on()
            {
               
                $.ajax({
                type: 'POST',
                url: 'https://api.thingspeak.com/update?api_key=6JH3YU0MDO0BC5AT&field1=ON',
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
                url: 'https://api.thingspeak.com/update?api_key=6JH3YU0MDO0BC5AT&field1=OFF',
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
                url: 'https://api.thingspeak.com/update?api_key=6JH3YU0MDO0BC5AT&field2=ON',
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
                url: 'https://api.thingspeak.com/update?api_key=6JH3YU0MDO0BC5AT&field2=OFF',
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
                url: 'https://api.thingspeak.com/update?api_key=6JH3YU0MDO0BC5AT&field3=ON',
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
                url: 'https://api.thingspeak.com/update?api_key=6JH3YU0MDO0BC5AT&field3=OFF',
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
                url: 'https://api.thingspeak.com/update?api_key=6JH3YU0MDO0BC5AT&field4=ON',
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
                url: 'https://api.thingspeak.com/update?api_key=6JH3YU0MDO0BC5AT&field4=OFF',
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
                url: 'https://api.thingspeak.com/update?api_key=6JH3YU0MDO0BC5AT&field5=ON',
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
                url: 'https://api.thingspeak.com/update?api_key=6JH3YU0MDO0BC5AT&field5=OFF',
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
	<!-- Top nav Bar End -->

	<div align="center">
	  <h2>Room 1</h2>
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