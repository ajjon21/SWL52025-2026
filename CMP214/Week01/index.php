<?php
/*
$name = "aaron"; // String
$age = 20; // Integer
$email = "aaron@gmail.com"; //String
$height = 5.11; // Float/Double
$IsSingle = true; //Boolean

echo $name . $age . $email . $height . $IsSingle;
*/

/*
$addition = $num_01 + $num_02;
echo $addition . "</br>";

$sub = $num_01 - $num_02;
echo $sub . "</br>";

$mul = $num_01 * $num_02;
echo $mul . "</br>";

$div $num_01 / $num_02;
echo $div . "</br>";
*/ 
/*
$num_01 = $_GET["num01"];
$num_02 = $_GET["num02"];
$operator = $_GET["op"];

if($operator == "add")
{
  $result = $num_01 + $num_02;
  echo $result . "</br>";
}
else if($operator == "sub")
 {
  $result = $num_01 * $num_02;
  echo $result . "</br>";
}
else if($operator == "mul")
 {
  $result = $num_01 / $num_02;
  echo $result . "</br>";
}
else if($operator == "div")
 {
  $result = $num_01 - $num_02;
  echo $result . "</br>";
}
echo "<script>alert ('". $result ."')</script>"
*/

$servername = "127.0.0.1";
$username = "s2134588";
$password = "Password123";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
