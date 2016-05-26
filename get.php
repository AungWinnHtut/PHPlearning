<html>
<body>

<?php 
	$uname = $_GET['uname'];
	$pass = $_GET['pass'];

	if($uname=="aung" AND $pass=="123")
	{
		echo "Login";
	}
	else
	{
		echo "Try again";
	}
?>

</body>
</html>