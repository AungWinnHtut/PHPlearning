<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">  
  <input type="submit">
  <br>
  <br>
  Age: <input type="text" name="fage">  
  <input type="submit">

</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_REQUEST['fname']; 
    $age =$_REQUEST['fage'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
    echo "<br>";
    if (empty($age)) {
        echo "Age is empty";
    } else {
        echo $age;
    }
}
?>

</body>
</html>