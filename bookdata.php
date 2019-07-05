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

 

$sql = "SELECT *FROM book";



$result=mysqli_query($con,$sql); 

	echo "<table>";
	  echo "<th>Book id</th>";
	  echo "<th>Book Name</th>";
	  echo "<th>Price</th>";
	  echo "<th>Edition</th>";
	  echo "<th>Quantity</th>";
    while($row = mysqli_fetch_array($result)) {
      
	  echo "<tr>".
				"<td>".$row['bid']."</td><td>".$row['bname'	]."</td><td>".$row['price']."</td><td>".$row['edition']."</td><td>".$row['quantity']."</td></tr>";
		
         
	}
	echo "</table>";

mysqli_close($con);
?> 