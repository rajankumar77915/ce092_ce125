<?php
require_once "config.php";
?>
<style>
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>add account:</p>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      name:  <input type="text" name="name"><br><br>
      Password: <input type="password" name="password"><br>
        <input type="hidden" name="hide" value="bg">
        <input type="submit" name="submit">
 </form>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
$name=$_POST['name'];
$password=$_POST['password'];
{
    $sql="INSERT INTO `account`(`user_name`, `password`) VALUES ('$name','$password')";
    $result= mysqli_query($conn,$sql) or die("query unsuccessfully");
    if($result){
    echo "your account successfully created";
    ?>
    <a href="http://localhost/rajan/PHP_Project/Login%20(1).php">Login</a>
    <?php
    }   
}}
?>