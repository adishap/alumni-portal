<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	ob_start();
	session_start();

	$http_referer = $_SESSION['HTTP_REFERER'];

	function logged_in(){
			if (isset($_SESSION['user_id'])&& !empty($_SESSION['user_id']))	{
				return true;
				}
				else{
					return false;
					}	
		}
	
	function getuserinfo($field){
		$query = "SELECT '$field' FROM `` WHERE `person_Id` = '$_SESSION['user_id']'";
		if ($query_run= mysql_query($query)){
			if($query_result = mysql_result($query_run , 0, $field)){
				return $query_result;
			}
		}
	}	

?>
</body>
</html>