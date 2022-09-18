<?php  
include('connect.php');
//include("FCKeditor/fckeditor.php") ;
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
                        <li class="current">User Data</li>
                    </ul>
                </div>  <!-- End : Breadcrumbs -->
                <div class="page-header">   <!-- Start : Page Header -->
                    <div class="page-title">
                        <h3>User Data</h3>
                    </div>
                </div>  <!-- End : Page Header -->
				<div id="data_loader" style="display:none;text-align: center;" class="loader">
					<img src="images/loading_spinner.gif" height="60" width="60">
				</div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="portlet box blue">
                            <div class="portlet-title">
                                <div class="caption"><i class="fa fa-bars"></i>User Data</div>
                            </div>
                            <div class="portlet-body">
                                <form action="add_user.php" method="post" name="frm" id="frm" enctype="multipart/form-data" onSubmit="javascript:return keshav_check();" class="form-horizontal row-border" id="validate-1"  novalidate="novalidate">
                                    <input type="hidden" name="mode" id="mode" value="<?= $_REQUEST['mode']; ?>" >
                                    <input type="hidden" name="pno" id="" value="<?= $_REQUEST['pno']; ?>" >
									<div class="form-group">
										<h3 style="margin-left:10%;">User Informatin</h3>
									</div>
									<div class="form-group" id="display-detail">
										<!--Blank -->
										<hr />
										<table class="table table-bordered table-hover DynamicTable" id="tnl_users_list">
                                    		<tbody>
											
										 	</tbody>
								   		</table>	
									</div>
									<div class="form-actions">
										<input name="" id="cancel" type="button" value="<< Go Back" onclick="cancel_data()" class="btn green pull-right">
										<input type="hidden" id="req_key" value="<?php echo $_REQUEST['key']; ?>">
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
	var	tableRef = document.getElementById('tnl_users_list').getElementsByTagName('tbody')[0];
	var key = document.getElementById('req_key').value;
	var databaseRef = firebase.database().ref('foodintake/'+key);
	if(key!=''){
		databaseRef.once('value', function(childSnapshot) {
			var childData = childSnapshot.val();
			//document.getElementById("firstname").value = childData.firstname;
			/*Get Data from foodintake*/
			var date = "";
			var mealtype = "";
			var sugervalue = "";
			var time = "";
			var food_table = "";
			var counter = 0;
			$.each(childData, function(k, v){
				date =  v.date;
				mealtype =  v.mealtype;
				sugervalue =  v.sugervalue;
				time =  v.time;
				$("<tr><td width='25%' style='min-width:100px;'>Meal Type</td><td>"+mealtype+"</td></tr>").appendTo(tableRef);
				$("<tr><td>Sugervalue</td><td>"+sugervalue+"</td></tr>").appendTo(tableRef);
				$("<tr><td>Date</td><td>"+date+"</td></tr>").appendTo(tableRef);
				$("<tr><td>Time</td><td>"+time+"</td></tr>").appendTo(tableRef);
				$.each(v.eatfoodlist, function(k1, v1) {
					counter++;
					$("<tr><td>Food</td><td id=foodlist"+counter+"><input type='hidden' id='foodkey"+counter+"' value='"+v1.foodkey+"' ></td></tr>").appendTo(tableRef);
				});
				$("<tr><td colspan='2'>&nbsp;</td></tr>").appendTo(tableRef);
			});
			var counter2=1;
			var foodkey = "";
			if(counter>0) {
				foodList(counter2);
			}
			function foodList(counter2) {
				foodkey = $("#foodkey"+counter2).val();
				if(foodkey!="") {
					var databaseRef1 = firebase.database().ref('GIData/'+foodkey);
					databaseRef1.once('value', function(childSnapshot1) {
						var childData1 = childSnapshot1.val();
						food_table = "<table style='border:none;'>";
						food_table += "<tr><td>Food Foodname:</td> <td>"+childData1.food+"</td></tr>";
						food_table += "<tr><td>Food Category:</td> <td>"+childData1.category+"</td></tr>";
						food_table += "<tr><td>Food Flametype:</td> <td>"+childData1.flametype+"</td></tr>";
						food_table += "<tr><td>Glycemic index (Glucose=100):</td> <td>"+childData1.glycemic_index_glucose_100+"</td></tr>";
						food_table += "<tr><td>Serving size (grams):</td> <td>"+childData1.serving_size_grams+"</td></tr>";
						food_table += "<tr><td>Glycemic load per serving:</td> <td>"+childData1.glycemic_load_per_serving+"</td></tr>";
						food_table += "</table>";
						$(food_table).appendTo($("#foodlist"+counter2));
						food_table = "";
						if(counter2<counter) {
							counter2++;
							foodList(counter2);
						}
					});
				}
			}
            //console.log(childData);
			$( "#data_loader" ).hide();
		});
	}	
				
	function cancel_data(){
		window.location = "manage_user.php";
	}
</script>
