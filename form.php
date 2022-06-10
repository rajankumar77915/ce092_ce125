<?php
               	
session_start();
if (isset($_POST['submit'])) {
    	$in = $_POST['captcha'];
    	$val = $_SESSION['CAPTCHA_CODE'];
    	if($in == $val){
    	echo "successfully login";
    	}
    	else if($_POST['captcha']==null){
            echo "please enter captcha";
        }
        else{
            echo "incorrect captcha";
            
        }
}


?>
<html>
<head>
</head>
<style>
	input {
		margin-left:30px;
	}
	a {
		/* display : flex; */
		margin-left:-12px;
		/* margin-right: 10px; */
	}
</style>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="post" >
name: <input type="text" name="name" placeholder="Enter your name"><br><br>
email: <input type="email" name="email" placeholder="Enter your email-id"><br><br>
<br><br>
<img src="captcha.php"><br><br>
<input type="submit" name="submit">
</form>
</body>
</html>



