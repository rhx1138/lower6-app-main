<?php
  session_start();
 // setcookie("UsErOfAdMiN","");
 // $UsErOfAdMiN="";
//  session_destroy();

	if(isset($_SESSION['ADMIN_SESS_USERID']))
	{
		unset($_SESSION["ADMIN_SESS_USERID"]);
	}
	else if(($_SESSION['SUBADMIN_SESS_USERID']))
	{
		unset($_SESSION["SUBADMIN_SESS_USERID"]);
	}

  
  //unset($_SESSION["ADMIN_TYPE"]);
  //unset($_SESSION['query']);
  
  $admin_table_name = '';
  $admin_id = '';
  
  header("Location:index.php");
?>
