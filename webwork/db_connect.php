<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	$sql_host = 'localhost';
	$sql_user = 'root';
	$sql_pass = '';
	$err_msg = "Error occured";
    $sql_db = 'alumni portal';
	
	if(!@mysql_connect($sql_host,$sql_user,$sql_pass) || !@mysql_select_db($sql_db)){
		echo $err_msg;
	}
	
	function getaluminfo($field, $table){
		$query = "SELECT `$field` FROM `$table` WHERE `userName` = '".$_SESSION['user_id']."' ";
			if ($query_run = mysql_query($query))
			{
				if($query_result = mysql_result($query_run,0,$field)){
					return $query_result;					
					}
				}
		}
	
	function updateinfo($field, $table ,$value){
		$query = "UPDATE `$table` SET `$field` = $value WHERE `userName` = '".$_SESSION['user_id']."' ";
			if ($query_run = mysql_query($query))
			{
				echo "Details updated.";
				}
			else echo"Problem Occured";
		}
	
	
?>
</body>
</html>