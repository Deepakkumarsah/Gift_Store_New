<?php
$query= $_GET['Query']; 
echo "<tr>". $query."</tr>";
$mysqli = new mysqli("localhost","root","","laya"); 
$result = $mysqli->query($query);
if (!$result) {
$message = 'ERROR:' . mysql_error(); return $message;
} 
else {
$i = 0;
echo '<html><head>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"></head> <body><table class="table table-dark"><tr>'; 
while ($i < mysqli_num_fields($result))
{
$meta = mysqli_fetch_field($result); echo '<td scope="col">' . $meta->name . '</td>'; $i = $i + 1;
}
echo '</tr>';
$i = 0;
while ($row = mysqli_fetch_row($result)) 
{
echo '<tr>';
$count = count($row); 
$y = 0;
while ($y < $count)
{
$c_row = current($row); echo '<td >' . $c_row . '</td>'; 
next($row);
$y = $y + 1;
}
echo '</tr>'; $i = $i + 1;
}}
echo '</table></body></html>';
mysqli_free_result($result);
//echo '<a href="front.html">Click here!</a>';
mysqli_close($mysqli);
?>