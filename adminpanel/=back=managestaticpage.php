<?php  
include('connect.php');
include("FCKeditor/fckeditor.php") ;
$pagename = "Manage Static page";
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <title>Manage Static Page</title>
    
    <!--[if lt IE 9]> <script src="assets/plugins/common/html5shiv.js" type="text/javascript"></script> <![endif]-->
    <script src="js/modernizr.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/jquery-ui-1.10.3.custom.css" />
    <!--[if lt IE 9]><link rel="stylesheet" type="text/css" href="assets/plugins/jquery-ui/jquery.ui.1.10.2.ie.css"/><![endif]-->
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
                        
                        <li class="current">Update Data</li>
                    </ul>

                </div>  <!-- End : Breadcrumbs -->

                <div class="page-header">   <!-- Start : Page Header -->
                    <div class="page-title">
                        <h3>Update Data</h3>
                        <span style="color:#CC6600;">
                        <?php 
                                        $msg = $_REQUEST['msg'];
                                        if($msg == 1)
                                                echo "<span style='color:#CC6600;'>Data Added Successfully.</span>";	 
                                        elseif($msg == 2)
                                                echo "<span style='color:#CC6600;'>Data Updated Successfully.</span>";	 
                                        elseif($msg == 3)
                                                echo "<span style='color:#CC6600;'>Data Deleted Successfully.</span>";	 
                                        elseif($msg == 4)
                                                echo "<span style='color:#CC6600;'>Data with this name is already exists.</span>";	 

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
                                <div class="caption"><i class="fa fa-bars"></i>Update Data</div>
                                
                            </div>
                            <div class="portlet-body">
                                        <form action="managestaticpage.php" method="post" name="frm" id="frm" enctype="multipart/form-data" onSubmit="javascript:return keshav_check();" class="form-horizontal row-border" id="validate-1"  novalidate="novalidate">
                                        <input type="hidden" name="mode" id="mode" value="<?= $_REQUEST['mode']; ?>" >
                                        <input type="hidden" name="pno" id="" value="<?= $_REQUEST['pno']; ?>" >
                                         
                    <div class="form-group">
                    <label class="col-md-3 control-label">
                      <span class="required">*</span>Page Title:
                     </label>     
                     <div class="col-md-4">
                     <input class="form-control" name="title" type="text" id="title"  maxlength="80" />
                     </div>
                     </div>

					 
					 <!--<div class="form-group">
                    <label class="col-md-3 control-label">
                      <span class="required"></span>Image:
                     </label>     
                     <div class="col-md-4">
						<input type="file" id="inpBilde" name="inpBilde">
						
						<?php //if(isset($_REQUEST['key'])){ ?>
						<img id="p_image" src="" width="100" height="100" border="0" />
						<?php //} ?>
                     </div>
                     </div>-->
				
                    <!--<input type="hidden" id="image_name" >-->
					
					<!--<div class="form-group">
                    <label class="col-md-3 control-label">
                      <span class="required"></span>Simple Text:
                     </label>     
                     <div class="col-md-4">
                     <input class="form-control" type="text" id="simple_text"  maxlength="150" />
                     </div>
                     </div>-->
					 
					 <!--<div class="form-group">
                    <label class="col-md-3 control-label">
                      <span class="required"></span>Link:
                     </label>     
                     <div class="col-md-4">
                     <input class="form-control" type="text" id="link"  maxlength="150" />
                     </div>
                     </div>-->
					 
					 <div class="form-group">
                            <label class="col-md-3 control-label">
                              Description:
                             </label>     
                             <div class="col-md-9"> <?php
                                                    $oFCKeditor8 = new FCKeditor('description') ;
                                                    $oFCKeditor8->BasePath = 'FCKeditor/';
                                                    $oFCKeditor8->Value = $description;
                                                    $oFCKeditor8->Height = 500;
                                                    $oFCKeditor8->Create() ;?>
                               </div>
                        </div>
						
						
						
						
					
						
				                 
								<div class="form-actions">
									<input name="" id="cancel" type="button" value="Cancel" onclick="cancel_offer()" class="btn green pull-right">
                                <?php if($_GET["pid"]=="1") { ?>
									<input type="hidden" id="req_key" value="-LADMmO0Uaz2Tu5LSjvL">
                                <?php } else if($_GET["pid"]=="2") { ?>
                                    <input type="hidden" id="req_key" value="-LADMmO5ngkxwkkcUjO1">
                                <?php } else if($_GET["pid"]=="3") { ?>
                                    <input type="hidden" id="req_key" value="-LADMmO6LEH1Qpl74xhc">
                                <?php } ?>
									
									<?php //if(isset($_REQUEST['key'])){ ?>
									<input type="button" value="Update" onclick="update_data();" class="btn green pull-right">
									<?php
									//}else{ ?>
										<!--<input type="button" id="save" value="Save" onclick="save_product();" class="btn green pull-right">-->
										<?php
									//} ?>
									
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
            //App.init();
            //FormValidation.init();
        });        
    </script>
                            
</body>
</html>
<script> 
		$( "#data_loader" ).show();
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

		function lastopp(){ 
			var bilde = this.files[0];
			var img_name = bilde.name;
			
			let bildenavn = storage.ref("offer_image/" + img_name);
			
			bildenavn.put(bilde);
			bildenavn.getDownloadURL().then(function(url) {
				//alert(url);
				//document.getElementById("image_name").value = url;
				document.getElementById("p_image").src = url;
			});
		}
		//inpBilde.onchange = lastopp;
			
			
			
			
			var key = document.getElementById('req_key').value.trim();
			//var key = '-KyPFIHjc1eHYjLHZxLm';

			var databaseRef = firebase.database().ref('staticpages/'+key);
			if(key!=''){
                //alert(key);
                databaseRef.once('value', function(childSnapshot) {
                    var childData = childSnapshot.val();
                                 //alert(childData.title);
                    document.getElementById("title").value = childData.title;
                    var FCKGetInstance = FCKeditorAPI.GetInstance('description');
                    FCKGetInstance.EditorDocument.body.innerHTML = childData.description;
                    $( "#data_loader" ).hide();
				});
			}

			function update_data(){
				
				if(document.getElementById('title').value==''){
					alert("Please enter title.");
					document.getElementById("title").focus();
					return false;
				}
				var title = document.getElementById('title').value;
				
				//var image_name = document.getElementById('image_name').value;
				
				var FCKGetInstance = FCKeditorAPI.GetInstance('description');
				var getText = FCKGetInstance.EditorDocument.body.innerHTML;
				var description = getText.replace(/(<([^>]+)>)/ig, "");
				
				var result = confirm("Please confirm, you want to save this data.");
				if (result) {
					var data = {
						title: title,
						description: description
					}
					var updates = {};
					updates['/staticpages/' + key] = data;
					firebase.database().ref().update(updates);
					
					alert("The details are updated successfully!");
					
                    window.location = "managestaticpage.php?pid=<?php echo $_GET['pid']; ?>";
				}
				
				
			}
			
			function cancel_offer(){
				window.location = "dashboard.php";
			}
		</script>
