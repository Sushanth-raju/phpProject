<!DOCTYPE html>
<html>
<head>
	<title>Register Student</title>
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
table {
  width:100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  font-family: "Comic Sans MS", cursive, sans-serif;
}
th, td {
  padding: 15px;
  text-align: left;
  font-family: "Comic Sans MS", cursive, sans-serif;
}
table tr:nth-child(even) {
  background-color: #eee;
  font-family: "Comic Sans MS", cursive, sans-serif;
}
table tr:nth-child(odd) {
 background-color: #fff;
 font-family: "Comic Sans MS", cursive, sans-serif;
}
table th {
  background-color: black;
  color: white;
   font-family: Impact, Charcoal, sans-serif;
   font-size: 15pt;
}
</style>
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
<style>
.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 15px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
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

    <h2>Based on your rank, here are colleges displayed below.</h2>
    <h2>Click on Apply Now to select particular College</h2>

<?php
session_start();
$_SESSION['name'] = $_POST['studentFirstName'];
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
//   $last_id_stud = mysqli_insert_id($link);
    echo '<script>alert("Registered Successfully!")</script>';
    // echo "<br><br><b>Registered successfully! </b>";    
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}



mysqli_close($link);
?>

<?php
          $conn = mysqli_connect("localhost", "root", "", "project");
 
          // Check connection
          if($conn === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
          }
          // echo "Connected Successfully";
          $sql = "select clg_name,uni_name,uni_type,clg_add,clg_phno,co.course_name,co.cut_off,clg_rank from college c,university u,courses co where c.uni_id=u.uni_id and c.clg_id=co.clg_id and c.cut_rank>'$rank';";
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            // echo "<tr><th>Admin_Id</th><th>Admin_Username</th><th>Admin_Password</th></tr>"
            echo "<center><table>";
            echo "<tr><th>College Name</th><th>University Name</th><th>University Type</th><th>College Address</th><th>College Phone no</th><th>Course</th><th>Cut off Rank</th><th>College Rank</th></tr>";
            while($row = mysqli_fetch_assoc($result)) {
              echo "<tr><td>" . $row["clg_name"]. "<br><marquee>". $row["uni_type"]. " | ". $row["uni_name"]. " | NAAC Accreditation ( Grade 'A')</marquee></td><td>" . $row["uni_name"]. "</td><td>" . $row["uni_type"]. "</td><td>" .  $row["clg_add"]. "</td><td>" .  $row["clg_phno"]. "</td><td>" . $row["course_name"]. "</td><td>" .  $row["cut_off"]. "</td><td>" .  $row["clg_rank"].  '</td><td><a href="reg_succ.php?cl_name=' . $row['clg_name'] . ' " class="button">Apply now!</a></td></tr>';
            }
            echo "</table></center>";
          } else {
            echo "0 results";
          }



mysqli_close($conn);
?>


<br>
<br>

<!-- <a href="rank_based_tables.php" class="btn btn-2">
      <span class="txt">Proceed!</span>
      <span class="round"><i class="fa fa-chevron-right"></i></span>
</a> -->
<style>
     body {
        background-image: url('img2.png');
      height: 100%;

  
  background-repeat: no-repeat;
  background-size: cover;
    }
     </style>





</body>
</html>
