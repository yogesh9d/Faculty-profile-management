<!DOCKTYPE HTML>
<html>

    <head>
        <title> Login-anits</title>
        <link rel="shortcut icon" href="logo.jpg" />
        <link rel="stylesheet" type="text/css" href="Download1.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>

    <body>

        <div class = "items">





        <div class = "boxed">
            <h2 class="h2x active active1">Profile Details</h2>
            <?php
                $array = array(
                  'Email' => 'gmail','Sno.' => 'sno','Name' => 'name',
                  'Designation' => 'designation','Department' => 'department',
                  'DOB' => 'dob','Qualification' => 'qualification',
                  'DOJ' => 'doj','Phone Number' => 'phno',


                  'Teaching' => 'teaching_exp','Research' => 'research_exp',
                  'Industry' => 'industry_exp','Other' => 'other_exp',



                  'Area of specialization' => 'area_of_specialization','Under graduate' => 'ug',
                  'Post graduate' => 'pg',

                  'International journals' => 'internationaljour',
                  'National journals' => 'nationaljour',
                  'International conferences' => 'internationalconf',
                  'National conferences' => 'nationalconf',
                  'Undergraduate students' => 'undergraduatestu',
                  'Postgraduate students' => 'postgraduatestu',
                  'Phd students' => 'phdstu','Projects carried out' => 'projects','No. of patents' => 'patents',
                  'No. of books published' => 'noofbooks','Technology transfer' => 'techtransfer',
                  'Memberships' => 'field_of_membership',


                  //   '' => '','' => '','' => '','' => '','' => '','' => '','' => '',

                );


                /*****************************************************************************/
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

                $id = "sivaranjani.cse@anits.edu.in";

                $profile = array("Name", "Designation", "Department", "DOB", "Qualification", "DOJ", "Email", "Phone Number");
                $experience = array("Teaching", "Research", "Industry", "Other");
                $specialization = array("Area of specialization");
                $subjectstaught = array("Under graduate", "Post graduate");
                $journals =  array("International journals", "National journals", "International conferences", "National conferences");
                $students_guided = array("Undergraduate students", "Postgraduate students", "Phd students");
                $miscellaneous = array("Projects carried out", "No. of patents", "Technology transfer", "No. of books published");


                //***************************************************************************/

                function put_attrib($table, $id, $set_of_val){
                    global $array, $connection;
                    $query = "select * from " . $table . " where Gmail = '" . $id . "' ;";
                    $sql = mysqli_query($connection, "$query");
                    $row = mysqli_fetch_array($sql);

                    echo "<div>";
                    foreach ($set_of_val as $attrib){
                    put_attrib_in_div($attrib, $row, $id);
                    }
                    echo "</div>";
                }

                function put_attrib_in_div($attrib, $row, $id){
                    global $array;

                    echo "<div>";
                    echo "<p class = \"attribstyle clear\">". $attrib ." : </p>";
                    echo "<p class = \"valstyle clear\">". $row[$array[$attrib]] ."</p>";
                    if($attrib == "Designation"){
                        echo "<img class = \"x\" src = img/" .$id . ".jpg></img>";
                    }

                    echo "</div>";
                }

                function sideheading($name){
                    echo "<div><p class = \"sideheadingstyle \"> " . $name . " </p></div>";
                }

                // function put_publications($table, $id, $set_of_val){
                //     global $array, $connection;

                //     echo "<div>";
                //     foreach ($set_of_val as $attrib){
                //         $query = "select count(*) as 'count' from " . $table . " where Gmail = '" . $id . "' and category = 'national' ;";

                //         $sql = mysqli_query($connection, "$query");
                //         $row = mysqli_fetch_array($sql);

                //         echo "<p>kkkkk</p>";

                //         echo "<div>";
                //         echo "<p class = \"attribstyle clear\">". $attrib ." : </p>";
                //         echo "<p class = \"valstyle clear\">". $row['count'] ."</p>";
                //         echo "</div>";

                //     }
                //     echo "</div>";
                // }

                function put_memberships($table, $id){
                    global $array, $connection;
                    $query = "select field_of_membership from " . $table . " where gmail = '" . $id . "' ;";
                    $sql = mysqli_query($connection, "$query");
                    $memberships = "";
                    while($row = mysqli_fetch_array($sql)){
                        if(strlen($memberships) == 0)
                            $memberships .= $row['field_of_membership'];
                        else
                            $memberships .= ", " . $row['field_of_membership'];
                    }

                    echo "<div>";
                    echo "<p class = \"attribstyle clear\">Memberships : </p>";
                    echo "<p class = \"valstyle clear\">". $memberships ."</p>";
                    echo "</div>";


                    echo "</div>";
                }

                //***************************************************************************/

                sideheading("Profile");

                put_attrib("profile", $id, $profile);

                sideheading("Experience");

                put_attrib("experience", $id, $experience);

                sideheading("Specialization");

                put_attrib("specialization", $id, $specialization);

                sideheading("Subjects taught");

                put_attrib("specialization", $id, $subjectstaught);

                sideheading("Journals");

                put_attrib('journals', $id, $journals);

                sideheading("Students guided");

                put_attrib('journals', $id, $students_guided);

                sideheading("Miscellaneous");

                put_attrib('journals', $id, $miscellaneous);

                sideheading("Memberships");

                put_memberships('membership', $id);

                //*****************************************************************************/
            ?>
        </div>
   </div>
    </body>

</html>
