<html>
<head>

<title>BlastNews</title>
<style type="text/css">
	ul {
  list-style-type: none;
  margin-right: 20;
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

input[type="submit"]
{
	color: blue;
	background-color: #9bc187;
	padding: 20px 30px;
	font-size: 35;
}
select
{
	color: black;
	background-color: #ffdbe6;
	padding: 40px 80px;

}
 #info 
 {    height: 50px; width : 500px; }

</style>

</head>

<body>
	<ul>
  <li><a class="active" x`>ADMIN</a></li>
<li><a href="admin.html">Insert Entertainments News</a></li>
  <li><a href="educationInsert.html">Insert Educational News</a></li>
  <li><a href="sportsInsert.html">Insert Sport News</a></li>
  <li><a href="delete.php">Delete</a></li>
  
</ul>
<center>
<form name="delete" method="post" action="delete2.php">
<h2>Find Title Name</h2>
<?php 

/*$conn = mysqli_connect("localhost","id8402017_campusnsbmnews","error404","id8402017_nsbmnews");


$sql = "SELECT title FROM details";
$sql2 = "SELECT title FROM entertainment";
$sql3 = "SELECT title FROM edu";
$sql4 = "SELECT title FROM sports";
$result =mysqli_query($conn,$sql);
$result2 =mysqli_query($conn,$sql2);
$result3 =mysqli_query($conn,$sql3);
$resul4 =mysqli_query($conn,$sql4);

/*echo "<select>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['Title'] ."'>" . $row['Title'] ."</option>";
}
echo "</select>"*/

?>

<br><h1>ENTER Title to DELETE</h1> 
    
    
    <br>
    <br>
    TITLE : <input type="text" name="title" id="info">
    <input type="submit" value="DELETE">
  
 
	
</form>
</center>



</body>
</html>