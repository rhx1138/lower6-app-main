<?php 
//echo $_SESSION['ADMIN_SESS_USERID'];die;
    //include ("../include/config.inc.php");
	//include_once ("../include/sendmail.php");
	//include ("../include/functions.php");
	//echo $_SESSION["SUBADMIN_SESS_USERID"]; die;
	$pas;
  $ADMIN_MOUSEHOUR_COLOUR="#cccccc";
  $ADMIN_MOUSEOUT_COLOUR="#FFFFFF";
  $ADMIN_TOP_BGCOLOUR="#FFFFFF";
  
  //$db=mysql_connect($DBSERVER, $USERNAME, $PASSWORD);
  //mysql_select_db($DATABASENAME,$db);  
$pas=$_GET["pas"];

?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <title>Login </title>

    <!--[if lt IE 9]> <script src="/assets/plugins/common/html5shiv.js" type="text/javascript"></script> <![endif]-->
    <script src="js/modernizr.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/jquery-ui-1.10.3.custom.css" />
    <!--[if lt IE 9]><link rel="stylesheet" type="text/css" href="/assets/plugins/jquery-ui/jquery.ui.1.10.2.ie.css"/><![endif]-->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel='stylesheet' type='text/css' href="css/open-sans.css">
    
    <link rel='stylesheet' type='text/css' href="css/uniform.default.css">

    <link href="css/main.css" rel="stylesheet" type="text/css"/>
    <link href="css/responsive.css" rel="stylesheet" type="text/css"/>
    <link href="css/style_default.css" rel="stylesheet" type="text/css"/>
    
    
    <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/apple-touch-icon-144x144-precomposed.png">

</head>

<body class="login">
    
    <div class="logo"><!-- BEGIN LOGO -->
         <img src="images/logo.png" alt="logo" />
    </div>  <!-- END LOGO -->
    
    <div class="content">   <!-- BEGIN LOGIN -->
        
        
            
            <h3 class="form-title">Login to your account</h3>
            
            <?php
                if($pas==1) // Access Denied
                {
            ?>
            <div class="alert alert-danger show">
                <button class="close" data-dismiss="alert"></button>
                <span>Access Denied</span>
            </div>
            <?php
                }
            ?>
             <?php
              if($_REQUEST['msg']==3)
                {
            ?>
            <div class="alert alert-danger show">
                <button class="close" data-dismiss="alert"></button>
                <span>Login details has been mailed to email address.</span>
            </div>
            <? 
                }
            ?>
            <?php
              if($_REQUEST['msg']==4)
                {
            ?>
            <div class="alert alert-danger show">
                <button class="close" data-dismiss="alert"></button>
                <span>Please enter Registered Email address.</span>
            </div>
            <? 
                }
            ?>
            <div class="control-group">
                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                <label class="control-label">Username</label>
                <div class="controls">
                    <div class="input-icon left">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input class="form-control" type="text" placeholder="Username" name="name" id="username"/>
                    </div>
                </div>
            </div>
            
            <div class="control-group">
                <label class="control-label">Password</label>
                <div class="controls">
                    <div class="input-icon left">
                       <i class="fa fa-lock" aria-hidden="true"></i>
                        <input class="form-control" type="password" placeholder="Password" name="pass" id="password"/>
                    </div>
                </div>
            </div>
            
            <div class="control-group" style="height: 30px;position: relative;">
                
                <button class="btn green pull-right" id="btnLogin">
                   <i class="fa fa-check" aria-hidden="true"></i>
 Login
                </button>
				<span id="tiny_loder" style="position: absolute;right: 0;padding: 9px 0px;top: 0;background: rgba(255,255,255,0.8);width: 77px;margin-left: 0;text-align: center;display: none;"><img style="" src="images/tinyloader.gif"  border="0"></span>
            </div>
            
            
    </div>
    <!-- END LOGIN -->
    
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.10.3.custom.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.slimscroll.min.js"></script>
    <script type="text/javascript" src="js/jquery.blockUI.js"></script>
    <script type="text/javascript" src="js/jquery.event.move.js"></script>
    <script type="text/javascript" src="js/respond.min.js"></script>
    
    <script type="text/javascript" src="js/jquery.uniform.min.js"></script>

    <script type="text/javascript" src="js/app.js"></script>
    

    <script>
        $(document).ready(function() {
            App.initLogin();
			//$('#btnLogin').append('<img style="text-align:center" src="images/tinyloader.gif" id="tiny_loder" border="0">');
        });
    </script>
</body>
</html>
<script src="https://www.gstatic.com/firebasejs/4.5.0/firebase.js"></script>
<script type="text/javascript" src="js/firebase_app.js"></script>
<script>
  const btnLogin = document.getElementById('btnLogin');
  
	btnLogin.addEventListener('click',e => {
		const username = document.getElementById('username').value;
		const password = document.getElementById('password').value;
		if(username=='' || password==''){
				alert("Please enter username and password.");
				return false;
		}else{
				//$('#btnLogin').append('<img style="" src="images/tinyloader.gif" id="tiny_loder" border="0">');
				$('#tiny_loder').css({'display':'block'});
			var key = '-KyPuneeUNhbjgHk008T';
			var databaseRef = firebase.database().ref('admin/'+key);
			if(key!=''){
				databaseRef.once('value', function(childSnapshot) {
										
					var childData = childSnapshot.val();
					//alert(childData.product_name);
				
					const username = document.getElementById('username').value;
					const password = document.getElementById('password').value;
					
					if(username==childData.username && password==childData.password){
						
						$.ajax({
							url: "ajax_adminlogin.php",
							data:'',
							type: "POST",
							success: function(data) {
								//alert(data);
						
								//console.log(firebaseUser);
								window.location = "dashboard.php?menu_name=Default";
						
							}
						});
					}else{
						alert("Invalid username or password!");
						$('#tiny_loder').css({'display':'none'});
					}
					
				});
			}
		}
	
	});
  
	/* For create admin user
	var id = firebase.database().ref().child('admin').push().key;
	var data = {
		id: id,
		username: 'admin',
		password: 'admin',
		email: ''
	}
	var updates = {};
	updates['/admin/' + id] = data;
	firebase.database().ref().update(updates);*/
	
	
  /*
  firebase.auth().onAuthStateChanged(firebaseUser => {
	  
		if(firebaseUser){
			
			$.ajax({
				url: "ajax_adminlogin.php",
				data:'',
				type: "POST",
				success: function(data) {
					//alert(data);
			
					//console.log(firebaseUser);
					window.location = "dashboard.php?menu_name=Default";
			
				}
			});
			
			
			
			//document.getElementById('btnLogout').style.display = 'block';
			
		}
		else{
			//console.log('Not Loged In');
			//alert("No");
			
			//document.getElementById('btnLogout').style.display = 'none';
		}
	  
	});*/
  
</script>