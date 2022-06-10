<h2 class="head">Login in your Account </h2>
<style>
   /*{
        background-color: aqua;
        animation: animate 5s 3;
    }*/
    body{
        background: url(https://wallpapercave.com/wp/wp6988830.jpg);

    }
    @keyframes animate{
        0%{
            filter: hue-rotate(0);
        }
        100%{
            filter: hue-rotate(360deg);
        }
    }
    .button {
        text color: grey;
        background-color: red;
        width: 100px;
        height: 6.5vh;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border: 2px solid red;
        border-radius: 4px;
        margin-left: 5rem;
        margin-top: 2rem;
        transition: .5s;
    }
    .button:hover{
        position: relative;
        width: 250px;
        height: 10vh;
        background-color: green;
        border: 4px solid #fff;
        border-radius: 10px;
        transform: translate(25px,25px);
        animation: animate 5s infinite;
    }
    .form{
        position:relative;
        width: 60%;
        height: 100%;
        top: 40vh;
        left: 40%;
        font-size:2rem;
    }
    form input{
        position: relative;
        min-width: 200px;
        height: 3vh;
        border: 2px solid red;
        border-radius: 5px;
        transition: .5s;
    }
    form input:hover{
        position: relative;
        width: 40%;
        height: 3.7vh;
        font-size: 1.5rem;
    }
    .head{
        width: max-content;
        position: absolute;
        top: 15vh;
        left:30%;
        font-style: italic;
        font-size: 5rem;
    }
</style>


<form action="" method="post" class="form">
    User_name: <input type="text" name="user_name"><br>
    Password: <input type="password" name="password"><br>
    captcha:  <a><input type="text"  name="captcha" > </a>
    <br><br>
    <img src="captcha.php"><br><br>
    <input type="submit" name="login" class="button">&nbsp;&nbsp;&nbsp;
    <a href="http://localhost/rajan/PHP_Project/add_account.php">register</a>
</form>
<?php

session_start();
if(isset($_POST['login'])){
    $in = $_POST['captcha'];
    $val = $_SESSION['CAPTCHA_CODE'];
    if($in == $val){

        require_once "config.php";
$user_name=mysqli_real_escape_string($conn,$_POST['user_name']);
$password=($_POST['password']);
echo $password;
// $sql="SHOW TABLES FROM $database";
$sql="SELECT `user_name`, `password` FROM `account` WHERE `user_name`='$user_name' AND password='$password';";
$result=mysqli_query($conn,$sql) or die("sorry");


if(mysqli_num_rows($result)>0){
while($row=mysqli_fetch_array($result)){
    //  $names=$row[]; 
    $_SESSION['user_name']=$row['user_name'];
    header("Location: http://localhost/rajan/PHP_Project/contact2.php");
}
}
    
 }
    ?>


<?php
}   	
?>