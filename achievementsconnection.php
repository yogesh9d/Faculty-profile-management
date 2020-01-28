<?php
session_start();
$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn,'fpm');
$gmail = $_POST['gmail'];
$year = $_POST['year'];
$date = $_POST['date'];
$an = $_POST['achievement_name'];
$type = $_POST['type'];
$cat = $_POST['category'];
$staff_name = $_POST['staff_name'];

$s = "select * from `achievements` where gmail = '$gmail'";
$result = mysqli_query($conn,$s);
$num = mysqli_num_rows($result);
if($num == 1){
    echo"username already taken";
    //header('location:home.html');

}
else{
    $reg = "insert into `achievements`(gmail,year,date,achievement_name,type,category,staff_name) values ('$gmail','$year','$date','$an','$type','$cat','$staff_name')";
    mysqli_query($conn,$reg);
   echo "successful";
     header('Location:achievemnets.php');

}





?>