<?php
session_start();
if(isset($_SESSION['gmail'])){
//Database Connection
// include 'conn.php';
//Get ID from Database
$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn,'fpm');
// $s = "select * from `profile` where gmail = 'srinnivas@gmail.com'";
// $result = mysqli_query($conn,$s);
// $row = mysqli_fetch_array($result);


if(isset($_POST['gmail'])){
 $gmail=$_POST['gmail'];
//    echo $gmail;
//  $sql = "SELECT * FROM profile WHERE gmail ='$gmail'";
//  $sql1 = "SELECT * FROM experience WHERE gmail ='$gmail'";
//  $sql2 = "SELECT * FROM specialization WHERE gmail ='$gmail'";
$sql = "SELECT profile.gmail,profile.name,designation,profile.department,dob,qualification,doj,phno,
year_start,date_start,achievement_name,achievements.type ,achievements.category ,
teaching_exp,industry_exp , research_exp , other_exp
  ,internationaljour , nationaljour , internationalconf , nationalconf , undergraduatestu , postgraduatestu , phdstu , projects , patents , noofbooks , techtransfer ,
  role_of_faculty,duration,area_of_specialization,ug,pg,
  publications.title as 'ptitle',
conferencename, publications.category,academic,
workshops.title as 'stitle',
swc,workshops.category,place,workshops.date
 FROM profile
LEFT JOIN publications ON profile.gmail = publications.gmail
LEFT JOIN specialization ON profile.gmail = specialization.gmail
LEFT JOIN role ON profile.gmail = role.gmail
LEFT JOIN workshops ON profile.gmail = workshops.gmail
LEFT JOIN experience ON profile.gmail = experience.gmail
LEFT JOIN achievements ON profile.gmail = achievements.gmail
LEFT JOIN journals ON profile.gmail = journals.gmail
where profile.gmail = '$gmail'";
 $result = mysqli_query($conn, $sql);
 $row = mysqli_fetch_array($result);

//  $result1 = mysqli_query($conn, $sql1);
//  $row1 = mysqli_fetch_array($result1);

//  $result2 = mysqli_query($conn, $sql2);
//  $row2 = mysqli_fetch_array($result2);
 //echo $row;
}
//Update Information
if(isset($_POST['btn-update'])){


 $gmail = $_POST['gmail'];
// $mobile = $_POST['phno'];
// $designation = $_POST['designation'];
$department = $_POST['department'];
$name = $_POST['name'];
$designation = $_POST['designation'];
$dob = $_POST['dob'];
$qualification = $_POST['qualification'];
$doj = $_POST['doj'];
$phno = $_POST['phno'];
$teaching = $_POST['teaching_exp'];
$industry = $_POST['industry_exp'];
$research = $_POST['research_exp'];
$others = $_POST['other_exp'];
$areaofspec = $_POST['area_of_specialization'];
$ug_taught = $_POST['ug'];
$postgrad = $_POST['pg'];


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


$rof = $_POST['role_of_faculty'];
$duration = $_POST['duration'];


$ptitle = $_POST['ptitle'];
$cn= $_POST['conferencename'];
$pcat = $_POST['category'];
$aca = $_POST['academic'];

$stitle = $_POST['stitle'];
$swc = $_POST['swc'];
$scat = $_POST['category'];
$place = $_POST['place'];
$dat  = $_POST['date'];

$year_start = $_POST['year_start'];
$date_start = $_POST['date_start'];
$an = $_POST['achievement_name'];
$atype = $_POST['type'];
$acat = $_POST['category'];



 $update = "UPDATE profile,experience,specialization,role,journals,publications,workshops,achievements SET profile.department='$department',profile.name='$name',profile.designation='$designation',profile.dob='$dob',
 profile.qualification='$qualification',profile.doj='$doj',profile.phno='$phno'
 ,experience.teaching_exp = '$teaching', experience.industry_exp = '$industry',
 experience.research_exp = '$research',experience.other_exp = '$others',
area_of_specialization = '$areaofspec',ug  = '$ug_taught',pg = '$postgrad',
role_of_faculty = '$rof',duration = '$duration',
internationaljour = '$inj',nationaljour = '$nj',internationalconf = '$inco',nationalconf = '$nco',
undergraduatestu = '$ugs',postgraduatestu = '$pgs',phdstu = '$phdstu',projects = '$projects',
patents = '$patents',noofbooks = '$noofbooks',techtransfer = '$techtransfer',
publications.title = '$ptitle', conferencename = '$cn',publications.category = '$pcat',academic = '$aca',
workshops.title = '$stitle',workshops.swc = '$swc',workshops.category = '$scat',workshops.place = '$place',workshops.date = '$dat',
achievement_name = '$an',date_start = '$date_start',year_start = '$year_start',achievements.type = '$atype',achievements.category = '$acat'


 WHERE profile.gmail='$gmail' and experience.gmail='$gmail' and specialization.gmail='$gmail' and role.gmail='$gmail'
 and journals.gmail='$gmail' and publications.gmail = '$gmail' and workshops.gmail = '$gmail' and achievements.gmail='$gmail'";


 $up = mysqli_query($conn, $update);


}
?>
<!--Create Edit form -->
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="1.css">
<body>

<form method="post" class = "x" >
<h1>Edit faculty Information</h1>
<label>Gmail:</label><br/><br/><input type="gmail" name="gmail" class="a"  value="<?php echo $row['gmail']; ?>"><br/><br/><label>*gmail cannot be edited</label> <br/><br/>
 <label>Department:</label><br/><br/><input type="text" name="department" class="a"  value="<?php echo $row['department']; ?>"><br/><br/>
 <label>Name:</label><br/><br/><input type="text" name="name" class="a"  value="<?php echo $row['name']; ?>"><br/><br/>
 <label>Designation:</label><br/><br/><input type="text" class="a"  name="designation" value="<?php echo $row['designation']; ?>"><br/><br/>
 <label>Dob:</label><br/><br/><input type="date" name="dob" class="a"  value="<?php echo $row['dob']; ?>"><br/><br/>
 <label>Qualification:</label><br/><br/><input type="text" class="a"  name="qualification" value="<?php echo $row['qualification']; ?>"><br/><br/>
 <label>Doj:</label><br/><br/><input type="date" name="doj" class="a"  value="<?php echo $row['doj']; ?>"><br/><br/>
 <label>Phno:</label><br/><br/><input type="number" name="phno" class="a"  value="<?php echo $row['phno']; ?>"><br/><br/>
<!-- <label>Address:</label><input type="text" name="address" placeholder="Address" value="<?php echo $row['address']; ?>"><br/><br/> -->
<!-- <label>Mobile:</label><input type="text" name="phno" placeholder="Mobile" value="<?php echo $row['mobile']; ?>"><br/><br/> -->
<!-- <label>email:</label><input type="text" name="email" placeholder="email" value="<?php echo $row['email']; ?>"><br/><br/> -->

    <label class="label label1">Previous Experience[Yrs]</label><br>

     <label>Teaching</label><br>
    <input type="number" class="a"  placeholder="" name = "teaching_exp" value="<?php echo $row['teaching_exp']; ?>"><br><br>
    <label>Research</label><br>
    <input type="number" class="a"  placeholder="" name = "research_exp" value="<?php echo $row['research_exp']; ?>"> <br><br>
    <label>Industry</label><br>
    <input type="number" class="a"  placeholder="" name = "industry_exp" value="<?php echo $row['industry_exp']; ?>"> <br><br>
    <label>others</label><br>
    <input type="text" class="a"  placeholder="" name = "other_exp"value="<?php echo $row['other_exp']; ?>"> <br><br>


    <label>Area of Specialization</label><br>
    <input type="text" class="a b"  placeholder="" name = "area_of_specialization" value="<?php echo $row['area_of_specialization']; ?>"> <br><br>
         <label class="label label1">Subjects Taught</label><br>

         <label>UnderGraduate</label><br>
    <input type="text" class="a b"  placeholder="subjects taught in ug" name = "ug" value="<?php echo $row['ug']; ?>"> <br><br>
         <label>PostGraduate</label><br>
    <input type="text" class="a b"  placeholder="subjects taught in pg" name = "pg" value="<?php echo $row['pg']; ?>"> <br><br>


        <label>International Journals</label><br>
    <input type="number" class="a" placeholder="" name="internationaljour" value="<?php echo $row['internationaljour']; ?>"><br><br>
        <label>National Journals</label><br>
    <input type="number" class="a" placeholder="" name="nationaljour" value="<?php echo $row['nationaljour']; ?>"><br><br>
        <label>International Conferences</label><br>
    <input type="number" class="a" placeholder="" name="internationalconf" value="<?php echo $row['internationalconf']; ?>"><br><br>
        <label>National Conferences</label><br>
    <input type="number" class="a" name="nationalconf" value="<?php echo $row['nationalconf']; ?>" ><br><br>
        <label class="label label1">Students Guided</label><br>

        <label>UnderGraduate</label><br>
    <input type="number" class="a"  name="undergraduatestu"  value="<?php echo $row['undergraduatestu']; ?>" ><br><br>
    <label>PostGraduate</label><br>
    <input type="number" class="a" placeholder=""  name="postgraduatestu" value="<?php echo $row['postgraduatestu']; ?>" ><br><br>
        <label>Ph.D</label><br>
    <input type="number" class="a" placeholder=""  name="phdstu" value="<?php echo $row['phdstu']; ?>" ><br><br>
        <label>Projects Carried Out</label><br>
    <input type="number" class="a" placeholder=""  name="projects" value="<?php echo $row['projects']; ?>" ><br><br>
        <label>No.of Patents</label><br>
    <input type="number" class="a" placeholder=""  name="patents" value="<?php echo $row['patents']; ?>" ><br><br>
        <label>Technology Transfer</label><br>
    <input type="number" class="a" placeholder=""  name="techtransfer" value="<?php echo $row['techtransfer']; ?>" ><br><br>
        <label>No.of books Published with Details</label><br>
    <input type="number" class="a " placeholder=""  name="noofbooks" value="<?php echo $row['noofbooks']; ?>" ><br><br>


        <label>Title:</label><br>
    <input type="text" class="a" placeholder="" name="ptitle" value="<?php echo $row['ptitle']; ?>"><br><br>
         <label>conference/Journal Name:</label><br>
    <input type="text" class="a" placeholder="" name="conferencename" value="<?php echo $row['conferencename']; ?>"><br><br>
   <label>category:</label><br>
    <input type="text" class="a" placeholder="  National/international" name="category" value="<?php echo $row['category']; ?>"><br><br>
         <!-- <label>Staff Name:</label><br>
    <input type="text" class="a" placeholder="  Enter name of the Staff" name=""><br><br>
         <label>Department</label><br>
    <input type="text" class="a" placeholder=""><br><br> -->
         <label>Academic Year</label><br>
    <input type="text" class="a" placeholder="  YYYY-YYYY" name="academic" value="<?php echo $row['academic']; ?>"><br><br>


    <label>Title:</label><br>
    <input type="text" class="a" placeholder="" name="stitle" value="<?php echo $row['stitle']; ?>"><br><br>
         <label>Seminar/Workshop/conference</label><br>
    <input type="text" class="a" placeholder=""  name="swc" value="<?php echo $row['swc']; ?>"><br><br>
   <label>category:</label><br>
    <input type="text" class="a" placeholder="National/international"  name="category" value="<?php echo $row['category']; ?>"><br><br>
        <label>Place:</label><br>
    <input type="text" class="a" placeholder="collage name "  name="place" value="<?php echo $row['place']; ?>"><br><br>
        <label>Date:</label><br>
    <input type="date" class="a" placeholder=""  name="date" value="<?php echo $row['date']; ?>"><br><br>


    <label>Name of the Achievement:</label><br>
    <input type="text" class="a" placeholder="  Enter name of the Achievement" name="achievement_name" value="<?php echo $row['achievement_name']; ?>"><br><br>
         <label>Type:</label><br>
    <input type="text" class="a" placeholder="  Enter type of Achievement" name="type" value="<?php echo $row['type']; ?>"><br><br>
   <label>category:</label><br>
    <input type="text" class="a" placeholder="  National/international" name="category" value="<?php echo $row['category']; ?>"><br><br>
         <label>Year</label><br>
    <input type="text" class="a" placeholder="  YYYY-YYYY" name="year_start" value="<?php echo $row['year_start']; ?>"><br><br>
        <label>Date:</label><br>
    <input type="date" class="a" placeholder="" name="date_start" value="<?php echo $row['date_start']; ?>"><br><br>



    <label>Role of Faculty:</label><br>
    <input type="text" class="a" placeholder="" name = "role_of_faculty" value="<?php echo $row['role_of_faculty']; ?>"><br><br>
    <label>Duration:</label><br>
    <input type="number" class="a" placeholder="  Enter duration" name = "duration" value="<?php echo $row['duration']; ?>"><br><br>


<button type="submit" name="btn-update" id="btn-update" onClick="update()"><strong>Update</strong></button>
<a href="disp.php"><button type="button" value="button">Cancel</button></a>
</form>
<!-- Alert for Updating -->
<script>
function update(){
 var x;
 if(confirm("Updated data Sucessfully") == true){
 x= "update";
 }
}
</script>
</body>
</html>
<?php 
}
?>



<!-- // function cmd($outer,$inner){
//     global $update;
//     $update .= ", ".$inner." = '".$outer."'";
// }

// cmd ('inj','internationaljour');
// cmd ('nj','nationaljour');
// cmd ('inco','internationalconf');
// cmd ('nco','nationalconf');
// cmd ('ugs','undergraduatestu');
// cmd ('pgs','postgraduatestu');
// cmd ('phdstu','phdstu');
// cmd ('projects','projects');
// cmd ('patents','patents');
// cmd ('noofbooks','noofbooks');
// cmd ('techtransfer','techtransfer');


// cmd ('ptitle','ptitle');
// cmd ('cn','conferencename');
// cmd ('pcat','category');
// cmd ('aca','academic');

// cmd ('stitle','stitle');
// cmd ('type','swc');
// cmd ('cn','conferencename');
// cmd ('scat','category');
// cmd ('place','place');

// cmd ('dat ','date');

// cmd ('year_start','year_start');
// cmd ('date_start','date_start');
// cmd ('an','achievement_name');
// cmd ('type','type');
// cmd ('acat','category');
// cmd ('rof','role_of_faculty');
// cmd ('duration','duration'); -->