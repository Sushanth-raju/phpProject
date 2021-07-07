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
<h2>List of Engineering College's</h2>
<h3>Click on Apply Now to register yourself to the college</h3>

<?php
          $conn = mysqli_connect("localhost", "root", "", "project");
 
          // Check connection
          if($conn === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
          }
          // echo "Connected Successfully";
          $i = 0;
          $sql = "select clg_name,uni_name,uni_type,clg_add,clg_phno,co.course_name,co.cut_off,clg_rank from college c,university u,courses co where c.uni_id=u.uni_id and c.clg_id=co.clg_id";
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            // echo "<tr><th>Admin_Id</th><th>Admin_Username</th><th>Admin_Password</th></tr>"
            echo "<center><table>";
            echo "<tr><th>Sl no</th><th>College Name</th><th>University Name</th><th>University Type</th><th>College Address</th><th>College Phone no</th><th>Course</th><th>Cut off Rank</th><th>College Rank</th></tr>";
            while($row = mysqli_fetch_assoc($result)) {$i++;
              echo "<tr><td>". $i . "</td><td>" . $row["clg_name"]. "<br><marquee>". $row["uni_type"]. " | ". $row["uni_name"]. " | NAAC Accreditation ( Grade 'A')</marquee></td><td>" . $row["uni_name"]. "</td><td>" . $row["uni_type"]. "</td><td>" .  $row["clg_add"]. "</td><td>" .  $row["clg_phno"]. "</td><td>" . $row["course_name"]. "</td><td>" .  $row["cut_off"].  "</td><td>" .  $row["clg_rank"].  '</td><td><a href="" class="button">Apply now!</a></td></tr>';
            }
            echo "</table></center>";
            
          } else {
            echo "0 results";
          }



mysqli_close($conn);
?>
<br><br><br>
<!-- <button class="button" onclick="myFunction()">Apply now!</button>
<br><br>
<form hidden >
<p>
                <label style="font-size: large;" for="">Enter College: </label>
                <input type="text" name="" id="">

            </p>
<input type="submit" value="Submit">
</form>

<script>
function myFunction() {
  document.getElementsByTagName("form")[0].removeAttribute("hidden");
}
</script> -->



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
