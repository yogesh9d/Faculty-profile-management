
<!DOCKTYPE HTML>
<html>
	<head> <title>Login-anits</title>
		<link rel="shortcut icon" href="logo.jpg"/>
		<link rel="stylesheet" type="text/css" href="Login.css">
	</head>
	<body>

		<div class="wrapper fadeIn first">
			<div id="formContent">
				<!-- Tabs Titles -->
				<h2 class="active"> Sign In </h2>


				<!-- Icon -->
				<div class="fadeIn first">
					<form method = "post" id = "login" action = "Login.php">
					<!-- Login Form -->
					<?php
						session_start();
						$host = "localhost";
						$uname = "root";
						$pass = "";
						$database = "fpm";
						$connection = mysqli_connect($host, $uname, $pass);

						$selectdb = mysqli_select_db($connection, $database) or
						die("Database could not be selected");
						$result = mysqli_select_db($connection, $database)
						or die("database cannot be selected <br>");

					    function redirect($url) {
    						ob_start();
    						header('Location: '.$url);
   							ob_end_flush();
   							die();
						}

						$login_placeholder = "login ID";
						$password_placeholder = "password";
						$login_val = "";

						function validate_input(){
							global $connection, $login_val, $login_placeholder, $password_placeholder;
							$query = "select userid from login where userid = \"" . $_POST['login'] ."\";" ;
							$result = mysqli_query($connection, "$query");
							if($row = mysqli_fetch_array($result)){
									$login_val = $_POST['login'];
									if(isset($_POST['password']) and $_POST['password']!="")
										$password_placeholder = "invalid password";
									else
										$password_placeholder = "enter password";
							}
							else{
								$login_val = "";
								if($_POST['login'] != "")
									$login_placeholder = "ID does not exist";
								$password_placeholder = "password";
							}
						}

						if(isset($POST['login']) != "" or isset($_POST['password']) != "")
							validate_input();

						// $login_placeholder = "login ID";
						// // if(isempty($_POST["login"]))
						// if(isset($_POST['login']))
						// $login_placeholder = $_POST['login'];


						// $password_placeholder = "password";
						// // if(isempty($_POST["password"]))
						// if(isset($_POST['password']))
						// $password_placeholder = $_POST['password'];

						echo "<input type=\"text\" id=\"login\" class=\"fadeIn second\" name=\"login\" value = \"". $login_val ."\" placeholder=\"" . $login_placeholder  . "\">";
						echo "<input type=\"password\" id=\"password\" class=\"fadeIn third\" name=\"password\" placeholder=\"" . $password_placeholder . "\">";


						if(isset($_POST['login']) and isset($_POST['password'])){

							$query = "select userid, pwd from login where userid = \"" . $_POST['login'] ."\" and pwd = \"" . $_POST['password'] . "\";" ;
							// $query = "select * from login";
							$result = mysqli_query($connection, "$query");

							// echo "<h1>". $row['userid']. $row['pwd'] . "</h1>";
							if($row = mysqli_fetch_array($result)){
								$_SESSION['gmail'] = $_POST['login'];
								if($_POST['login'] == 'admin')
									redirect('AdminOptions.php');
								else{
									$query = "select * from profile where gmail = \"" . $_POST['login'] ."\" ;" ;
									$result = mysqli_query($connection, "$query");

									if($row = mysqli_fetch_array($result))
									header('location:EditableForm.php');
									else
									header('location:ProfileDetails.html');

								}

							}
						}

						// echo "<h1>".$_POST['password']."<h1>";

					?>

					<input type="submit" class="fadeIn fourth" value="Log In">
					</form>
					<!-- Remind Passowrd -->
				<div id="formFooter">
				<a class="underlineHover" href="Forgotpassword.html">Forgot Password?</>
			</div>
		</div>
	</body>
</html>
