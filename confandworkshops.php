<?php
session_start();
$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn,'fpm');
$gmail = $_POST['gmail'];
$title = $_POST['title'];
$type = $_POST['s/w/c'];
// $cn= $_POST['conferencename'];
$cat = $_POST['category'];
$place = $_POST['place'];
$name = $_POST['staff_name'];
$dat  = $_POST['date'];
$dept = $_POST['department'];

$s = "select * from `workshops` where gmail = '$gmail'";
$result = mysqli_query($conn,$s);
$num = mysqli_num_rows($result);
if($num == 1){
    echo"username already taken";
    //header('location:home.html');

}
else{
    $reg = "insert into `workshops`(gmail,title,s/w/c,category,place,staff_name,date,department) values ('$gmail','$title','$type','$cat','$place','$name','$dat','$dept')";
    mysqli_query($conn,$reg);
    // echo "successful";
    header('Location:conferenceworkshops.php');
}




?>