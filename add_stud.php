<!DOCTYPE html>
<html>
<head>
	<title>Add Student</title>
	<link rel="stylesheet" type="text/css" href="button.css">
  <!-- <style>
		h1 {
            color: ;
            font-family: verdana;
            font-size: 300%;
           }
           p  {
             color: lightblue;
             font-family: courier;
             font-size: 200%;
           }
	</style> -->
  <style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
</style>

	
</head>
<body>
  <ul>
  <li><a class="active" href="main.html">Home</a></li>
  <!-- <li><a href="">News</a></li> -->
  <li><a href="">Contact</a></li>
  <li><a href="">About</a></li>
</ul>
<?php
$link = mysqli_connect("localhost", "root", "", "project");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// echo "Connected Successfully";
$fname = mysqli_real_escape_string($link, $_REQUEST['studentFirstName']);
$lname = mysqli_real_escape_string($link, $_REQUEST['studentLastName']);
// $idd = mysqli_real_escape_string($link, $_REQUEST['studentId']);
$phn = mysqli_real_escape_string($link, $_REQUEST['studentPhn']);
$email = mysqli_real_escape_string($link, $_REQUEST['studentEmail']);
$add = mysqli_real_escape_string($link, $_REQUEST['studentAdd']);
$gender = mysqli_real_escape_string($link, $_REQUEST['studentGender']);
$age = mysqli_real_escape_string($link, $_REQUEST['studentAge']);
$rank = mysqli_real_escape_string($link, $_REQUEST['studentRank']);
// $clgid = mysqli_real_escape_string($link, $_REQUEST['studentClgid']);

 
$sql = "INSERT INTO STUDENT(s_fname ,s_lname,s_phno,s_email,s_add,s_gender,s_age,s_rank,clg_id) VALUES('$fname','$lname','$phn','$email','$add','$gender','$age','$rank',NULL)";
if(mysqli_query($link, $sql)){
  $last_id_stud = mysqli_insert_id($link);
    echo "<br><br><b>Records added successfully. Last inserted id: ". $last_id_stud . "</b>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}



mysqli_close($link);
?>
<br>
<br>

<a href="admin_stud.php" class="btn btn-2">
      <span class="txt">Go back</span>
      <span class="round"><i class="fa fa-chevron-right"></i></span>
</a>
<style>
     body {
        background-image: url('img2.png');
      height: 100%;

  /* Center and scale the image nicely */
  /* background-position: center; */
  background-repeat: no-repeat;
  background-size: cover;
    }
     </style>





</body>
</html>
