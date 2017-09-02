<?php 
ini_set('display_errors', 1 );
error_reporting(E_ALL);
  session_start();
?>
<?php 
	include('config.php');

	if(isset($_POST['submit'])){

		$username= isset($_POST['username']) ? $_POST['username'] : "";
		$password= isset($_POST['password']) ? $_POST['password'] : "";
		$query = "SELECT * FROM sha_users WHERE username = ? AND password = ?";
		        $stmt = $con->prepare( $query );
		        $stmt->bindParam(1, $username);
		        $stmt->bindParam(2, $password);
		        $stmt->execute();
		        $num = $stmt->rowCount();
 
	        if($num>0){
				
				
				 $_SESSION['user_name'] = $username;
				 while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
                    {
                        $_SESSION['user_name'] = $row['username'];                    
                    }

                    header("location:user.php");
	        }
	        else{
	        	echo "Your Not registerd Please login to register";
	        }

	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>SHA</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style type="text/css">
		@import url(https://fonts.googleapis.com/css?family=Roboto:300);

		.login-page {
		  width: 360px;
		  padding: 8% 0 0;
		  margin: auto;
		}
		.form {
		  position: relative;
		  z-index: 1;
		  background: #FFFFFF;
		  max-width: 360px;
		  margin: 0 auto 100px;
		  padding: 45px;
		  text-align: center;
		  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
		}
		.form input {
		  font-family: "Roboto", sans-serif;
		  outline: 0;
		  background: #f2f2f2;
		  width: 100%;
		  border: 0;
		  margin: 0 0 15px;
		  padding: 15px;
		  box-sizing: border-box;
		  font-size: 14px;
		}
		.form button {
		  font-family: "Roboto", sans-serif;
		  text-transform: uppercase;
		  outline: 0;
		  background: #4CAF50;
		  width: 100%;
		  border: 0;
		  padding: 15px;
		  color: #FFFFFF;
		  font-size: 14px;
		  -webkit-transition: all 0.3 ease;
		  transition: all 0.3 ease;
		  cursor: pointer;
		}
		.form button:hover,.form button:active,.form button:focus {
		  background: #43A047;
		}
		.form .message {
		  margin: 15px 0 0;
		  color: #b3b3b3;
		  font-size: 12px;
		}
		.form .message a {
		  color: #4CAF50;
		  text-decoration: none;
		}
		.form .register-form {
		  display: none;
		}
		.container {
		  position: relative;
		  z-index: 1;
		  max-width: 300px;
		  margin: 0 auto;
		}
		.container:before, .container:after {
		  content: "";
		  display: block;
		  clear: both;
		}
		.container .info {
		  margin: 50px auto;
		  text-align: center;
		}
		.container .info h1 {
		  margin: 0 0 15px;
		  padding: 0;
		  font-size: 36px;
		  font-weight: 300;
		  color: #1a1a1a;
		}
		.container .info span {
		  color: #4d4d4d;
		  font-size: 12px;
		}
		.container .info span a {
		  color: #000000;
		  text-decoration: none;
		}
		.container .info span .fa {
		  color: #EF3B3A;
		}
		body {
		  background: #76b852; /* fallback for old browsers */
		  background: -webkit-linear-gradient(right, #76b852, #8DC26F);
		  background: -moz-linear-gradient(right, #76b852, #8DC26F);
		  background: -o-linear-gradient(right, #76b852, #8DC26F);
		  background: linear-gradient(to left, #76b852, #8DC26F);
		  font-family: "Roboto", sans-serif;
		  -webkit-font-smoothing: antialiased;
		  -moz-osx-font-smoothing: grayscale;      
		}
	</style>
</head>
<body>
<div class="login-page">
  <div class="form">
    <form class="login-form" action="" method="post">
      <input type="text" name="username" placeholder="username" required="" />
      <input type="password" name="password" placeholder="password" required="" />
      <button name="submit">login</button>
    </form>
  </div>
</div>	
</body>
</html>