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

 

$sql = "SELECT *FROM member";



$result=mysqli_query($con,$sql); 

	echo "<table>";
	  echo "<th>Member id</th>";
	  echo "<th>Member Name</th>";
	  echo "<th>Email</th>";
	  echo "<th>Department</th>";
	  echo "<th>Year</th>";
    while($row = mysqli_fetch_array($result)) {
      
	  echo "<tr>".
				"<td>".$row['mid']."</td><td>".$row['mname']."</td><td>".$row['email']."</td><td>".$row['dept']."</td><td>".$row['yea']."</td></tr>";
		
         
	}
	echo "</table>";

mysqli_close($con);
?> 