
<?php  

$username="root";
$password="";
$hostname="localhost";
$db="laya";

$conn = mysqli_connect($hostname, $username, $password,$db);
if($conn){
#echo "connected to MySql DB";
#echo "<br/>";
} 
else{
  die("unable to connect to MySql");
}

$showallQuery="SELECT * FROM product where cat_id=3";

?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style>
img { 
    width: 300px; 
}
</style>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand" href="index.html">Home</a>
  
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      
     
      <a class="nav-item nav-link" href="category.html">Go Back</a>
      
    </div>
  </div>
</nav>
  <table class="table table-dark">
    <tr><th scope="col">Images</th><th scope="col">Name</th><th scope="col">Description</th><th scope="col">Price</th><th scope="col">Quantity</th><th scope="col">Button</th></tr>
  

<?php


$records=mysqli_query($conn,$showallQuery);
{

  while($row=mysqli_fetch_assoc($records))
  {
    echo "<tr>";
      echo "<td><img src='".$row["photo"]."' width=\"150\" height=\"200\"></td>";
    echo "<td>".$row["p_name"]."</td>";
    echo "<td>".$row["description"]."</td>";
    
    echo "<td>".$row["price"]."</td>";
    echo "<td>".$row["quantity"]."</td>";
   echo "<td>";
  echo  "<form method=\"post\" action=\"cart.php\">";
   
        $val = $row["pro_id"];
    echo "<input type=\"hidden\" name=\"id\" value=\"$val\"/>";
    echo  "<input type=\"submit\" name=\"action\" value=\"ADD_TO_CART\"/>";
     echo "</form>";
   echo "</td>";
    echo "</tr>";
  }

}
?>
</table>
</body>
</html>


