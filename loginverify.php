<?php
session_start();
$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn,'fpm');
// $fname = $_POST['name'];
$pass = $_POST['password'];
$gmail = $_POST['email'];
// $mobile = $_POST['phno'];
// $gmail = $_POST['gmail'];
// $pass = $_POST['password'];

$s = "select * from `login` where userid = '$gmail' && pwd = '$pass'";
$result = mysqli_query($conn,$s);
$num = mysqli_num_rows($result);
if($num == 1){
    // session_start();
     $row =mysqli_fetch_assoc($result);
    $_SESSION["gmail"] = $row["userid"];
    
  //  echo "<form method=\"post\" action=\"dummye.php\" >";
  //  echo "<input type=\”gmail\” name=\”email\”  value=$gmail />";
   
  //  echo "<form method=\"post\" action=\"dummye.php\" >";
  //  echo "<input type=\”gmail\” name=\”gmail\”  placeholder=\"re-enter your email \" />";
  //  echo "<input type=\"submit\" name=\"submit\" value=\"edit\">";
  //  echo "</form>";
   
  //  function submission(){document.getElementById("submitHiddenVar").submit();// Form submission
  // }
//    $_SESSION["uid"] = $row["uid"];
// submission();
//echo $gmail;
  header('location:login2.php');  
}
else{
    echo"not registered";
    // header('location:newregisterform.php');
    
}
?>

