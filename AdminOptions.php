
<!DOCKTYPE HTML>
<html>
	<head> <title> Admin-Options-anits</title>
		<link rel="shortcut icon" href="logo.jpg"/>
		<link rel="stylesheet" type="text/css" href="AdminOptions.css">
	</head>
	<body>

		<div class="wrapper fadeIn first">
			<div id="formContent">
				<!-- Tabs Titles -->
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

                        if($_SESSION['login'] ==  "admin"){

                            if(isset($_POST['sign_out_sub'])){
                                session_destroy();
                                header('location:Home.html');

                            }

                            if(!isset($_POST['delete_profile_sub_s']) and !isset($_POST['add_profile_sub_s']) and !isset($_POST['edit_profile_sub_s']) ){
                                if(!isset($_POST['add_profile_sub']) and !isset($_POST['edit_profile_sub']) and !isset($_POST['delete_profile_sub'])){

                                    echo "
                                        <h2 class=\"active\">Admin Privilages</h2>
                                        <!-- Icon -->
                                        <div class=\"fadeIn first\">
                                        <br>
                                        <!-- Admin Privilages Form -->
                                        <form method = \"post\" name = \"add_profile\" id = \"add_profile\" action = \"AdminOptions.php\">
                                        <input type=\"submit\" name = \"add_profile_sub\" class=\"fadeIn fourth\" value=\"Add Profile\">
                                        </form>

                                        <form method = \"post\" name = \"edit_profile\" id = \"edit_profile\" action = \"AdminOptions.php\">
                                        <input type=\"submit\" name = \"edit_profile_sub\"  class=\"fadeIn fourth\" value=\"Edit Profile\">
                                        </form>

                                        <form method = \"post\" name = \"delete_profile\" id = \"delete_profile\" action = \"AdminOptions.php\">
                                        <input type=\"submit\"  name = \"delete_profile_sub\" class=\"fadeIn fourth\" value=\"Delete Profile\">
                                        </form>

                                        <form method = \"post\" name = \"sign_out\" id = \"sign_out\" action = \"AdminOptions.php\">
                                        <input type=\"submit\"  name = \"sign_out_sub\" class=\"fadeIn fourth\" value=\"Sign Out\">
                                        </form>
                                    ";
                                }

                                else{

                                    if(isset($_POST['delete_profile_sub'])){

                                        echo"
                                            <h2 class=\"active\">Delete Profile</h2>
                                            <div class=\"transpose first\">
                                            <br>
                                            <form method = \"post\" name = \"delete_profile_s\" id = \"add_profile\" action = \"AdminOptions.php\">
                                            <select id=\"profiles_list\" class=\"transpose first\" name=\"profiles_list\" >
                                        ";
                                        $query = "select userid from login;";
                                        $result = mysqli_query($connection,$query);

                                        while($row = mysqli_fetch_array($result))
                                            echo"<option value=\"" . $row['userid'] . "\">". $row['userid'] ."</option>";

                                        echo"
                                            </select>
                                            <br></br>
                                            <input type=\"submit\"  name = \"delete_profile_sub_s\" class=\"transpose first\" value=\"Delete Profile\">
                                            </form>
                                        ";
                                    }

                                    if(isset($_POST['add_profile_sub'])){

                                        echo"
                                            <h2 class=\"active\">Add Profile</h2>
                                            <div class=\"transpose first\">
                                            <br>
                                            <form method = \"post\" name = \"add_profile_s\" id = \"add_profile\" action = \"AdminOptions.php\">

                                            <input type=\"text\" id=\"login_id\" class=\"fadeIn second\" name=\"login_id\" placeholder=\"Login ID\" required>
                                            <input type=\"password\" id=\"password\" class=\"fadeIn third\" name=\"password\" placeholder=\"password\" required>

                                            <br></br>
                                            <input type=\"submit\"  name = \"add_profile_sub_s\" class=\"transpose first\" value=\"Add Profile\">
                                            </form>
                                        ";
                                    }

                                    if(isset($_POST['edit_profile_sub'])){

                                        echo"
                                            <h2 class=\"active\">Edit Profile</h2>
                                            <div class=\"transpose first\">
                                            <br>
                                            <form method = \"post\" name = \"edit_profile_s\" id = \"edit_profile\" action = \"editableform.php\">
                                            <select id=\"profiles_list\" class=\"transpose first\" name = \"gmail\" >
                                        ";
                                        $query = "select gmail from profile;";
                                        $result = mysqli_query($connection,$query);

                                        while($row = mysqli_fetch_array($result))
                                            echo"<option value=\"" . $row['gmail'] . "\">". $row['gmail'] ."</option>";

                                        echo"
                                            </select>
                                            <br></br>
                                            <input type=\"submit\"  name = \"edit_profile_sub_s\" class=\"transpose first\" value=\"Edit Profile\">
                                            </form>
                                        ";
                                    }

                                }
                            }

                            else{
                                if(isset($_POST['delete_profile_sub_s'])){

                                    $id = $_POST['profiles_list'];
                                    function del($table_name){
                                        global $id, $connection;
                                        $query = "delete from ". $table_name . " where gmail = '" . $id . "' ;";

                                        $result = mysqli_query($connection,$query);

                                        if($table_name == "login"){
                                            $query = "delete from ". $table_name . " where userid = '" . $id . "' ;";
                                            $result = mysqli_query($connection,$query);
                                            $query = " insert into deleted_profiles (gmail) values(\"". $id. "\");";
                                            $result = mysqli_query($connection,$query);
                                        }

                                    }



                                    del("achievements");
                                    del("experience");
                                    del("journals");
                                    del("membership");
                                    del("publications");
                                    del("role");
                                    del("specialization");
                                    del("workshops");
                                    del("profile");
                                    del("login");


                                    // function alert($msg) {
                                    //     echo "<script type='text/javascript'>alert('$msg');</script>";
                                    // }

                                    // alert("Deletion Successful");

                                    // // // echo "<div class=\"transpose first\"> Deletion Successful </div>";
                                    // // sleep(3);
                                    header('location:AdminOptions.php');


                                }
                                else if(isset($_POST['add_profile_sub_s'])){
                                    $id = $_POST['login_id'];
                                    $pwd = $_POST['password'];

                                    $query = " insert into login (userid, pwd) values(\"". $id. "\",\"". $pwd . "\");";
                                    $result = mysqli_query($connection,$query);

                                    echo "<div class=\"transpose first\"> Addition Successful </div>";
                                    sleep(3);
                                    header('location:AdminOptions.php');


                                }
                                // else if(isset($_POST['edit_profile_sub_s'])){
                                // }
                            }
                        }

                        else{
                            header('location:AdminLogin.php');

                        }

                   ?>
			    <div>
			</div>
		</div>
	</body>
</html>
