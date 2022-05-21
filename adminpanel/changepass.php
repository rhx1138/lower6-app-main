<? 
  include("connect.php") ;
  /*$LeftLinkSection = 1;
  $Error=0;
  $Message="";
  if(isset($_POST['Submit']))
  {
  	 if(isset($_POST['name']))
	 {	
	 	$username=$_POST['username'];
	 	$name=$_POST['name'];
	 	$email=$_POST['email'];
        $query = "update admin set username='$username',password='$name',email='$email' where id=".$_SESSION["ADMIN_SESS_USERID"];
	 }
     $result = mysql_query($query);
     
	$Message = "Details Updated Successfully"; 
 }

$query = "select * from admin where id=".$_SESSION["ADMIN_SESS_USERID"];
$result = mysql_query($query,$db);
$row = mysql_fetch_array($result);
$username= $row["username"];
$name= $row["password"];
$email= $row["email"];
*/
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <title>My Account | <?=$SITE_NAME?></title>
    
    <!--[if lt IE 9]> <script src="assets/plugins/common/html5shiv.js" type="text/javascript"></script> <![endif]-->
    <script src="js/modernizr.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/jquery-ui-1.10.3.custom.css" />
    <!--[if lt IE 9]><link rel="stylesheet" type="text/css" href="assets/plugins/jquery-ui/jquery.ui.1.10.2.ie.css"/><![endif]-->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel='stylesheet' type='text/css' href="css/open-sans.css">
    
    <link href="css/main.css" rel="stylesheet" type="text/css"/>
    <link href="css/responsive.css" rel="stylesheet" type="text/css"/>
    <link href="css/style_default.css" rel="stylesheet" type="text/css"/>
    
    <!--   <link rel="icon" type="image/png" href="images/favicon.ico">-->
    <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/apple-touch-icon-144x144-precomposed.png">

 <SCRIPT language=javascript src="body.js"></SCRIPT>
<script>
function valid()
{
	if(document.addprod.name.value=="")
	{
		alert("Enter Password");
		document.addprod.name.select();
		return false;
	}
}
</script>   
    
</head>
<body>

   <? include("top.php"); ?>

    <div id="container">    <!-- Start : container -->

       <? include("left.php"); ?>

        <div id="content">  <!-- Start : Inner Page Content -->

            <div class="container"> <!-- Start : Inner Page container -->

                <div class="crumbs">    <!-- Start : Breadcrumbs -->
                    <ul id="breadcrumbs" class="breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="dashboard.php">Dashboard</a>
                        </li>
                        
                        <li class="current">My Account</li>
                    </ul>

                </div>  <!-- End : Breadcrumbs -->

                <div class="page-header">   <!-- Start : Page Header -->
                    <div class="page-title">
                        <h3>My Account</h3>                        
                    </div>
                </div>  <!-- End : Page Header -->
                <? if($_REQUEST['msg']) { ?>
                    <div class="alert alert-danger show">
                        <button class="close" data-dismiss="alert"></button>
                        <? echo 'Details Updated Successfully'; ?>
                    </div>
                <?  } ?>
				<div id="data_loader" style="display:none;text-align: center; left:37%; top:30%;" class="loader">
					<img src="images/loading_spinner.gif" height="60" width="60">
				</div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="portlet box blue">
                            <div class="portlet-title">
                                <div class="caption"><i class="fa fa-bars"></i>
                                         My Account
                                </div>
                            </div>
                            <div class="portlet-body">
                                
                                <form class="form-horizontal row-border" id="validate-1" novalidate="novalidate" name=addprod  method=post enctype="multipart/form-data" onsubmit="javascript: return valid();">

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">
                                           <span class="required">*</span>Username: 
                                        </label>
                                        <div class="col-md-9">
                                            <input type="text" name="username" id="username" value="" class="form-control required">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">
                                         <span class="required">*</span>Password: 
                                        </label>
                                        <div class="col-md-9">
                                            <input type="text" name="name" id="password" value="" class="form-control required">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">
                                           <span class="required">*</span>Email:
                                        </label>
                                        <div class="col-md-9">
                                            <input type="text" name="email" id="email" value="" class="form-control required">
                                        </div>
                                    </div>
                                    
                                    <div class="form-actions">
                                        <input name="Submit" type="button" onclick="update_data();" value="Update" class="btn green pull-right">
                                    </div>

                                </form>
                            </div>
                        </div>
                        
                        
                    </div>
                    
                   
                </div>

            </div>  <!-- End : Inner Page container -->

        </div>  <!-- End : Inner Page Content -->
        <a href="javascript:void(0);" class="scrollup">Scroll</a>
    </div>  <!-- End : container -->
    
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.10.3.custom.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.slimscroll.min.js"></script>
    <script type="text/javascript" src="js/jquery.blockUI.js"></script>
    <script type="text/javascript" src="js/jquery.event.move.js"></script>
    <script type="text/javascript" src="js/lodash.compat.js"></script>
    <script type="text/javascript" src="js/respond.min.js"></script>
    <script type="text/javascript" src="js/excanvas.js"></script>
    <script type="text/javascript" src="js/breakpoints.js"></script>
    <script type="text/javascript" src="js/touch-punch.min.js"></script>
    
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    
    <script type="text/javascript" src="js/app.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    
    <script>
        $(document).ready(function(){
            App.init();
            FormValidation.init();
        });        
    </script>
</body>
</html>
<script src="https://www.gstatic.com/firebasejs/4.5.0/firebase.js"></script>
<script> 
$( "#data_loader" ).show();
	var config = {
		apiKey: "AIzaSyAWX9ZPQogiUQ2Pudk7A_9Y0zG0_o62xqg",
		authDomain: "my-payments-c7914.firebaseapp.com",
		databaseURL: "https://my-payments-c7914.firebaseio.com",
		projectId: "my-payments-c7914",
		storageBucket: "my-payments-c7914.appspot.com",
		messagingSenderId: "973959248900"
		/*apiKey: "AIzaSyBdNYd9jZTHJMKIL6NUTMZzWoqXYQfyo6c",
		authDomain: "",
		databaseURL: "https://testapp-41904233.firebaseio.com",
		projectId: "testapp-41904233",
		storageBucket: "testapp-41904233.appspot.com",
		messagingSenderId: "48284968547"*/
	};
	firebase.initializeApp(config);
	
//For file upload		
	var database = firebase.database();
		
		
		var key = '-KyPuneeUNhbjgHk008T';
		
		var databaseRef = firebase.database().ref('admin/'+key);
		if(key!=''){
		
			databaseRef.once('value', function(childSnapshot) {
				
				var childData = childSnapshot.val();
				//alert(childData.product_name);
				document.getElementById("username").value = childData.username;
				document.getElementById("password").value = childData.password;
				document.getElementById("email").value = childData.email;	
				$( "#data_loader" ).hide();				
			});
		}
		
		function update_data(){
			
			
			var username = document.getElementById('username').value;
			var password = document.getElementById('password').value;
			var email = document.getElementById('email').value;
			
			if(username=='' || password=='' || email==''){
				alert("Please enter required data.");
				return false;
			}else{
				//var id = firebase.database().ref().child('admin').push().key;
				
				var data = {
					
					username: username,
					password: password,
					email: email
				}
				var updates = {};
				updates['/admin/' + key] = data;
				firebase.database().ref().update(updates);
				
				//alert("The details are updated successfully!");
				window.location = "changepass.php?msg=1";
			}
			
		}
		
		
	</script>