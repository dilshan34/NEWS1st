﻿<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>web</title>
<link href="design.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>

<body>
	<center>
<div class="col-lg-9 col-md-12">
  <div id="banner" class="col-lg-12 col-md-12"><img src="news4.jpg" alt="" width="193" height="99" id="img"/>
	  <div align="right">
	  <a href="#"><img src="2d9840012-facebooklogo.nbcnews-ux-1024-900 (1).jpg" width="30" height="30"></a>
	  <a href="#"><img src="images.png" width="30" height="30"></a>
	  <a href="#"><img src="youtube_v2-512.png" width="30" height="30"></a>
	  <a href="#"><img src="images (2).png" width="30" height="30"></a>
	 <?php 
	 echo "<br><b><br>";
	 echo "Today is " . date("Y-m-d") . "<br>";
	 echo "The time is " . date("h:i:sa");
	 echo "</b>";
	 ?>
	  
	  </div>
	</div>
  <hr color="blue" height="10px"></hr>
  <div id="bar" class="col-lg-12 col-md-12">
	  
	<ul id="new">
      <li><a href="index.php" title="home page" target="_self">HOME</a></li>
      <li><a href="educational.php" title="page3" target="_self">EDUCATIONAL</a></li>
	  <li><a href="entertainment.php" title="page4" target="_self">ENTERTAINTMENT</a></li>
		<li><a href="sports.php" title="page3" target="_self">SPORTS</a></li>
	  <li><a href="contact.html" title="page3" target="_self"> Contact Us</a></li>
	  <li><a href="about.html" title="page3" target="_self">About us</a></li>
	</ul>
	  
  </div><hr color="blue"></hr>
<div id="main" class="col-lg-12 col-md-12 col-sm-12">
  <div id="main_topic" class="col-lg-12 col-md-12 col-sm-12" >LEAD STORY</div>
  <div class="col-lg-12 col-md-12 col-sm-12" id="main_news">
	
	   <?php 

$conn = mysqli_connect("localhost","id8402017_campusnsbmnews","error404","id8402017_nsbmnews");
  $show1="SELECT image FROM entertainment ORDER BY id DESC LIMIT 1";

       $result1 = mysqli_query($conn,$show1);

 if ($result1->num_rows > 0)
        {
    // output data of each row
    while($row1 = $result1->fetch_assoc())
    {
        echo '<img src="data:image/jpeg;base64,'.base64_encode($row1['image']).'" height="200" width="500" align = "left" style = "margin-right:20px;" >';
    }
       }
       mysqli_close($conn);
       
      
    
?>

 <?php 


      $conn = mysqli_connect("localhost","id8402017_campusnsbmnews","error404","id8402017_nsbmnews");
       $show="SELECT title FROM entertainment ORDER BY id DESC LIMIT 1";

       $result2 =mysqli_query($conn,$show);

 if ($result2->num_rows > 0)
        {
  
    while($row2 = $result2->fetch_assoc()) 
    {
        
        echo "  <h4 style='text-align:left;'><b> ". $row2["title"]. " </b></h4> ";
        //echo "$desc";
    }
       }

mysqli_close($conn);
  ?>


<?php
 

   $conn = mysqli_connect("localhost","id8402017_campusnsbmnews","error404","id8402017_nsbmnews");
      $show1="SELECT * FROM entertainment ORDER BY id DESC LIMIT 1"; 

       $result3 =mysqli_query($conn,$show1);

 if ($result3->num_rows > 0)
        {
  
    while($row3 = $result3->fetch_assoc()) 
    {
        
       
        /*
        $strcut = substr($desc,0,100);
        $desc = substr($strcut,0,strrpos($strcut, '')).'Read More';
        echo $desc;*/
        //echo "   ". $row3["info"]. " <br>";
        
         $desc =  $row3['info'];
        $string = strip_tags($desc);
        if (strlen($string) > 300) {

    // truncate string
    $stringCut = substr($string, 0, 180);
    $endPoint = strrpos($stringCut, ' ');

    //if the string doesn't contain any space then it will cut without word basis.
    $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
    $string .= '... <a href="topnews.php">Read More</a>';
}

echo "<p style ='text-align:left' >";
echo  $string;
echo "</p>";
        
        
        
    }
       }

mysqli_close($conn);


  ?> 


	
	</div>
</div>
 <hr color="blue">
   <div id="main_topic" class="col-lg-12 col-md-12 col-sm-12" >TOP NEWS</div>
  <div class="col-lg-6 col-md-12 col-sm-12" id="col1">
  <hr color="#00FF2C">
  <div class="news" >
	  
	  	  
	  
	  <?php 

   $conn = mysqli_connect("localhost","id8402017_campusnsbmnews","error404","id8402017_nsbmnews");

  $show1="SELECT * FROM edu ORDER BY id DESC LIMIT 2,1"; 

       $result1 =mysqli_query($conn,$show1);

 if ($result1->num_rows > 0)
        {
    // output data of each row
    while($row1 = $result1->fetch_assoc())
    {
       echo '<img src="data:image/jpeg;base64,'.base64_encode($row1['image']).'" height="100" width="100" style="float:left;padding:-10px; margin-right:20px;">';
    }
       }
       mysqli_close($conn);

?>

 <?php
 

     $conn = mysqli_connect("localhost","id8402017_campusnsbmnews","error404","id8402017_nsbmnews");
      $show1="SELECT * FROM entertainment ORDER BY id DESC LIMIT 2,1"; 

       $result3 =mysqli_query($conn,$show1);

 if ($result3->num_rows > 0)
        {
  
    while($row3 = $result3->fetch_assoc()) 
    {
        echo "<h4>  ". $row3["title"]. " </h4><br>" ;
                 $desc =  $row3['info'];
        $string = strip_tags($desc);
        if (strlen($string) > 300) {

    // truncate string
    $stringCut = substr($string, 0, 300);
    $endPoint = strrpos($stringCut, ' ');

    //if the string doesn't contain any space then it will cut without word basis.
    $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
    $string .= '... <a href="news1.php">Read More</a>';
}

echo "<p>";
echo  $string;
echo "</p>";
        
    }
       }

mysqli_close($conn);


  ?>

	 
	  
	  
  </div color="#00FF2C">
  <hr color="#00FF2C">  
	  <div></div>
  </div>
<div class="col-lg-6 col-md-12 col-sm-12" id="col1">
  <hr color="#00FF2C">
  <div class="news" >
	
	  
	   <?php 

 $conn = mysqli_connect("localhost","id8402017_campusnsbmnews","error404","id8402017_nsbmnews");

  $show1="SELECT * FROM entertainment ORDER BY id DESC LIMIT 3,1"; 

       $result1 =mysqli_query($conn,$show1);

 if ($result1->num_rows > 0)
        {
    // output data of each row
    while($row1 = $result1->fetch_assoc())
    {
        echo '<img src="data:image/jpeg;base64,'.base64_encode($row1['image']).'" height="100" width="100" style="float:left;padding:-10px; margin-right:20px;">';
    }
       }
       mysqli_close($conn);

?>

 <?php
 

    $conn = mysqli_connect("localhost","id8402017_campusnsbmnews","error404","id8402017_nsbmnews");
      $show1="SELECT * FROM entertainment ORDER BY id DESC LIMIT 3,1"; 

       $result3 =mysqli_query($conn,$show1);

 if ($result3->num_rows > 0)
        {
  
    while($row3 = $result3->fetch_assoc()) 
    {
        echo "<h4>  ". $row3["title"]. "</h4> <br>" ;
        
                 $desc =  $row3['info'];
        $string = strip_tags($desc);
        if (strlen($string) > 300) {

    // truncate string
    $stringCut = substr($string, 0, 300);
    $endPoint = strrpos($stringCut, ' ');

    //if the string doesn't contain any space then it will cut without word basis.
    $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
    $string .= '... <a href="news2.php">Read More</a>';
}

echo "<p>";
echo  $string;
echo "</p>";
        
        
        
    }
       }

mysqli_close($conn);


  ?> 
     
	  
	  
	  
	
	</div>
  <hr color="#00FF2C">  
	  <div></div>
  </div color="#00FF2C">
<div class="col-lg-6 col-md-12 col-sm-12" id="col1">
  <hr color="#00FF2C">
  <div class="news" >
	
	
	
	  <?php 

 $conn = mysqli_connect("localhost","id8402017_campusnsbmnews","error404","id8402017_nsbmnews");

  $show1="SELECT image FROM entertainment ORDER BY id DESC LIMIT 4,1";

       $result1 =mysqli_query($conn,$show1);

 if ($result1->num_rows > 0)
        {
    // output data of each row
    while($row1 = $result1->fetch_assoc())
    {
        echo '<img src="data:image/jpeg;base64,'.base64_encode($row1['image']).'" height="100" width="100" style="float:left;padding:-10px; margin-right:20px;">';
    }
       }
       mysqli_close($conn);

?>


 <?php
 

     $conn = mysqli_connect("localhost","id8402017_campusnsbmnews","error404","id8402017_nsbmnews");
       $show="SELECT * FROM entertainment ORDER BY id DESC LIMIT 4,1";

       $result3 =mysqli_query($conn,$show);

 if ($result3->num_rows > 0)
        {
  
    while($row3 = $result3->fetch_assoc()) 
    {
        echo "<h4>  ". $row3["title"]. "</h4> <br> ";
        
        
                 $desc =  $row3['info'];
        $string = strip_tags($desc);
        if (strlen($string) > 300) {

    // truncate string
    $stringCut = substr($string, 0, 300);
    $endPoint = strrpos($stringCut, ' ');

    //if the string doesn't contain any space then it will cut without word basis.
    $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
    $string .= '... <a href="news3.php">Read More</a>';
}

echo "<p>";
echo  $string;
echo "</p>";
        
    }
       }

mysqli_close($conn);


  ?> 
      
	  
	  
	
	
	</div>
	<hr color="#00FF2C">  
	  <div></div>
  </div>
<div class="col-lg-6 col-md-12 col-sm-12" id="col1">
  <hr color="#00FF2C">
  <div class="news" >
	
	
	
	
	  
	  <?php 

 $conn = mysqli_connect("localhost","id8402017_campusnsbmnews","error404","id8402017_nsbmnews");

  $show1="SELECT * FROM entertainment ORDER BY id DESC LIMIT 5,1";

       $result1 =mysqli_query($conn,$show1);

 if ($result1->num_rows > 0)
        {
    // output data of each row
    while($row1 = $result1->fetch_assoc())
    {
       echo '<img src="data:image/jpeg;base64,'.base64_encode($row1['image']).'" height="100" width="100" style="float:left;padding:-10px; margin-right:20px;">';
    }
       }
       mysqli_close($conn);

?>


 <?php
 

     $conn = mysqli_connect("localhost","id8402017_campusnsbmnews","error404","id8402017_nsbmnews");
       $show="SELECT * FROM entertainment ORDER BY id DESC LIMIT 5,1";

       $result3 =mysqli_query($conn,$show);

 if ($result3->num_rows > 0)
        {
  
    while($row3 = $result3->fetch_assoc()) 
    {
       echo "<h4>  ". $row3["title"]. "</h4> <br>" ;
       
       
                $desc =  $row3['info'];
        $string = strip_tags($desc);
        if (strlen($string) > 300) {

    // truncate string
    $stringCut = substr($string, 0, 300);
    $endPoint = strrpos($stringCut, ' ');

    //if the string doesn't contain any space then it will cut without word basis.
    $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
    $string .= '... <a href="news4.php">Read More</a>';
}

echo "<p>";
echo  $string;
echo "</p>";
        
    }
       }

mysqli_close($conn);


  ?> 
       
	
	
	
	
	
	
	</div>
	<hr color="#00FF2C">  
	  <div></div>
  </div>
<div class="col-lg-6 col-md-12 col-sm-12" id="col1">
  <hr color="#00FF2C">
  <div class="news" >
	
	
	
	
	 <?php 

 $conn = mysqli_connect("localhost","id8402017_campusnsbmnews","error404","id8402017_nsbmnews");

  $show1="SELECT * FROM entertainment ORDER BY id DESC LIMIT 6,1";

       $result1 =mysqli_query($conn,$show1);

 if ($result1->num_rows > 0)
        {
    // output data of each row
    while($row1 = $result1->fetch_assoc())
    {
        echo '<img src="data:image/jpeg;base64,'.base64_encode($row1['image']).'" height="100" width="100" style="float:left;padding:-10px; margin-right:20px;">';
    }
       }
       mysqli_close($conn);

?>

 <?php
 

      $conn = mysqli_connect("localhost","id8402017_campusnsbmnews","error404","id8402017_nsbmnews");
       $show="SELECT * FROM entertainment ORDER BY id DESC LIMIT 6,1";

       $result3 =mysqli_query($conn,$show);

 if ($result3->num_rows > 0)
        {
  
    while($row3 = $result3->fetch_assoc()) 
    {
        echo " <h4> ". $row3["title"]. " </h4><br>";
        
                 $desc =  $row3['info'];
        $string = strip_tags($desc);
        if (strlen($string) > 300) {

    // truncate string
    $stringCut = substr($string, 0, 300);
    $endPoint = strrpos($stringCut, ' ');

    //if the string doesn't contain any space then it will cut without word basis.
    $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
    $string .= '... <a href="news5.php">Read More</a>';
}

echo "<p>";
echo  $string;
echo "</p>";
        
        
    }
       }

mysqli_close($conn);


  ?> 
	  
	
	
	  
	  
	
	
	
	
	
	</div>
	<hr color="#00FF2C">  
	  <div></div>
  </div>
<div class="col-lg-6 col-md-12 col-sm-12" id="col1">
  <hr color="#00FF2C">

  <div class="news" >
	
	
	
	<?php 

 $conn = mysqli_connect("localhost","id8402017_campusnsbmnews","error404","id8402017_nsbmnews");

  $show1="SELECT * FROM entertainment ORDER BY id DESC LIMIT 7,1";

       $result1 =mysqli_query($conn,$show1);

 if ($result1->num_rows > 0)
        {
    // output data of each row
    while($row1 = $result1->fetch_assoc())
    {
        echo '<img src="data:image/jpeg;base64,'.base64_encode($row1['image']).'" height="100" width="100" style="float:left;padding:-10px; margin-right:20px;">';
    }
       }
       mysqli_close($conn);

?>

 <?php
 

      $conn = mysqli_connect("localhost","id8402017_campusnsbmnews","error404","id8402017_nsbmnews");
       $show="SELECT * FROM entertainment ORDER BY id DESC LIMIT 7,1";

       $result3 =mysqli_query($conn,$show);

 if ($result3->num_rows > 0)
        {
  
    while($row3 = $result3->fetch_assoc()) 
    {
        echo " <h4> ". $row3["title"]. " </h4> ";
        
                 $desc =  $row3['info'];
        $string = strip_tags($desc);
        if (strlen($string) > 300) {

    // truncate string
    $stringCut = substr($string, 0, 300);
    $endPoint = strrpos($stringCut, ' ');

    //if the string doesn't contain any space then it will cut without word basis.
    $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
    $string .= '... <a href="news6.php">Read More</a>';
}

//echo "<p>";
echo  $string;
//echo "</p>";
        
        
    }
       }

mysqli_close($conn);


  ?> 
	  
	  
	  
	
	
	
	
	</div>
	<hr color="#00FF2C">  
	  <div></div>
  </div>

  
  <div id="footer">
	<hr color="blue">
	  <br>
	  <div id="icon" class="col-lg-12 col-md-12"><a href="http://nsbm.lk/"><img src="nsbm.png" width="150" height="70" style="align:left;"></a></div>
	   <div align="right" id="logo">
	       	<p style="text-align:left;float =left;">Copyright ©2019 TEAM ERROR-404. All rights reserved.</p>
	<img src="facebook-logo-white-google-search-throughout-facebook-logo-png-transparent-background-white.png" width="50" height="50">
	<img src="download.png" width="50" height="50" >
	<img src="instagram-logo.jpg" width="50" height="50" >
	<img src="images (3).png" width="50" height="50" >
	<img src="google-plus-2-xxl.png" width="50" height="50">
	
	</div>
    <br>
	  <br><br>
	
	</div>
	  
	<!--<p style="text-align:left;float =left;">Copyright ©2019 TEAM ERROR-404. All rights reserved.</p-->
</div>
	</div>
	</center>


</body>
</html>
