<?
session_start();

include ("../include/config.inc.php");
include_once ("../include/sendmail.php");
include ("../include/functions.php");
$pas;
$ADMIN_MOUSEHOUR_COLOUR="#cccccc";
$ADMIN_MOUSEOUT_COLOUR="#FFFFFF";
$ADMIN_TOP_BGCOLOUR="#FFFFFF";

$db=mysql_connect($DBSERVER, $USERNAME, $PASSWORD);
mysql_select_db($DATABASENAME,$db);  
$pas=$_GET["pas"];

 $name=trim($_REQUEST["name"]);
 $pass=$_REQUEST["pass"];
 
	//Check PHP validation
	if($name=='' || $pass==''){
		echo "*Please enter the required information";
		die;
	}

$query="select * from admin where username='".$name."' and password='".$pass."'";
$result=mysql_query($query,$db);
  //echo $result;
  $row=mysql_fetch_array($result);
  
	 $ADMIN_USERNAME=$row["username"];

 	$ADMIN_PASSWORD=$row["password"];



  if($name==$ADMIN_USERNAME && $pass==$ADMIN_PASSWORD)
  {
  
  			if(isset($UsErOfAdMiN))
			{
			  setcookie("UsErOfAdMiN","");
			  $UsErOfAdMiN="";
			}

			$_SESSION["ADMIN_SESS_USERID"]=$row["id"];
			setcookie("UsErOfAdMiN",$name);
			$_SESSION["ADMIN_TYPE"]='Supper';
			header("Location:dashboard.php?menu_name=Default");
  }
  else
  {
  	$query="select * from subadmins where username='".$name."' and password='".$pass."' and block!='1'";
	$result=mysql_query($query,$db);
	  //echo $result;
	  $row=mysql_fetch_array($result);
	  
		$ADMIN_USERNAME=strtolower($row["username"]); 

	 	$ADMIN_PASSWORD=strtolower($row["password"]);

	  if($name==$ADMIN_USERNAME && $pass==$ADMIN_PASSWORD)
	  {
	  			if(isset($UsErOfAdMiN))
				{
				  setcookie("UsErOfAdMiN","");
				  $UsErOfAdMiN="";
				}

				$_SESSION["SUBADMIN_SESS_USERID"]=$row["id"]; 
				setcookie("UsErOfAdMiN",$name);
				$_SESSION["ADMIN_TYPE"]='Sub';
				header("Location:dashboard.php?menu_name=Default");
	  }
	  else
	  {
  		 header("Location:index.php?pas=1");
  	  }
  }
  
?>