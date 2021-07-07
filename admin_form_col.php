<!DOCTYPE html>
<html>
    <head>
        
        <title>Add College</title>
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
        <form action="add_col.php" method="POST">
            <!-- <p>
                <label for="clgid">Enter College id: </label>
                <input type="number" name="clgid" id="clgid">

            </p> -->
            <p>
                <label for="clgname">Enter College Name: </label>
                <input type="text" name="clgname" id="clgname">

            </p>
            <p>
                <label for="clgadd">Enter College Address: </label>
                <input type="text" name="clgadd" id="clgadd"> 
            </p>
            <p>
                <label for="clgph">Enter College Phone no: </label>
                <input type="text" name="clgph" id="clgph"> 
            </p>
            <p>
                <label for="clgcut">Enter College Cut off rank: </label>
                <input type="text" name="clgcut" id="clgcut"> 
            </p>
            <p>
                <label for="clgrnk">Enter College Rank: </label>
                <input type="text" name="clgrnk" id="clgrnk"> 
            </p>
            <p>
                <label for="clgunid">Enter University id: </label>
                <input type="text" name="clgunid" id="clgunid"> 
            </p>
            <input type="submit" value="Submit">
        </form>
        <br><br>

        <?php
          $conn = mysqli_connect("localhost", "root", "", "project");
 
          // Check connection
          if($conn === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
          }
          // echo "Connected Successfully";
          $sql = "SELECT * FROM college";
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            // echo "<tr><th>Admin_Id</th><th>Admin_Username</th><th>Admin_Password</th></tr>"
            echo "<center><table>";
            echo "<tr><th>College Id</th><th>College Type</th><th>College address</th><th>College Phno</th><th>CUT OFF Rank</th><th>College Rank</th><th>Uni Id</th></tr>";
            while($row = mysqli_fetch_assoc($result)) {
              echo "<tr><td>" . $row["clg_id"]. "</td><td>" . $row["clg_name"]. "</td><td>" . $row["clg_add"]. "</td><td>" .  $row["clg_phno"]. "</td><td>" .  $row["cut_rank"]. "</td><td>" .  $row["clg_rank"]. "</td><td>" .  $row["uni_id"].  "</td></tr>";
            }
            echo "</table></center>";
          } else {
            echo "0 results";
          }



mysqli_close($conn);
?>
        <br>
<br>
<br><br><br>

<a href="admin_col.php" class="btn btn-3">
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