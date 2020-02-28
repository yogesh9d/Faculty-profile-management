<!DOCKTYPE HTML>
<html>

    <head>
        <title>Pofiles List</title>
        <link rel="shortcut icon" href="logo.jpg" />
        <link rel="stylesheet" type="text/css" href="ProfilesList.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <br>
    <br>

    <body bgcolor="87ceeb">

        <div id = "main">
        <table bgcolor="ffffff" class="table">
            <tr>
                <td colspan="8">
                    <center>List of Teaching Faculty - Department of Computer Science Engineering</center>
                </td>
            </tr>
            <tr>
                <th>S.NO</th>
                <th>Photo</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Qualification</th>
                <th>Experience </th>
                <th>D.O.J</th>
                <th>Profile</th>
            </tr>

            <?php
                //*****************************************************************************/
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

                //***************************************************************************/

                function put_profiles(){
                    global $array, $connection;
                    $query = "select * from profile order by sno;";
                    $sql = mysqli_query($connection, "$query");

                    while($row = mysqli_fetch_array($sql)){
                        // if($row['sno'] != 1 && $row['sno'] != 9)
                        // continue;
                        echo "<tr><td>";
                        echo "<center>" . $row['sno'] . "</center></td>";
                        echo "<td><img src = img/" .$row['gmail'] . ".jpg height=\"150\" width=\"150\" ></td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['designation'] . "</td>";
                        echo "<td>" . $row['qualification'] . "</td>";

                        $query_experience = "select teaching_exp from experience where gmail = \"" .$row['gmail']. "\";";
                        $sql_experience = mysqli_query($connection, "$query_experience");

                        if($row_experience = mysqli_fetch_array($sql_experience)){
                            echo "<td>" . $row_experience['teaching_exp'] . "Yr(s)</td>";
                        }
                        else{
                            echo "<td>-</td>";
                        }
                        echo "<td>" . $row['doj'] . "</td>";
                        echo "<td><a href=\"DownloadProfile.php? id=" . $row['gmail'] ."\">More</a></td>";
                        echo "</tr>";
                    }



                }

                //     // <tr>
                //     //     <td>
                //     //         <center>2</center>
                //     //     </td>
                //     //     <td><img src="http://ais.anits.edu.in/images/1114_229.jpg" height="120" width="120"></td>
                //     //     <td>Pranitha Gadde</td>
                //     //     <td>Assistant Professor </td>
                //     //     <td>M.Tech</td>
                //     //     <td>7.0 Yr(s)</td>
                //     //     <td>06-06-2012</td>
                //     //     <td><a href="DownloadProfile.php? id=pranitha@gmail.com">More</a></td>
                //     // </tr>

                put_profiles();

            ?>

        </table>
            </div>
    </body>
</html>
