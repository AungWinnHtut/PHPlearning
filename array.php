<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php


	$arrName = array("aung","maung","koko");
	$arrAge = array("Aung"=>"23","Ko"=>"33","Aye"=>"22");
	$count = 0;
	foreach ($arrAge  as $key => $value) {
		$count = $count +1;
		echo $count . " Key = " . $key. " => Value = " .$value."<br>";
	}
	echo "<br><br>";
	$count=0;

	foreach ($arrName as $value) {

		$count = $count +1;
		echo $count .  "  Value = " .$value."<br>";
	}

?>
</body>
</html>