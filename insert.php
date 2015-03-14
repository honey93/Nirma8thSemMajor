<?php 

include_once("config.php");
	
	if(isset($_POST['submit']))
	 {  
	 
	   
		$sql="INSERT INTO `opinion` (`id`, `name`, `email`, `message`) VALUES ('0', '$_POST[name]', '$_POST[email]', '$_POST[message]')";
				mysql_query($sql);
				
				header("Location:index.php#contact");
			
	}
	 

?>