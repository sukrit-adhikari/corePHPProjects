<?php
@session_start();
include '../mysql_config.php';


$ots=time();

$username = $_SESSION['username'];


if(mysql_query("UPDATE `tbl_ots` SET `ots`='$ots' WHERE `username`='$username'")) {
	
		//echo "#*online*#";
		
	}

else {
		//echo "#*offline*#";	
}

?>