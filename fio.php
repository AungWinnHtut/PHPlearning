<?php
	$myfile = fopen("add4.log", "a") or die("Unable to open file!");

	$Area = 3.14 * 44 * 44;

    fwrite($myfile, "$Area\n");
    //echo "success appending file";
    fclose($myfile);
?>