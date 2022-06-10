<p class="p">whom to send message ...???</p>
<style>
.p{
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    width: auto;
    height: 7vh;
    font-size: 5vh;
    font-weight: 600;
    background-color: gold;
    border-radius: 10px;
    text-transform: uppercase;
}
.c .button{
    position: relative;
    width: 100px;
    height: 5vh;
    display: flex;
    justify-content: center;
    align-items: center;
    /* background: linear-gradient(45%, greenyellow, aqua); */
    background-color: green;
}
.c .button a{
    position: relative;
    text-decoration: none;
    color: #fff;
}
.c{
    position: relative;
    top: 0%;
    left: 0%;
    display: flex;
    justify-content: center;
    align-items: center;
}
.bkgrd{
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background: url(https://wallpapercave.com/wp/wp6988830.jpg);
    z-index: -1;
}

</style>
<div class="bkgrd"></div>
<?php
require_once "config.php";
$sql="SELECT `user_name` FROM `account`;";
$result=mysqli_query($conn,$sql) or die("sorry");

//div start
// $name=$_GET['name'];

session_start();
$name=$_SESSION['user_name'];
while($row=mysqli_fetch_array($result)){
    //  $names=$row[]; 
    if($row[0]!=$name){
    ?>
 <div class="c">  <button class="button"><a href="http://localhost/rajan/PHP_Project/sender1.php?name1=<?php echo $row[0] ?>">  <?php echo $row[0]?>  </a></button> </div><br>
    
    <?php
} 
}
//div end
?>