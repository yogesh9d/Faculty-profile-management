<html>

<?php
session_start();

// $conn = mysqli_connect('localhost', 'root', '');
// mysqli_select_db($conn, 'fpm');

// $reg = "SELECT * FROM profile INTO OUTFILE '/home/grim/Desktop/test.csv';";
// mysqli_query($conn, $reg);

// SELECT
//     orderNumber, status, orderDate, requiredDate, comments
// FROM
//     orders

// WHERE
//     status = 'Cancelled'
// INTO OUTFILE 'C:/tmp/cancelled_orders.csv'
// FIELDS ENCLOSED BY '"'
// TERMINATED BY ';'
// ESCAPED BY '"'
// LINES TERMINATED BY '\r\n';

// $result = $db_con->query('SELECT * FROM `some_table`');
// if (!$result) die('Couldn\'t fetch records');
// $num_fields = mysql_num_fields($result);
// $headers = array();
// for ($i = 0; $i < $num_fields; $i++) {
//   $headers[] = mysql_field_name($result, $i);
// }
// $fp = fopen('php://output', 'w');
// if ($fp && $result) {
//   header('Content-Type: text/csv');
//   header('Content-Disposition: attachment; filename="export.csv"');
//   header('Pragma: no-cache');
//   header('Expires: 0');
//   fputcsv($fp, $headers);
//   while ($row = $result->fetch_array(MYSQLI_NUM)) {
//     fputcsv($fp, array_values($row));
//   }
//   die;
// }

// // ***************************************************************************************

// $data = [
//   ["firstname" => "Mary", "lastname" => "Johnson", "age" => 25],
//   ["firstname" => "Amanda", "lastname" => "Miller", "age" => 18],
//   ["firstname" => "James", "lastname" => "Brown", "age" => 31],
//   ["firstname" => "Patricia", "lastname" => "Williams", "age" => 7],
//   ["firstname" => "Michael", "lastname" => "Davis", "age" => 43],
//   ["firstname" => "Sarah", "lastname" => "Miller", "age" => 24],
//   ["firstname" => "Patrick", "lastname" => "Miller", "age" => 27]
// ];

// // ***************************************************************************************

// header("Content-Type: text/plain");

// $flag = false;
// foreach ($data as $row) {
//   if (!$flag) {
//     // display field/column names as first row
//     echo implode("\t", array_keys($row)) . "\r\n";
//     $flag = true;
//   }
//   echo implode("\t", array_values($row)) . "\r\n";
// }

// // ***************************************************************************************

// echo "<h1>helllllllllllllllooooooooooooooooo</h1>";

// function cleanData(&$str)
// {
//   $str = preg_replace("/\t/", "\\t", $str);
//   $str = preg_replace("/\r?\n/", "\\n", $str);
//   if (strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
// }



// // filename for download
// $filename = "website_data_" . date('Ymd') . ".xls";

// header("Content-Disposition: attachment; filename=\"$filename\"");
// header("Content-Type: application/vnd.ms-excel");

// $flag = false;
// foreach ($data as $row) {
//   if (!$flag) {
//     // display field/column names as first row
//     echo implode("\t", array_keys($row)) . "\r\n";
//     $flag = true;
//   }
//   array_walk($row, __NAMESPACE__ . '\cleanData');
//   echo implode("\t", array_values($row)) . "\r\n";
// }

// // ***************************************************************************************

// exit;
// Database Connection

$host = "localhost";
$uname = "root";
$pass = "";
$database = "fpm";


$connection = mysqli_connect($host, $uname, $pass);


// echo "mysqli_error()";

//or die("Database Connection Failed");
$selectdb = mysqli_select_db($connection, $database) or
  die("Database could not be selected");
$result = mysqli_select_db($connection, $database)
  or die("database cannot be selected <br>");



// Fetch Record from Database



$constraints = "";

function addc($group, $constraint)
{
  if ($_POST[$constraint] = 'yes') {
    // echo $constraint;
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

// if ($_POST['sno'])
//   $constraints = $constraints . " profile.sno, ";
// if ($_POST['name'])
//   $constraints = $constraints . " profile.name, ";
// if ($_POST['gmail'])
//   $constraints = $constraints . " profile.gmail, ";
// if ($_POST['department'])
//   $constraints = $constraints . " profile.department, ";
// if ($_POST['designation'])
//   $constraints = $constraints . " profile.designation, ";
// if ($_POST['dob'])
//   $constraints = $constraints . " profile.dob, ";
// if ($_POST['doj'])
//   $constraints = $constraints . " profile.doj, ";
// if ($_POST['qualification'])
//   $constraints = $constraints . " profile.qualification, ";
// if ($_POST['phno'])
//   $constraints = $constraints . " profile.phno, ";

// addc("achievements", "achievement_name");
// addc("achievements", "type");
// addc("achievements", "category");

// if($_POST['period'] = 'yes'){
//   addc("achievements", "year_start");
//   addc("achievements", "year_end");
// }


addc("experience", "teaching_exp");
addc("experience", "research_exp");
addc("experience", "industry_exp");
addc("experience", "other_exp");

addc("membership", "field_of_membership");

addc("specialization", "area_of_specialization");
addc("specialization", "ug");
addc("specialization", "pg");




// if ($_POST['gmail'])
//   $constraints = $constraints . " profile.gmail ";
// if ($_POST['gmail'])
//   $constraints = $constraints . " profile.gmail ";
// if ($_POST['gmail'])
//   $constraints = $constraints . " profile.gmail ";
// if ($_POST['gmail'])
//   $constraints = $constraints . " profile.gmail ";
// if ($_POST['gmail'])
//   $constraints = $constraints . " profile.gmail ";
// if ($_POST['gmail'])
//   $constraints = $constraints . " profile.gmail ";
// if ($_POST['gmail'])
//   $constraints = $constraints . " profile.gmail ";
// if ($_POST['gmail'])
//   $constraints = $constraints . " profile.gmail ";
// if ($_POST['gmail'])
//   $constraints = $constraints . " profile.gmail ";
// if ($_POST['gmail'])
//   $constraints = $constraints . " profile.gmail ";
// if ($_POST['gmail'])
//   $constraints = $constraints . " profile.gmail ";
// if ($_POST['gmail'])
//   $constraints = $constraints . " profile.gmail ";
// if ($_POST['gmail'])
//   $constraints = $constraints . " profile.gmail ";


if (strlen($constraints) == 0)
  echo "NONE SELECTED";

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
//***************************************************************************/
?>

</html>
