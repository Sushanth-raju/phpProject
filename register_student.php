<!DOCTYPE html>
<html>
    <head>
        
        <title>Register Student</title>
    <link rel="stylesheet" type="text/css" href="button.css">
      


    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
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
  <!-- <style>
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
          <center>
          <div class="container">
              <h1 class="bg-warning" width="100px">Welcome to Registration</h1>
              <h2 class="bg-success">Register yourself for getting to know more information about Engineering College's based on your rank!</h2>
              <br><h3>Enter details below</h3>
          </div>
          </center>
          <br><br><br>
        
 
        <?php
          session_start();
         echo '<form action="reg_stud.php" method="POST">
        <p>
                <label for="studentFirstName">Enter FirstName: </label>
                <input type="text" name="studentFirstName" id="studentFirstName">

            </p>
            <p>
                <label for="studentLastName">Enter Lastname: </label>
                <input type="text" name="studentLastName" id="studentLastName">

            </p>
            <!-- <p>
                <label for="studentId">Enter ID: </label>
                <input type="number" name="studentId" id="studentId"> 
            </p> -->
             <p>
                <label for="studentPhn">Enter Phone number: </label>
                <input type="number" name="studentPhn" id="studentPhn">

            </p>
             <p>
                <label for="studentEmail">Enter Email: </label>
                <input type="text" name="studentEmail" id="studentEmail">

            </p>
             <p>
                <label for="studentAdd">Enter Address: </label>
                <input type="text" name="studentAdd" id="studentAdd">

            </p>
             <p>
                <label for="studentGender">Enter Gender: </label>
                <input type="text" name="studentGender" id="studentGender">

            </p>
             <p>
                <label for="studentAge">Enter Age: </label>
                <input type="number" name="studentAge" id="studentAge">

            </p>
             <p>
                <label for="studentRank">Enter Rank: </label>
                <input type="number" name="studentRank" id="studentRank">

            </p>
             <!-- <p>
                <label for="studentClgid">Enter Collge ID: </label>
                <input type="number" name="studentClgid" id="studentClgid">

            </p> -->
            <input type="submit" value="Submit">
        </form>';
        ?>
        <br><br>

        <!-- <?php
          $conn = mysqli_connect("localhost", "root", "", "project");
 
          // Check connection
          if($conn === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
          }
          // echo "Connected Successfully";
          $sql = "SELECT * FROM student";
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            // echo "<tr><th>Admin_Id</th><th>Admin_Username</th><th>Admin_Password</th></tr>"
            echo "<center><table>";
            echo "<tr><th>s_fname</th><th>s_lname</th><th>s_id</th><th>s_phno</th><th>s_email</th><th>s_add</th><th>s_gender</th><th>s_age</th><th>s_rank</th><th>clg_id</th></tr>";
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>" . $row["s_fname"]. "</td><td>" . $row["s_lname"]. "</td><td>" . $row["s_id"]. "</td><td>" . $row["s_phno"]. "</td><td>" . $row["s_email"]. "</td><td>" . $row["s_add"]. "</td><td>" . $row["s_gender"]. "</td><td>" . $row["s_age"]. "</td><td>" . $row["s_rank"]. "</td><td>" . $row["clg_id"]. "</td></tr>";
            }
            echo "</table></center>";
          } else {
            echo "0 results";
          }



mysqli_close($conn);
?> -->
        <!-- <br>
<br>
<br><br><br> -->

<a href="user.html" class="btn btn-3">
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