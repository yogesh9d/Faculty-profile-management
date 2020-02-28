<!DOCTYPE html>
<html>

    <?php

        session_start();
        $host = "localhost";
        $uname = "root";
        $pass = "";
        $database = "fpm";


        $connection = mysqli_connect($host, $uname, $pass);


        // echo "mysqli_error()";
        $selectdb = mysqli_select_db($connection, $database) or
        die("Database could not be selected");
        $result = mysqli_select_db($connection, $database)
        or die("database cannot be selected <br>");

        error_reporting(E_ALL & ~E_NOTICE);

        $id="";
        if(isset($_GET['id'])){
            $id = $_GET['id'];
        }
        // Fetch Record from Database
        $constraints = "";

        function addc($group, $constraint)
        {

            $var = $_POST[$constraint];
            if(isset($var)){
                global $constraints;
                if (strlen($constraints) == 0) {
                    $constraints = $constraints . $group . "." . $constraint;
                } else {
                    $constraints = $constraints . ", " . $group . "." . $constraint;
                }
            }
        }


        addc("profile", "sno");
        addc("profile", "name");
        addc("profile", "gmail");
        addc("profile", "department");
        addc("profile", "designation");
        addc("profile", "dob");
        addc("profile", "doj");
        addc("profile", "qualification");
        addc("profile", "phno");

        addc("achievements", "achievement_name");
        addc("achievements", "type");
        addc("achievements", "category");

        if($_POST['period'] = 'yes'){
        addc("achievements", "year_start");
        addc("achievements", "year_end");
        }


        addc("experience", "teaching_exp");
        addc("experience", "research_exp");
        addc("experience", "industry_exp");
        addc("experience", "other_exp");

        addc("membership", "field_of_membership");

        addc("specialization", "area_of_specialization");
        addc("specialization", "ug");
        addc("specialization", "pg");


        if (strlen($constraints) == 0) {
            echo "NONE SELECTED";
        }

        $query = "SELECT " . $constraints . " FROM profile
        LEFT JOIN publications ON profile.gmail = publications.gmail
        LEFT JOIN specialization ON profile.gmail = specialization.gmail
        LEFT JOIN membership ON profile.gmail = membership.gmail
        LEFT JOIN role ON profile.gmail = role.gmail
        LEFT JOIN workshops ON profile.gmail = workshops.gmail
        LEFT JOIN experience ON profile.gmail = experience.gmail
        LEFT JOIN achievements ON profile.gmail = achievements.gmail
        LEFT JOIN journals ON profile.gmail = journals.gmail
        order by sno
        ;";


        //***************************************************************************/

        $output = "";
        $sql = mysqli_query($connection, "$query");
        $columns_total = mysqli_num_fields($sql);

        // Get The Field Name

        for ($i = 0; $i < $columns_total; $i++) {
            // $heading = mysqli_field_name($sql, $i);
            $heading = mysqli_fetch_field_direct($sql, $i)->name;
            $output .= '"' . $heading . '",';
        }
        $output .= "\n";

        // Get Records from the table

        while ($row = mysqli_fetch_array($sql)) {
            for ($i = 0; $i < $columns_total; $i++) {
                $output .= '"' . $row["$i"] . '",';
            }
            $output .= "\n";
        }

        // Download the file

        $filename = "myFile.csv";
        header('Content-type: application/csv');
        header('Content-Disposition: attachment; filename=' . $filename);

        echo $output;
        exit;

    ?>

</html>
