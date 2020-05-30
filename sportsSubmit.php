<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
		<?php
       
                   
$title=$_POST["title"];
$info=$_POST["info"];
$date=$_POST["date"];
$time=$_POST["time"];
$image=addslashes(file_get_contents($_FILES["file1"]["tmp_name"]));
$rname=$_POST["rname"];


		$conn = mysqli_connect("localhost","id8402017_campusnsbmnews","error404","id8402017_nsbmnews");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


      $sql="INSERT INTO details (title,image,info,date,time,rname) VALUES('$title','$image','$info','$date','$time',$rname') ";
	 $sql2="INSERT INTO sports (title,image,info,date,time,rname) VALUES('$title','$image','$info','$date','$time',$rname') ";

      $er=mysqli_query($conn,$sql);
	$er2=mysqli_query($conn,$sql2);

if($er && $er2){
	echo "<br> inserted successfully.";
}
	else{
		echo "Error!";
	}
	
mysqli_close($conn);

?>

</body>
</html>