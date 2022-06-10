<?php 
// require_once "sender.php";

//    $names=$_POST['mssg'];
    // echo "hi";
$servername = "localhost";
$usernme = "root";
$password ="";
$database = "whatsapp";

$conn = mysqli_connect($servername,$usernme,$password,$database) or die("no done");

// echo"hhhhhhhhhhhhh";

    // echo $_GET['name'],"<br>";
$mssg=$_POST['mssg'];
session_start();
$name=$_SESSION['user_name'];
$name1=$_GET['name1'];
$sql="INSERT INTO `data`(`message`, `sender_name`,`recever_name`) VALUES ('$mssg','$name','$name1');";

$result=mysqli_query($conn,$sql)or die("query not success");

$conn = mysqli_connect($servername,$usernme,$password,$database) or die("no done");


header("Location: http://localhost/rajan/PHP_Project/sender1.php?name1=".urlencode($name1));
?>