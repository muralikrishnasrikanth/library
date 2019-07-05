<?php ;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con) {
    print "connection established";
}else{
	print "connection failed";
}

 

$sql = "SELECT *FROM issue";



$result=mysqli_query($con,$sql); 

    while($row = mysqli_fetch_array($result)) {
      echo "<table>";
	  echo "<th>Member id</th>";
	  echo "<th>Book id</th>";
	  echo "<th>Issue Date</th>";
	  echo "<th>Return Date</th>";
	  echo "<tr>".
				"<td>".$row['mid']."</td><td>".$row['bid']."</td><td>".$row['idate']."</td><td>".$row['rdate']."</td></tr>";
		echo "</table>";
         
	}

mysqli_close($con);
?> 