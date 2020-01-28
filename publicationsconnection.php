<?php
session_start();
$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn,'fpm');
$gmail = $_POST['gmail'];
$title = $_POST['title'];
$cn= $_POST['conferencename'];
$cat = $_POST['category'];
$aca = $_POST['academic'];

$s = "select * from `publications` where gmail = '$gmail'";
$result = mysqli_query($conn,$s);
$num = mysqli_num_rows($result);
if($num == 1){
    echo"username already taken";
    //header('location:home.html');

}
else{
    $reg = "insert into `publications`(gmail,title,conferencename,category,academic) values ('$gmail','$title','$cn','$cat','$aca')";
    mysqli_query($conn,$reg);
    // echo "successful";
    header('Location:publications.php');
    
}




?>