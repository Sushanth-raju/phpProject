<!DOCTYPE html>
<html>
<head>
	<title>Delete University</title>
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
  /* width:100%; */
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
$uniidell = mysqli_real_escape_string($link, $_REQUEST['uniidel']);



$sql = "DELETE FROM UNIVERSITY WHERE uni_id='$uniidell'";
if(mysqli_query($link, $sql)){
    echo "<br><br><b>Record Deleted successfully.</b>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
echo"<br><br><br><br><br>";

$sql1 = "SELECT * FROM university";
          $result = mysqli_query($link, $sql1);
          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            // echo "<tr><th>Admin_Id</th><th>Admin_Username</th><th>Admin_Password</th></tr>"
            echo "<center><table>";
            echo "<tr><th>University Id</th><th>University Type</th><th>University Name</th></tr>";
            while($row = mysqli_fetch_assoc($result)) {
              echo "<tr><td>" . $row["uni_id"]. "</td><td>" . $row["uni_type"]. "</td><td>" . $row["uni_name"]. "</td></tr>";
            }
            echo "</table></center>";
          } else {
            echo "0 results";
          }



mysqli_close($link);
?>

<br>
<br>

<a href="admin_uni.php" class="btn btn-2">
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
