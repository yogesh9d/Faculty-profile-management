<?php
session_start();
$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn,'fpm');
$gmail = $_POST['gmail'];
$inj = $_POST['internationaljour'];
$nj = $_POST['nationaljour'];
$inco = $_POST['internationalconf'];
$nco = $_POST['nationalconf'];
$ugs = $_POST['undergraduatestu'];
$pgs = $_POST['postgraduatestu'];
$phdstu = $_POST['phdstu'];
$projects = $_POST['projects'];
$patents = $_POST['patents'];
$noofbooks = $_POST['noofbooks'];
$techtransfer = $_POST['techtransfer'];


$s = "select * from `journals` where gmail = '$gmail'";
$result = mysqli_query($conn,$s);
$num = mysqli_num_rows($result);
if($num == 1){
    echo"username already taken";
    //header('location:home.html');

}
else{
    $reg = "insert into `journals`(gmail,internationaljour,nationaljour,internationalconf,nationalconf,undergraduatestu,postgraduatestu,phdstu,projects,patents,noofbooks,techtransfer) values ('$gmail','$inj','$nj','$inco','$nco','$ugs','$pgs','$phdstu','$projects','$patents','$noofbooks','$techtransfer')";
    mysqli_query($conn,$reg);
 
    header('Location:publications.php');
}





// echo "successful"

?>


