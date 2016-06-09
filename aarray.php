<!DOCTYPE html>
<html>
<body>

<?php
$name= array("Peter","Ben","Joe","Aung");
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43","Aung"=>"38");


foreach($name as $n){
	echo $n;
	echo "<br>";
}


foreach($age as $i => $iv){

	echo  $i ."  " .$iv;
	echo "<br>";
}

?>




</body>
</html>