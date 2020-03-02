<?php
session_start();
$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn,'fpm');
$gmail = $_POST['gmail'];
$rof = $_POST['role_of_faculty'];
$duration = $_POST['duration'];

$s = "select * from `role` where gmail = '$gmail'";
$result = mysqli_query($conn,$s);
$num = mysqli_num_rows($result);
// if($num == 1){
//     echo"username already taken";
//     //header('location:home.html');

// }
// else{
    $reg = "insert into `role`(gmail,role_of_faculty,duration) values ('$gmail','$rof','$duration')";
    mysqli_query($conn,$reg);
    echo "successful";
    //header('Location:conferenceworkshops.php');

// }




?>
