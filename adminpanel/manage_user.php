<?php
include('connect.php');
$pagetitle = 'User';
$pagename = "User";
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <title>Manage User</title>
    
    <!--[if lt IE 9]> <script src="assets/plugins/common/html5shiv.js" type="text/javascript"></script> <![endif]-->
    <script src="js/modernizr.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/jquery-ui-1.10.3.custom.css" />
    <!--[if lt IE 9]><link rel="stylesheet" type="text/css" href="assets/plugins/jquery-ui/jquery.ui.1.10.2.ie.css"/><![endif]-->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/open-sans.css">
    
    <link rel="stylesheet" type="text/css" href="css/select2.css" />
    <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css" />
    
    
    <link href="css/main.css" rel="stylesheet" type="text/css"/>
    <link href="css/responsive.css" rel="stylesheet" type="text/css"/>
    <link href="css/style_default.css" rel="stylesheet" type="text/css"/>
    
    <!--   <link rel="icon" type="image/png" href="images/favicon.ico">-->
    <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/apple-touch-icon-144x144-precomposed.png">
    

	<script src="https://www.gstatic.com/firebasejs/4.6.1/firebase.js"></script>
<script type="text/javascript" src="js/firebase_app.js"></script>

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
                        
                        <li class="current"><? echo $pagetitle; ?></li>
                    </ul>

                </div>  <!-- End : Breadcrumbs -->

                <div class="page-header">   <!-- Start : Page Header -->
                    <div class="page-title">
                        <h3>Manage User</h3>
                        
                    </div>
                </div>  <!-- End : Page Header -->
                <? if($_GET["msg"]) { ?>
                <div class="alert alert-danger show">
                        <button class="close" data-dismiss="alert"></button>
                        
                          <span style="color:#CC6600;">
                          <?
                                    if($_GET["msg"]==1)
                                            echo "User Added Successfully.";
                                    elseif($_GET["msg"]==2)
                                            echo "User Updated Successfully.";
                                    elseif($_GET["msg"]==3)
                                            echo "User Deleted Successfully.";
                                    elseif($_GET["msg"]==4)
                                            echo "User with this name is already Exist.";	
                                    elseif($_GET["msg"]==5)
                                            echo "This User is in use. You can not delete this User.";	

                             ?>
                           </span>
                         
                 </div>
                 <? } 					  
                        ?> 
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet box blue">
                            <div class="portlet-title">
                                <div class="caption"><i class="fa fa-table"></i><? echo $pagetitle; ?></div>
                                 <input style="margin-right:7px;" type="button" name="button2" id="button2" value="ADD NEW"  onclick="location.href='add_user.php'" class="btn green pull-right" />                               
                                
                            </div>
                            <div class="portlet-body">
                                <div class="table-responsive">
                                <form name="frmNewsList" method="post" action="">
                                    <table class="table table-bordered table-hover DynamicTable" id="tnl_users_list">
                                        <thead>                                            
											<tr>
						
												<th width="25px">No.</th>
												<th>Name </th>
												<th>Actions</th>                                               
											</tr>
										</thead>
                                        <tbody>
											
										 </tbody>
								   </table>
								<div id="data_loader" style="display:none;text-align: center;">
									<img src="images/loading_spinner.gif" height="70" width="70">
								</div>
				
                         	<div class="row">
                                 <div class="col-md-6">
				 
				 
				 <input style="margin-right:7px;" type="button" name="button2" id="button2" value="ADD NEW"  onclick="location.href='add_user.php'" class="btn green pull-left" />
                                    &nbsp; 
                                 
                
                                 </div>
                            </div>
                                    </form>   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>  <!-- End : Inner Page container -->
            <a href="javascript:void(0);" class="scrollup">Scroll</a>
        </div>  <!-- End : Inner Page Content -->

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
    
    <script type="text/javascript" src="js/select2.min.js"></script>
  <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/DT_bootstrap.js"></script>
    
    <script type="text/javascript" src="js/app.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    
    <script>
        $(document).ready(function(){
            setTimeout(function(){ 
			
				App.init();
				//DataTabels.init();
				$('#tnl_users_list').DataTable( {
					"order": [[ 0, "asc" ]]
				} );
			},3000);
        });        
    </script>

</body>
</html>
<script src="https://www.gstatic.com/firebasejs/4.5.0/firebase.js"></script>
<script type="text/javascript" src="js/firebase_app.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.5.0/firebase-database.js"></script>
<script>
//var tblUsers = document.getElementById('tnl_users_list');
var	tableRef = document.getElementById('tnl_users_list').getElementsByTagName('tbody')[0];
var databaseRef = firebase.database().ref('users/');
var rowIndex = 1;
var counter = 1;
var temp = 0;
$( "#data_loader" ).show();
databaseRef.once('value', function(snapshot) {
  snapshot.forEach(function(childSnapshot) {
	var childKey = childSnapshot.key;
	var childData = childSnapshot.val();
	
	//var row = tblUsers.insertRow(rowIndex);

	var row   = tableRef.insertRow(tableRef.rows.length);
	/*if(temp==0){
		//row.removeAttribute("class");
		row.className = "odd";
		temp=1;
	}else{
		//row.removeAttribute("class");
		row.className = "even";
		temp=0;
	}*/
	
	var cellId = row.insertCell(0);
	var cellName = row.insertCell(1);
	//var cellEmail = row.insertCell(2);
	var cellEdit = row.insertCell(2);
	
	var aTag = document.createElement('a');
	aTag.setAttribute('href',"add_user.php?key=" + childKey);
	aTag.setAttribute('class',"btn mini blue");
	aTag.innerHTML = "Edit";
	
	var aTag1 = document.createElement('a');
	aTag1.setAttribute('href',"javascript:void(0)");
	aTag1.setAttribute('class',"btn mini red");
	aTag1.setAttribute('style',"margin-left:5px;");
	aTag1.setAttribute('onclick','delete_user("'+childKey+'")');
	aTag1.innerHTML = " Delete";
                   
   var aTag2 = document.createElement('a');
   aTag2.setAttribute('href',"userdetail.php?key=" + childKey);
   aTag2.setAttribute('class',"btn mini green");
   aTag2.setAttribute('style',"margin-left:5px;");
   aTag2.innerHTML = "User Detail";
					
	cellId.appendChild(document.createTextNode(counter));
	cellName.appendChild(document.createTextNode(childData.firstname + " " +childData.lastname));
	//cellEmail.appendChild(document.createTextNode(childData.email));
	cellEdit.appendChild(aTag);
    cellEdit.appendChild(aTag1);
    cellEdit.appendChild(aTag2);
	
	rowIndex = rowIndex + 1;
	counter = counter + 1;
  });
   $( "#data_loader" ).hide();
});

function delete_user(key){
	//alert(key);
	
	var result = confirm("Are you sure you want to delete this user?");
	if (result) {
		firebase.database().ref().child('/users/' + key).remove();
		window.location = "manage_user.php?msg=3";
	}else{
	}
	
}

</script>
