<html>
<head><title>Gold price</title></head>
<h1>Gold price</h1>
<body> <p>
<?php 
$kyat=1;
$pae=3;
$yway=2;
$kyatperprice=79000;
$TotalWeight=$kyat+$pae/16+$yway/(16*8);
$TotalGoldPrice=$TotalWeight*$kyatperprice;
echo "$TotalGoldPrice";
?>
</p>
</body>
</html>