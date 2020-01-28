<?php
session_start();
$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn,'fpm');
$fname = $_POST['name'];
//$pass = $_POST['password'];
$gmail = $_POST['gmail'];
$mobile = $_POST['phno'];
$designation = $_POST['designation'];
$department = $_POST['department'];
$dob = $_POST['dob'];
$qualification = $_POST['qualification'];
$doj = $_POST['doj'];
$teaching = $_POST['teaching_exp'];
$industry = $_POST['industry_exp'];
$research = $_POST['research_exp'];
$others = $_POST['other_exp'];
$areaofspec = $_POST['area_of_specialization'];
$ug_taught = $_POST['ug'];
$postgrad = $_POST['pg'];

$s = "select * from `profile` where gmail = '$gmail'";
$result = mysqli_query($conn,$s);
$num = mysqli_num_rows($result);
if($num == 1){
    echo"username already taken";
    header('location:home.html');

}
else{
    $reg = "insert into `profile`(name,gmail,designation,department,dob,qualification,phno,doj) values ('$fname','$gmail','$designation','$department','$dob','$qualification','$mobile','$doj')";
    mysqli_query($conn,$reg);
    //$reg = "insert into `profile`(gmail) values ('$gmail')";
    $reg1 = "insert into `experience`(gmail,teaching_exp,industry_exp,research_exp,other_exp) values ('$gmail','$teaching','$industry','$research','$others')";
    mysqli_query($conn,$reg1);
    $reg2 = "insert into `specialization`(gmail,area_of_specialization,ug,pg) values ('$gmail','$areaofspec','$ug_taught','$postgrad')";
    mysqli_query($conn,$reg2);

    header('Location:journalsandstudentsguided.php');
}
?>