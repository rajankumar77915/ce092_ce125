<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body style="background: url(https://wallpapercave.com/wp/wp6988830.jpg); color: #fff;">
<p>RADHE RADHE RAM RAM. om</p>

<?php 
require_once "config.php";
session_start();
$name=$_SESSION['user_name'];
$name1=$_GET['name1'];

$sql1="SELECT * FROM `data` WHERE (`recever_name`='$name' && `sender_name`='$name1') || (`recever_name`='$name1' && `sender_name`='$name');";
$result=mysqli_query($conn,$sql1)or die("query not success");
?>

<div class="rmes">Reciever's message</div>
<div class="mes"> <p>Sender's message</p>  </div> <br><br>
<?php
while($res = mysqli_fetch_array($result)){
    // if($res['id'] >= $statics){
        if($res['recever_name']==$name1){
        ?>
        <div class="c1">
        <div class="sm">
  <?php  echo($res['message'])."<br>";}?>
     </div>
     </div>
     <?php
     if($res['recever_name']==$name){
        ?>
     <div class="c2">
         <div class="rm">
    <?php     echo($res['message'])."<br>";} ?>
         </div>
     </div>

    <?php
     }

  ?>
    <br><br><br>
  <?php
    ?>
<div class="lg"><a href="http://localhost/rajan/PHP_Project/Logout.php">Logout</a></div>
    <form class="frm" action="a.php?name1=<?php echo $_GET['name1']; ?>" method="post">
        <span class="mees">message:<span>  <input type="text"  name="mssg"><br><br>
        <input class="mbtn" type="hidden" value="mess" name="mess"> 
        <!-- city:  <input type="text" name="city"> -->
        <input class="sbtn" type="submit" name="submit">
    </form>
<?php
?>


</body>
</html>