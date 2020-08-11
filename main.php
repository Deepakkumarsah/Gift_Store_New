<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<?php

$username="root";  
$password="";  
$hostname = "localhost"; 

$dbhandle = mysqli_connect($hostname,$username,$password)  
or die("Unable to connect to MySQL ");  
 
$selected = mysqli_select_db($dbhandle, "laya")  
or die("Could not select exercise DB"); 

$sql="select * from product";
$result=mysqli_query($dbhandle,$sql);

$card="card";
$width="width";
while ($row=mysqli_fetch_assoc($result)){
       
echo "<br>";
echo ("<div class=\"card\" style=\"width: 18rem;\">");
echo ("<img src=".$row["photo"]."  class=\"card-img-top\">");
echo ("<div class=\"card-body\">");
echo "<h5 >".$row["p_name"]."</h5>";
echo "<p>".$row["description"]."</p>";
echo "<h5> price Rs ".$row["price"]."</h5>";
echo "<h5 > quantity ".$row["quantity"]."</h5>";
echo("<button onclick=\"location.href='form.html'\">Add To cart</button>");
//echo "    <a href="dummy.html" class="btn btn-primary">Go somewhere</a>";
//echo "  </div>";
//echo "</div>";
}




?>


</body>
</html>