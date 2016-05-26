<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
   Filename: <input type="text" name="fname">
   <input type="submit">
   <br>
   Username: <input type="text" name="uname">
   <input type="submit">
   <br>
   Password: <input type="text" name="password">
   <input type="submit">
   <br>
   Address: <input type="text" name="address">
   <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     // collect value of input field
     $name = $_REQUEST['fname']; 
     if (empty($name)) {
         echo "Name is empty";
     } else {
         echo $name;
     }
}
?>

</body>
</html>