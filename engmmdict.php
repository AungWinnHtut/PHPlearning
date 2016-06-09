<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"></head>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Search english word: <input type="text" name="english">
  <input type="submit">
</form>
<div  style="font-family:Zawgyi-One;" >
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $english = $_REQUEST['english'];
    if (empty($english)) {
        echo "Search english word is empty";
    } else {
        echo $english;
        $servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "engmmdb";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		// Check connection
		if (!$conn) {
    		die("Connection failed: " . mysqli_connect_error());
		}

		$sql = "SELECT * FROM dictionarytb where english like '".$english."%'" ;

		//$sql = "SELECT * FROM dictionarytb where english like '".$english."%'";
		echo $sql."<br>";
		$result = mysqli_query($conn, $sql);
		//echo $result."<br>";
		if (mysqli_num_rows($result) > 0) {

			$myfile = fopen("dicterror.log", "a") or die("Unable to open file!");			
			fwrite($myfile, mysqli_num_rows($result));
			//fclose($myfile);
			echo mysqli_num_rows($result)."<br>";
    		// output data of each row
    		while($row = mysqli_fetch_assoc($result)) {
    			//$str = iconv('windows-1251', 'utf-8', $str);
        		echo "id: " . $row["_id"]. " - English: " . $row["english"]. " " . $row["grammar"]." " . utf8_encode($row["myanmar"]). " " . $row["example"]."<br>";
        		fwrite($myfile,utf8_encode($row["myanmar"]));
    		}
		} else {
    		echo "0 results";
		}
		fclose($myfile);
		mysqli_close($conn);

		
    }
}
?>
</div>

</body>
</html>
