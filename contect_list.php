<h2>who are you </h2>
<style>
.button  {
    text color:gre;
    background-color:red;
    width:100px;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
   /* padding: auto; */
  /* cursor: pointer; */
}
</style>

<?php
require_once "config.php";

// $sql="SHOW TABLES FROM $database";
$sql="SELECT `users` FROM `account`;";
$result=mysqli_query($conn,$sql) or die("sorry");

while($row=mysqli_fetch_array($result)){
    //  $names=$row[]; 
    ?>
   <button class="button"><a href="http://localhost/rajan/PHP_Project/contact2.php?name=<?php echo $row[0]?>">  <?php echo $row[0]?>  </a></button><br>
    
    <?php
}   	
?>