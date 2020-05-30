<html>
<head>

<title>BlastNews</title>
</head>

<body>
	<?php
	
$id = $_POST['title'];
	
$conn = mysqli_connect("localhost","id8402017_campusnsbmnews","error404","id8402017_nsbmnews");	
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
   
   
	
$sqlQUery = "DELETE FROM details WHERE title= '$id' ";
$sqlQUery2 = "DELETE FROM entertainment WHERE title= '$id' ";
$res = mysqli_query($conn, $sqlQUery );
$res2 = mysqli_query($conn, $sqlQUery2 );
if($res && $res2){
	echo "<br><h1>DELETED SUCCESSFULLY</h1>";
}
   mysqli_close($conn);	


?>
</body>
</html>