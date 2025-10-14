<?php
session_start();
$_SESSION["username"] = "";
if (isset($_SESSION["username"])&& $_SESSION["username"]!= ""){
    header(header: "Location: ./index.php");
}
else{
    echo "<h1>Set the PHP session</h1>";
}


if (isset($_POST["btnsubmit"])) {
    $username = $_POST["txtusername"];
    $password = $_POST["txtpassword"];
    $dbUsername = "admin01";
    $dbPassword = "1234";
    if ($username == $dbUsername && $password == $dbPassword) {
        $_SESSION["username"] = $dbUsername;
        header(header: "Location:./index.php");
    else{
            echo "<script>alert('Invalid username or password')</script>";
        }
    }

}
?>
<form action="login.php">
    <label>Name:</label>
    <input type="text" name="txtusername"/>
    <label>Password:</label>
    <input type="text" name="txtpassword"/>
    <input type= "submit" value="submit" name=