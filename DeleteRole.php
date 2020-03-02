
<!DOCKTYPE HTML>
<html>
	<head> <title>Delete Role</title>
		<link rel="shortcut icon" href="logo.jpg"/>
		<link rel="stylesheet" type="text/css" href="AdminOptions.css">
	</head>
	<body>

		<div class="wrapper fadeIn first">
			<div id="formContent">
                <!-- Tabs Titles -->
				<h2 class="active"> Delete Role </h2>
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


                            if($_SESSION['gmail'] ==  "admin"){

                                echo"
                                    <h2 class=\"active\">Delete Profile</h2>
                                    <div class=\"transpose first\">
                                    <br>
                                    <form method = \"post\" name = \"delete_profile_s\" id = \"add_profile\" action = \"AdminOptions.php\">
                                    <select id=\"profiles_list\" class=\"transpose first\" name=\"profiles_list\" >
                                ";
                                $query = "select gmail, role_of_faculty from login where gmail = \"".$_SESSION['gmail']."\";";
                                $result = mysqli_query($connection,$query);

                                while($row = mysqli_fetch_array($result))
                                    echo"<option value=\"" . $row['role_of_faculty'] . "\">". $row['role_of_faculty'] ."</option>";

                                echo"
                                    </select>
                                    <br></br>
                                    <input type=\"submit\"  name = \"delete_role\" class=\"transpose first\" value=\"Delete role\">
                                    <input type=\"submit\"  name = \"finish\" class=\"transpose first\" value=\"Finish\">
                                    </form>
                                ";

                            }

                        if(isset($_POST['delete_role'])){
                            $query = "select gmail, role_of_faculty from login where gmail = \"".$_SESSION['gmail']."\";";
                            $result = mysqli_query($connection,$query);
                        }
                        if(isset($_POST['finish'])){
                            window.close();
                        }



                   ?>
			    <div>
			</div>
		</div>
	</body>
</html>
