<?php  
include('connect.php');
include("FCKeditor/fckeditor.php") ;
$pagename = "User";
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <title>User</title>
    
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

	<!--<SCRIPT language=javascript src="body.js"></SCRIPT>-->
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
									echo "<span style='color:#CC6600;'>User Added Successfully.</span>";	 
							elseif($msg == 2)
									echo "<span style='color:#CC6600;'>User Updated Successfully.</span>";	 
							elseif($msg == 3)
									echo "<span style='color:#CC6600;'>User Deleted Successfully.</span>";	 
							elseif($msg == 4)
									echo "<span style='color:#CC6600;'>User with this name is already exists.</span>";	 

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
                                <form action="add_user.php" method="post" name="frm" id="frm" enctype="multipart/form-data" onSubmit="javascript:return keshav_check();" class="form-horizontal row-border" id="validate-1"  novalidate="novalidate">
                                    <input type="hidden" name="mode" id="mode" value="<?= $_REQUEST['mode']; ?>" >
                                    <input type="hidden" name="pno" id="" value="<?= $_REQUEST['pno']; ?>" >
									<div class="form-group">
										<h3 style="margin-left:10%;">User Informatin</h3>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">
											<span class="required">*</span>Firstname:
										</label>     
										<div class="col-md-4">
											<input class="form-control" name="firstname" type="text" id="firstname"  maxlength="80" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">
											<span class="required">*</span>Lastname:
										</label>     
										<div class="col-md-4">
											<input class="form-control" name="lastname" type="text" id="lastname"  maxlength="80" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">
											<span class="required">*</span>Email:
										</label>     
										<div class="col-md-4">
											<input class="form-control" name="email" type="text" id="email"  maxlength="80" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">
											<span class="required">*</span>Password:
										</label>     
										<div class="col-md-4">
											<input class="form-control" name="pass" type="password" id="pass"  maxlength="80" />
										</div>
									</div>
									<div class="form-group">
										<h3 style="margin-left:10%;">User Helth Informatin</h3>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">
											Birthdate:
										</label>     
										<div class="col-md-4">
											<input class="form-control" name="birthdate" type="text" id="birthdate"  maxlength="80" readonly="readonly"	onclick="displayCalendar(document.getElementById('birthdate'),'dd-mm-yyyy',this)" /> <img src="calendar.jpg" width="24" height="24" align="absbottom"	onclick="displayCalendar(document.getElementById('birthdate'),'dd-mm-yyyy',this)" style="position: absolute; top: 4px; right: 20px;" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">
											Gender:
										</label>     
										<div class="col-md-4">
											<select name="gender" id="gender" class="form-control">
												<option value="">Select Gender</option>
												<option value="male">Male</option>
												<option value="female">Female</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">
											Unit:
										</label>     
										<div class="col-md-4">
											<select name="unit" id="unit" class="form-control">
												<option value="">Select Unit</option>
												<option value="imperial">Imperial</option>
												<option value="metric">Metric</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">
											Weight:
										</label>     
										<div class="col-md-4">
											<input class="form-control" name="weight" type="text" id="weight"  maxlength="80" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">
											Height:
										</label>     
										<div class="col-md-4">
											<input class="form-control" name="height" type="text" id="height"  maxlength="80" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">
											Breakfast:
										</label>     
										<div class="col-md-4">
											<input class="form-control" name="breakfast" type="text" id="breakfast"  maxlength="80" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">
											Morning Snack:
										</label>     
										<div class="col-md-4">
											<input class="form-control" name="morningsnack" type="text" id="morningsnack"  maxlength="80" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">
											Lunch:
										</label>     
										<div class="col-md-4">
											<input class="form-control" name="lunch" type="text" id="lunch"  maxlength="80" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">
											Afternoon Snack:
										</label>     
										<div class="col-md-4">
											<input class="form-control" name="afternoonsnack" type="text" id="afternoonsnack"  maxlength="80" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">
											Dinner:
										</label>     
										<div class="col-md-4">
											<input class="form-control" name="dinner" type="text" id="dinner"  maxlength="80" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">
											Evening Snack:
										</label>     
										<div class="col-md-4">
											<input class="form-control" name="eveningsnack" type="text" id="eveningsnack"  maxlength="80" />
										</div>
									</div>
									<div class="form-actions">
										<input name="" id="cancel" type="button" value="Cancel" onclick="cancel_data()" class="btn green pull-right">
										<input type="hidden" id="req_key" value="<?php echo $_REQUEST['key']; ?>">
										<?php if(isset($_REQUEST['key'])){ ?>
											<input type="button" value="Update" onclick="update_data();" class="btn green pull-right">
										<?php }else{ ?>
											<input type="button" id="save" value="Save" onclick="save_data();" class="btn green pull-right">
										<?php } ?>
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
        apiKey: "AIzaSyDQPPUNZMOw4C4d9iierza0f9smxSawcvQ",
        authDomain: "lower-6.firebaseapp.com",
        databaseURL: "https://lower-6.firebaseio.com",
        projectId: "lower-6",
        storageBucket: "lower-6.appspot.com",
        messagingSenderId: "163032087595"
    };
    firebase.initializeApp(config);
	//For file upload		
	var database = firebase.database();
	var storage = firebase.storage();
	var inpBilde = document.getElementById("inpBilde");
	//var bildeurler = database.ref("bildeurler");
	function lastopp(){ 
		var bilde = this.files[0];
		var img_name = bilde.name;
		let bildenavn = storage.ref("broker_images/" + img_name);
		bildenavn.put(bilde);
		bildenavn.getDownloadURL().then(function(url) {
			document.getElementById("p_image").src = url;
		});
	}
	//inpBilde.onchange = lastopp;
	
	var key = document.getElementById('req_key').value;
	var databaseRef = firebase.database().ref('users/'+key);
	if(key!=''){
		databaseRef.once('value', function(childSnapshot) {
			var childData = childSnapshot.val();
			document.getElementById("firstname").value = childData.firstname;
			document.getElementById('lastname').value = childData.lastname;
			document.getElementById('email').value = childData.email;
			document.getElementById('pass').value = childData.pass;
			document.getElementById('birthdate').value = childData.birthdate;
			document.getElementById('gender').value = childData.gender;
			document.getElementById('unit').value = childData.unit;
			document.getElementById('weight').value = childData.weight;
			document.getElementById('height').value = childData.height;
			document.getElementById('breakfast').value = childData.breakfast;
			document.getElementById('morningsnack').value = childData.morningsnack;
			document.getElementById('lunch').value = childData.lunch;
			document.getElementById('afternoonsnack').value = childData.afternoonsnack;
			document.getElementById('dinner').value = childData.dinner;
			document.getElementById('eveningsnack').value = childData.eveningsnack;
			
			$( "#data_loader" ).hide();
		});
	}	
	function save_data(){ 
		if(document.getElementById('firstname').value==''){
			alert("Please enter firstname.");
			document.getElementById("firstname").focus();
			return false;
		}
		if(document.getElementById('lastname').value==''){
			alert("Please enter lastname.");
			document.getElementById("lastname").focus();
			return false;
		}
		if(document.getElementById('email').value==''){
			alert("Please enter email.");
			document.getElementById("email").focus();
			return false;
		}
		if(document.getElementById('pass').value==''){
			alert("Please enter password.");
			document.getElementById("pass").focus();
			return false;
		}
		var firstname = document.getElementById('firstname').value;
		var lastname = document.getElementById('lastname').value;
		var email = document.getElementById('email').value;
		var pass = document.getElementById('pass').value;
		var birthdate=document.getElementById('birthdate').value;
		var gender=document.getElementById('gender').value;
		var unit=document.getElementById('unit').value;
		var weight=document.getElementById('weight').value;
		var height=document.getElementById('height').value;
		var breakfast=document.getElementById('breakfast').value;
		var morningsnack=document.getElementById('morningsnack').value;
		var lunch=document.getElementById('lunch').value;
		var afternoonsnack=document.getElementById('afternoonsnack').value;
		var dinner=document.getElementById('dinner').value;
		var eveningsnack=document.getElementById('eveningsnack').value;
		//var FCKGetInstance = FCKeditorAPI.GetInstance('description');
		//var getText = FCKGetInstance.EditorDocument.body.innerHTML;
		//var description = getText.replace(/(<([^>]+)>)/ig, "");
		
		/*var img_lbl = 'No';
		if(document.getElementById("inpBilde").value != ""){
			img_lbl = 'Yes';
		}*/
		var id = firebase.database().ref().child('users').push().key;
		var result = confirm("Please confirm, you want to save this data.");
		if (result) {
			var data = {
				firstname: firstname,
				lastname: lastname,
				email: email,
				pass: pass,
				birthdate: birthdate,
				gender: gender,
				unit: unit,
				weight: weight,
				height: height,
				breakfast: breakfast,
				morningsnack: morningsnack,
				lunch: lunch,
				afternoonsnack: afternoonsnack,
				dinner: dinner,
				eveningsnack: eveningsnack
			}
			var updates = {};
			updates['/users/' + id] = data;
			firebase.database().ref().update(updates);
			alert("The user is added successfully!");
			window.location = "manage_user.php?msg=1";
		}
	}
	function update_data(){
		if(document.getElementById('firstname').value==''){
			alert("Please enter firstname.");
			document.getElementById("firstname").focus();
			return false;
		}
		if(document.getElementById('lastname').value==''){
			alert("Please enter lastname.");
			document.getElementById("lastname").focus();
			return false;
		}
		if(document.getElementById('email').value==''){
			alert("Please enter email.");
			document.getElementById("email").focus();
			return false;
		}
		if(document.getElementById('pass').value==''){
			alert("Please enter password.");
			document.getElementById("pass").focus();
			return false;
		}
		var firstname = document.getElementById('firstname').value;
		var lastname = document.getElementById('lastname').value;
		var email = document.getElementById('email').value;
		var pass = document.getElementById('pass').value;
		var birthdate=document.getElementById('birthdate').value;
		var gender=document.getElementById('gender').value;
		var unit=document.getElementById('unit').value;
		var weight=document.getElementById('weight').value;
		var height=document.getElementById('height').value;
		var breakfast=document.getElementById('breakfast').value;
		var morningsnack=document.getElementById('morningsnack').value;
		var lunch=document.getElementById('lunch').value;
		var afternoonsnack=document.getElementById('afternoonsnack').value;
		var dinner=document.getElementById('dinner').value;
		var eveningsnack=document.getElementById('eveningsnack').value;
		
		var result = confirm("Please confirm, you want to save this data.");
		if (result) {
			var data = {
				firstname: firstname,
				lastname: lastname,
				email: email,
				pass: pass,
				birthdate: birthdate,
				gender: gender,
				unit: unit,
				weight: weight,
				height: height,
				breakfast: breakfast,
				morningsnack: morningsnack,
				lunch: lunch,
				afternoonsnack: afternoonsnack,
				dinner: dinner,
				eveningsnack: eveningsnack
			}
			var updates = {};
			updates['/users/' + key] = data;
			firebase.database().ref().update(updates);
			
			alert("The details are updated successfully!");
			window.location = "manage_user.php?msg=2";
		}
	}			
	function cancel_data(){
		window.location = "manage_user.php";
	}
</script>
