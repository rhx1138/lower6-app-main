<?
	if((isset($_SESSION['ADMIN_SESS_USERID']) && $_SESSION['ADMIN_SESS_USERID'] > 0) || (isset($_SESSION['SUBADMIN_SESS_USERID']) && $_SESSION['SUBADMIN_SESS_USERID'] > 0))
	{
	}
	else
	{
		?><script language="javascript">location.href="index.php";</script><?
	}
?>
