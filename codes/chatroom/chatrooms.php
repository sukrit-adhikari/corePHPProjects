<?php
include 'checklogin.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Chat Room Beta</title>
</head>

<body text="#D6BF86" bgcolor="#9C2A00" link="#D6BF86" alink="#D6BF86" vlink="#D6BF86">

<h2>
ChatRooms available...
</h2>

<?php

include 'mysql_config.php';

$curr_time=time();

$result=mysql_query("SELECT * FROM `tbl_cr_names` WHERE `last_used`-'$curr_time'<3600");
$chatrooms=mysql_num_rows($result);

for($i=1;$i<=$chatrooms;$i++) {
	

}



?>





</body>

</html>