<?php  
include('connect.php');
include("FCKeditor/fckeditor.php") ;
$pagename = "Push Notifications";
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <title>Push Notifications</title>
    
    <!--[if lt IE 9]> <script src="/assets/plugins/common/html5shiv.js" type="text/javascript"></script> <![endif]-->
    <script src="js/modernizr.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/jquery-ui-1.10.3.custom.css" />
    <!--[if lt IE 9]><link rel="stylesheet" type="text/css" href="/assets/plugins/jquery-ui/jquery.ui.1.10.2.ie.css"/><![endif]-->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/open-sans.css">
    
    <link href="css/main.css" rel="stylesheet" type="text/css"/>
    <link href="css/responsive.css" rel="stylesheet" type="text/css"/>
    <link href="css/style_default.css" rel="stylesheet" type="text/css"/>
    
    <!--   <link rel="icon" type="image/png" href="images/favicon.ico">-->
    <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/apple-touch-icon-144x144-precomposed.png">

<SCRIPT language=javascript src="body.js"></SCRIPT>
<link type="text/css" rel="stylesheet" href="dhtmlgoodies_calendar/dhtmlgoodies_calendar.css?random=20051112" media="screen" />
<script type="text/javascript" src="dhtmlgoodies_calendar/dhtmlgoodies_calendar.js?random=20060118"></script>

<script language="JavaScript" type="text/javascript">
var xmlHttp
function top_GetXmlHttpObject()
{
var xmlHttp=null;
try
  {
  // Firefox, Opera 8.0+, Safari
  xmlHttp=new XMLHttpRequest();
  }
catch (e)
  {
  // Internet Explorer
  try
	{
	xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
	}
  catch (e)
	{
	xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
  }
return xmlHttp;
}

function sam_GetSelectedItem(field_id)
{
var tmp=document.getElementById(field_id);
var len = tmp.length
var i = 0
var chosen = ","

for (i = 0; i < len; i++) {
if (tmp[i].selected) {
chosen = chosen +  tmp[i].value + ","
} 
}

return chosen
}
</script>
	<script src="https://www.gstatic.com/firebasejs/4.5.0/firebase.js"></script>
	<!--<script type="text/javascript" src="js/firebase_app.js"></script>-->
	<link type="text/css" rel="stylesheet" href="dhtmlgoodies_calendar/dhtmlgoodies_calendar.css?random=20051112" media="screen"></LINK>
	<script type="text/javascript" src="dhtmlgoodies_calendar/dhtmlgoodies_calendar.js?random=20060118"></script>
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
                        
                        <li class="current"><?php if(isset($_REQUEST['key'])){ echo "Update"; }else{ echo "Insert"; } ?> Data</li>
                    </ul>

                </div>  <!-- End : Breadcrumbs -->

                <div class="page-header">   <!-- Start : Page Header -->
                    <div class="page-title">
                        <h3><?php if(isset($_REQUEST['key'])){ echo "Update"; }else{ echo "Insert"; } ?> Data</h3>
                        <span style="color:#CC6600;">
                        <?php 
                                        $msg = $_REQUEST['msg'];
                                        if($msg == 1)
                                                echo "<span style='color:#CC6600;'>Push Notifications Added Successfully.</span>";	 
                                        elseif($msg == 2)
                                                echo "<span style='color:#CC6600;'>Push Notifications Updated Successfully.</span>";	 
                                        elseif($msg == 3)
                                                echo "<span style='color:#CC6600;'>Push Notifications Deleted Successfully.</span>";	 
                                        elseif($msg == 4)
                                                echo "<span style='color:#CC6600;'>Push Notifications with this name is already exists.</span>";	 

                                        if($gmsg == 1)
                                                echo "Please enter all the information."; 
                                ?>
                        </span>
                    </div>
                </div>  <!-- End : Page Header -->
				<div id="data_loader" style="display:none;text-align: center;" class="loader">
					<img src="images/loading_spinner.gif" height="60" width="60">
				</div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="portlet box blue">
                            <div class="portlet-title">
                                <div class="caption"><i class="fa fa-bars"></i><?php if(isset($_REQUEST['key'])){ echo "Update"; }else{ echo "Insert"; } ?> Data</div>
                                
                            </div>
                            <div class="portlet-body">
                                        <form action="add_pushnotification.php" method="post" name="frm" id="frm" enctype="multipart/form-data" onSubmit="javascript:return keshav_check();" class="form-horizontal row-border" id="validate-1"  novalidate="novalidate">
                                        <input type="hidden" name="mode" id="mode" value="<?= $_REQUEST['mode']; ?>" >
                                        <input type="hidden" name="pno" id="" value="<?= $_REQUEST['pno']; ?>" >
                                         
                    <div class="form-group">
                    <label class="col-md-3 control-label">
                      <span class="required">*</span>Message:
                     </label>     
                     <div class="col-md-4">
                   <textarea class="form-control required" cols="10" rows="7" id="message" ></textarea>
                     </div>
                     </div>

					
					<div class="form-group">
                    <label class="col-md-3 control-label">
                      <span class="required">*</span>Link:
                     </label>     
                     <div class="col-md-4">
                     <input class="form-control" type="text" id="link"  maxlength="150" />
                     </div>
                     </div>
					
					<div class="form-group">
						<label class="col-md-3 control-label">
							Send Now:
						</label>     
						<div class="col-md-4">
							<input class="form-control" style="width:auto;" name="sendnow" type="checkbox" id="sendnow" />
						</div>
					</div>
					 
					   
								<div class="form-actions">
									<input name="" id="cancel" type="button" value="Cancel" onclick="cancel_data()" class="btn green pull-right">                                        
									<input type="hidden" id="req_key" value="<?php echo $_REQUEST['key']; ?>">
									 
									
									<?php if(isset($_REQUEST['key'])){ ?>
									<!--<input type="button" value="Update" onclick="update_data();" class="btn green pull-right">-->
									<?php
									}else{ ?>
										<input type="button" id="save" value="Save" onclick="save_data();" class="btn green pull-right">
										<?php
									} ?>
									
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
    
    <!--<script type="text/javascript" src="js/jquery.validate.min.js"></script>-->
    
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
<script> 
<?php if(isset($_REQUEST['key'])){ ?>
$( "#data_loader" ).show();
<?php } ?>
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
	
			var key = document.getElementById('req_key').value;
			
			var databaseRef = firebase.database().ref('pushnotifications/'+key);
			if(key!=''){
			
				databaseRef.once('value', function(childSnapshot) {
				
					//snapshot.forEach(function(childSnapshot) {
						
						var childData = childSnapshot.val();
						//alert(childData.product_name);
						document.getElementById("message").value = childData.message;
						document.getElementById("link").value = childData.link;
						var sendnowvalue = childData.sendnow;
						if(sendnowvalue=="1") {
							document.getElementById("sendnow").checked = true;
						} else {
							document.getElementById("sendnow").checked = false;
						}
						$( "#data_loader" ).hide();
					//});
				});
			}
			
			function save_data(){ 
				if(document.getElementById('message').value=='' || document.getElementById('link').value==''){
					alert("Please enter required data.");
					document.getElementById("message").focus();
					return false;
				}
				var result = confirm("Are you sure you want to save this data?");
				if (result) {
					var message = document.getElementById('message').value;
					var link = document.getElementById('link').value;
					var prefix = 'https://';
					var prefix1 = 'http://';
					var sendnow = "0";
					if(document.getElementById("sendnow").checked) {
						sendnow = "1";
					}
					if (link.substr(0, prefix.length) !== prefix && link.substr(0, prefix1.length) !== prefix1)
					{
						link = prefix + link;
					}
					var status = 0;
				
					var id = firebase.database().ref().child('products').push().key;
					//var description = document.getElementById('description').value;
				
					var data = {
						
						message: message,
						status: status,
						link: link,
						sendnow: sendnow
						
					}
					var updates = {};
					updates['/pushnotifications/' + id] = data;
					
					//for file upload
					//lastopp();
			
					firebase.database().ref().update(updates);
					
					//alert("The notifications is added successfully!");
					window.location = "manage_pushnotifications.php?msg=1";
				}else{
					return false;		
				}
				
				
			}
			/*
			function update_data(){
				
				var message = document.getElementById('message').value;
				var link = document.getElementById('link').value;
			
				var data = {
					
					message: message,
					link: link
				}
				var updates = {};
				updates['/pushnotifications/' + key] = data;
				firebase.database().ref().update(updates);
				
				alert("The details are updated successfully!");
				window.location = "manage_pushnotifications.php?msg=2";
			}*/
			
			function cancel_data(){
				window.location = "manage_pushnotifications.php";
			}
		</script>
</script>