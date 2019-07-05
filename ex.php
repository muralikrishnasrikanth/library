<html>
<body>
<?php
$servername = "localhost";
$username = "";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
if($conn)
{
	print 'sucess';
}
else
{
	print 'unsecuss';
}
?>
</body>
</html>
