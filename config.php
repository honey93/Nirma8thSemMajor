<?php
	ob_start();
	
	$conn=mysql_connect("localhost","root","");
	$db =mysql_select_db("sentiment",$conn);
	$targetPath="UploadImages";	
?>	