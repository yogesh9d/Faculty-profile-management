<!DOCTYPE html>
<html>
<head>
<title>registration form creation</title>    
<link rel="stylesheet" type-"text/css" href="1.css">
</head>
    <body>
<div class="register">
    <form method="post" id="register" action="journals.php">
    <label class="label label1">JOURNALS</label><br>
    <label>International Journals</label><br>
    <input type="number" class="a" placeholder="" name="internationaljour"><br><br>
        <label>National Journals</label><br>
    <input type="number" class="a" placeholder="" name="nationaljour"><br><br>
        <label>International Conferences</label><br>
    <input type="number" class="a" placeholder="" name="internationalconf"><br><br>
        <label>National Conferences</label><br>
    <input type="number" class="a" name="nationalconf" ><br><br>
        <label class="label label1">Students Guided</label><br>
    
        <label>UnderGraduate</label><br>
    <input type="number" class="a"  name="undergraduatestu"  ><br><br>
    <label>PostGraduate</label><br>
    <input type="number" class="a" placeholder=""  name="postgraduatestu" ><br><br>
        <label>Ph.D</label><br>
    <input type="number" class="a" placeholder=""  name="phdstu" ><br><br>
        <label>Projects Carried Out</label><br>
    <input type="number" class="a" placeholder=""  name="projects" ><br><br>
        <label>No.of Patents</label><br>
    <input type="number" class="a" placeholder=""  name="patents" ><br><br>
        <label>Technology Transfer</label><br>
    <input type="number" class="a" placeholder=""  name="techtransfer" ><br><br>
        <label>No.of books Published with Details</label><br>
    <input type="number" class="a " placeholder=""  name="noofbooks" ><br><br>
        <!-- <label>Professional Memberships</label><br> -->
    <!-- <input type="text" class="a b" placeholder=""><br><br> -->
        <label>E-Mail ID</label><br>
    <input type="email" class="a" placeholder="  Enter email"  name="gmail" ><br><br>
    <div class="sub">
        <input type="submit" class="submit" value="submit">
       </div>
</form>    
    </div>
        <button class="ach"><a style="text-decoration: none;color: white;"href="publications.php">Publications By Staff</a></button>
    </body>
</html>       