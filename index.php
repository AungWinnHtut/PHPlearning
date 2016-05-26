<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
	echo "Green Hackers";
	define("b","<br>");
	echo b;
	echo "Testing PHP programming";
	echo b;
	$Arr = array("one"=>"Number One","two"=>"Number 2","three"=>"3" );
	$R=22.5;
	echo 3.14*$R*$R;
	echo "<br>";
	echo var_dump($R);
	echo "<br>";
	echo "Array  <br>";
	foreach($Arr as $E)
	{
		echo $E.b;
	}
	echo $Arr["one"].b;
	
	echo "<br>";
	echo var_dump($Arr);

	$Str = "I am a teacher";
	echo "Word Count =".str_word_count($Str)."<br>";
	echo "String length =".strrev($Str)."<br>"; 

	GlobalTest();
	GlobalTest();
	GlobalTest();
	GlobalTest();
	GlobalTest();
	GlobalTest();



	function GlobalTest(){
		//global $R;
		static $c=0;
		echo "<br>";
		echo $GLOBALS['R'];
		$c=$c+1;
		echo "<br>";
		echo $c;
		echo "<br>";
		echo var_dump($c);
	}
?>

</body>
</html>