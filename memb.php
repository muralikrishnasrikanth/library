 <?php include 'user.html';
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
$id=$_POST['rid'];
$text=$_POST['name'];
$mail=$_POST['email'];
$dpt=$_POST['dept'];
$yr=$_POST['year'];
 

$sql = "INSERT INTO member VALUES('$id','$text','$mail','$dpt','$yr')";
//$sql="select *from member";

if (mysqli_query($con,$sql)) 
{
    print "New record created successfully";
	
}
 else 
 {
    echo "Error: " . $sql . "<br>" . $con->error;
}

mysqli_close($con);
?> 