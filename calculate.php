<html>
<body>

<h1>Gold Price Results</h1>
<br>
Gold Price Per Kyat = 
<?php 
 
echo $_POST["goldpriceperkyat"]; ?><br>
Kyat =  
<?php echo $_POST["kyat"]; ?><br>
Pae  =
<?php echo $_POST["pae"]; ?><br>
Yway =
<?php echo $_POST["yway"]; ?><br>
<?php 
$kyat=$_POST["kyat"];
$pae=$_POST["pae"];
$yway=$_POST["yway"];
$kyatperprice=$_POST["goldpriceperkyat"];
$TotalWeight=$kyat+$pae/16+$yway/(16*8);
$TotalGoldPrice=$TotalWeight*$kyatperprice;
echo "$TotalGoldPrice";
?>
</body>
</html>