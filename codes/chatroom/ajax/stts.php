<?php
@session_start();
include '../mysql_config.php';


$tts=time();

$username = $_SESSION['username'];


if(mysql_query("UPDATE `tbl_tts` SET `tts`='$tts' WHERE `username`='$username'")) {
	
		
	}

else {


}

?>