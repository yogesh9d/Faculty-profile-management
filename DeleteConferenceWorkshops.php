
<!DOCKTYPE HTML>
<html>
	<head> <title>Delete Workshop?Conference</title>
		<link rel="shortcut icon" href="logo.jpg"/>
		<link rel="stylesheet" type="text/css" href="AdminOptions.css">
	</head>
	<body>

		<div class="wrapper fadeIn first">
			<div id="formContent">
                <!-- Tabs Titles -->
				<h2 class="active"> Delete Workshop/Conference </h2>
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



                        echo"

                            <div class=\"transpose first\">
                            <br>
                            <form method = \"post\" name = \"delete_profile_s\" id = \"add_profile\" action = \"DeleteConferenceWorkshops.php\">
                            <select id=\"profiles_list\" class=\"transpose first\" name=\"wc_title\" >
                        ";
                        $query = "select gmail, title from workshops where gmail = \"".$_SESSION['gmail']."\";";
                        $result = mysqli_query($connection,$query);

                        while($row = mysqli_fetch_array($result))
                            echo"<option value=\"" . $row['title'] . "\">". $row['title'] ."</option>";

                        echo"
                            </select>
                            <br></br>
                            <input type=\"submit\"  name = \"delete_cw\" class=\"transpose first\" value=\"Delete Workshop/Conference\">
                            <input type=\"submit\"  name = \"finish\" class=\"transpose first\" value=\"Finish\">
                            </form>
                        ";

                        // echo "<h1>\" "$_SESSION['gmail']\" . \"'</h1>";
                        // echo "<h1> " .$_SESSION['gmail'] ." </h1>";
                        // echo "<h1> " . $_POST['role_of_faculty'] ." </h1>";
                        // header('location:DeleteRole.php');

                        if(isset($_POST['delete_cw'])){
                        //      echo "<h1> " .$_SESSION['gmail'] ." </h1>";
                        // echo "<h1> " . $_POST['role_of_faculty'] ." </h1>";
                            // echo $_SESSION['gmail'] . $_POST['role_of_faculty'];
                            $query = "delete from workshops where gmail = \"".$_SESSION['gmail']."\" and title = \"".$_POST['wc_title']."\";";
                            $result = mysqli_query($connection,$query);
                            header('location:DeleteConferenceWorkshops.php');

                        }
                        if(isset($_POST['finish'])){
                            myWindow.close();
                        }
                   ?>
			    <div>
			</div>
		</div>
	</body>
</html>
