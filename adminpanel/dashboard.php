<?php

include("connect.php"); 
	$string="1";
	$pagetitle='Dashboard';
	
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <title>Dashboard </title>
    
    <!--[if lt IE 9]> <script src="js/html5shiv.js" type="text/javascript"></script> <![endif]-->
    <script src="js/modernizr.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/jquery-ui-1.10.3.custom.css" />
    <!--[if lt IE 9]><link rel="stylesheet" type="text/css" href="/assets/plugins/jquery-ui/jquery.ui.1.10.2.ie.css"/><![endif]-->
   
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel='stylesheet' type='text/css' href="css/open-sans.css">
    
    <link rel='stylesheet' type='text/css' href="css/fullcalendar.css">
    <link rel='stylesheet' type='text/css' href="css/morris.css">
    
    <link href="css/main.css" rel="stylesheet" type="text/css"/>
    <link href="css/responsive.css" rel="stylesheet" type="text/css"/>
    <link href="css/style_default.css" rel="stylesheet" type="text/css"/>
    <link href="css/smart_wizard.css" rel="stylesheet" type="text/css"/>
    
<!--   <link rel="icon" type="image/png" href="images/favicon.ico">-->
    <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/apple-touch-icon-144x144-precomposed.png">
	
	<script src="https://www.gstatic.com/firebasejs/4.5.0/firebase.js"></script>
	<script type="text/javascript" src="js/firebase_app.js"></script>
</head>

<body style="font-family:Arial, Helvetica, sans-serif;">

    <? include("top.php"); ?>

    <div id="container">    <!-- Start : container -->

        <? include("left.php"); ?>

        <div id="content">  <!-- Start : Inner Page Content -->

            <div class="container"> <!-- Start : Inner Page container -->

                <div class="crumbs">    <!-- Start : Breadcrumbs -->
                    <ul id="breadcrumbs" class="breadcrumb">
                        <li class="current">
                            <i class="fa fa-home"></i>Dashboard
                        </li>
                    </ul>

                </div>  <!-- End : Breadcrumbs -->

                <div class="page-header">   <!-- Start : Page Header -->
                    <div class="page-title">
                        <h3>Dashboard</h3>
                       
                    </div>
                </div>  <!-- End : Page Header -->
                
                <div class="row">
                <?php if($_SESSION['ADMIN_TYPE']=='Supper'){ ?>
                    <div class="col-md-12">  <!-- For Dashboard Staters -->
                        
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat blue">
                                <div class="visual">
                                    <i class="fa fa-users" aria-hidden="true"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                    <?php 
                                    	$user_query = mysql_query("select * from `users` where block !='1' AND deactivate_account !='1'");
                                    	$tot_usre = mysql_num_rows($user_query);
                                    	if($tot_usre>0){
											echo $tot_usre;
										}else{
											echo '0';
										}
                                    	
                                    ?>
                                       
                                    </div>
                                    <div class="desc">									
                                        Total active user(s)
                                    </div>
                                </div>
                                <a class="more" href="manage_users.php?pno=1">
                                    View All
                                </a>						
                            </div>
                        </div>
                        
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat green">
                                <div class="visual">
                                    <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                    <?php 
                                    	$subadmin_query = mysql_query("select * from `subadmins` where block !='1'");
                                    	$tot_subadmin = mysql_num_rows($subadmin_query);
                                    	if($tot_subadmin>0){
											echo $tot_subadmin;
										}else{
											echo '0';
										}
                                    	
                                    ?>
                                    </div>
                                    <div class="desc">									
                                        Total sub-admin(s)
                                    </div>
                                </div>
                                <a class="more" href="manage_subadmins.php?pno=1">
                                    View All 
                                </a>						
                            </div>
                        </div>
                        
                     
                        
                        
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat purple">
                                <div class="visual">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                    <?php 
                                    	$message_query = mysql_query("select * from `messages`");
                                    	$tot_message = mysql_num_rows($message_query);
                                    	if($tot_message>0){
											echo $tot_message;
										}else{
											echo '0';
										}
                                    	
                                    ?>
                                    </div>
                                    <div class="desc">									
                                        Total Message(s)
                                    </div>
                                </div>
                                <a class="more" href="manage_user_messages.php?pno=1">
                                    View All 
                                </a>						
                            </div>
                        </div>
                    </div>
                    <?php }else{ ?>
                   

					  <div class="col-md-12">  <!-- For Dashboard Staters -->
                        
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="dashboard-stat green">
                                <div class="visual">
                                    <i class="fa fa-users" aria-hidden="true"></i>
                                </div>
                                <div class="details">
                                    <div class="number" id="total_brokers">
                                       &nbsp;
                                    </div>
                                    <div class="desc">									
                                       Total Users
                                    </div>
                                </div>
                                <a class="more" href="manage_user.php">
                                    View All
                                </a>						
                            </div>
                        </div>
                        
                      </div>
                      	
                      <!-- END : Dashboard Staters -->
                    <?php } ?>
                    <?php /* ?>
                   <div class="col-md-3 col-sm-6">
                        <div class="portlet dashboardPort">
                            <div class="portlet-title">
                                <div class="caption">User Activities</div>
                            </div>
                            <div class="portlet-body">
                                <div id="sparklinePie"></div>
                                <div id="sparklineLine"></div>
                            </div>
                        </div>
                    </div>  <!-- END : Sparkline Graph -->
                    
                    <div class="col-md-3 col-sm-6">
                        <div class="portlet dashboardPort">
                            <div class="portlet-title">
                                <div class="caption">Friends</div>
                                <div class="tools">
                                    <a href="javascript:;" class="reload"></a>
                                </div>
                            </div>
                            <div class="portlet-body scroller" >
                                <ul class="list-unstyled list-friends">
                                    
                                    <li class="online" title="Online">
                                        <img class="dashFriends" src="images/avatar-2.jpg">
                                        <a href="#">Veronica Lake</a>
                                    </li>
                                    
                                    <li class="dnd" title="Do Not Disturb">
                                        <img class="dashFriends" src="images/avatar-3.jpg">
                                        <a href="#">Johnny Depp </a>
                                    </li>
                                    
                                    <li class="offline" title="Offline">
                                        <img class="dashFriends" src="images/avatar-11.jpg">
                                        <a href="#">Sophie Marceau </a>
                                    </li>
                                    
                                    <li class="dnd" title="Do Not Disturb">
                                        <img class="dashFriends" src="images/avatar-6.jpg">
                                        <a href="#">Brad Pitt </a>
                                    </li>
                                    
                                    <li class="online" title="Online">
                                        <img class="dashFriends" src="images/avatar-7.jpg">
                                        <a href="#">Leonardo DiCaprio </a>
                                    </li>
                                    
                                    <li class="offline" title="Offline">
                                        <img class="dashFriends" src="images/avatar-8.jpg">
                                        <a href="#">Madeleine Stowe </a>
                                    </li>
                                    
                                    <li class="away" title="Away">
                                        <img class="dashFriends" src="images/avatar-9.jpg">
                                        <a href="#">Tom Cruise </a>
                                    </li>
                                    
                                    <li class="online" title="Online">
                                        <img class="dashFriends" src="images/avatar-10.jpg">
                                        <a href="#">Al Pacino </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>  <!-- END : Friends Staters -->
                </div>
                
                <div class="row">
                    
                    <div class="col-md-8">
                        <div class="portlet box green">
                            <div class="portlet-title">
                                <div class="caption"><i class="fa fa-bar-chart-o"></i> Sales Report</div>
                                <div class="tools">
                                    <a href="javascript:;" class="collapse"></a>
                                    <a href="javascript:;" class="reload"></a>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="chart" id="areaChart"></div>
                            </div>
                        </div>
                    </div>  <!-- END : Area Chart -->
                    
                    <div class="col-md-4">
                        <div class="portlet dashboardPort">
                            <div class="portlet-title">
                                <div class="caption">Weekly report</div>
                                
                                <div class="tools">
                                    <a href="javascript:;" class="collapse"></a>
                                    <a href="javascript:;" class="reload"></a>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="chart" id="donutChart"></div>
                            </div>
                        </div>
                    </div>  <!-- END : Dashboard Morris Chart -->
                </div>
                
                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="portlet box blue">
                            <div class="portlet-title">
                                <div class="caption"><i class="fa fa-calendar"></i>Calendar</div>
                                <div class="tools">
                                    <a href="javascript:;" class="collapse"></a>
                                    <a href="javascript:;" class="reload"></a>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div>  <!-- END : Calendar -->
                    
                    <div class="col-md-6">
                        <div class="portlet dashboardPort">
                            <div class="portlet-title">
                                <div class="caption"><i class="fa fa-cloud"></i>Server Load</div>
                                <div class="tools">
                                    <a href="javascript:;" class="collapse"></a>
                                    <a href="javascript:;" class="reload"></a>
                                    <a href="javascript:;" class="remove"></a>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div id="load_statistics" style="height:108px;"></div>
                            </div>
                        </div>
                    </div>  <!-- END : Server Load -->
                    
                    <div class="col-md-6">
                        <div class="portlet dashboardPort">
                            <div class="portlet-title">
                                <div class="caption"><i class="fs-bubbles-2"></i> Chats</div>
                                <div class="tools">
                                    <a href="javascript:;" class="collapse"></a>
                                    <a href="javascript:;" class="reload"></a>
                                    <a href="javascript:;" class="remove"></a>
                                </div>
                            </div>
                            <div class="portlet-body" id="chats">
                                <div class="scroller" data-height="160px" data-always-visible="1" data-rail-visible1="1">
                                    <ul class="chats">
                                        
                                        <li class="in">
                                            <img class="avatar" alt="" src="images/avatar-10.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="#" class="name">Al Pacino</a>
                                                <span class="datetime">at Jul 25, 2012 11:09</span>
                                                <span class="body">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                </span>
                                            </div>
                                        </li>
                                        
                                        <li class="out">
                                            <img class="avatar" alt="" src="images/avatar-1.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="#" class="name">Prakasam Mathaiyan</a>
                                                <span class="datetime">at Jul 25, 2012 11:09</span>
                                                <span class="body">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                </span>
                                            </div>
                                        </li>
                                        
                                        <li class="in">
                                            <img class="avatar" alt="" src="images/avatar-10.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="#" class="name">Al Pacino</a>
                                                <span class="datetime">at Jul 25, 2012 11:09</span>
                                                <span class="body">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                </span>
                                            </div>
                                        </li>
                                        
                                        <li class="out">
                                            <img class="avatar" alt="" src="images/avatar-1.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="#" class="name">Prakasam Mathaiyan</a>
                                                <span class="datetime">at Jul 25, 2012 11:09</span>
                                                <span class="body">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                </span>
                                            </div>
                                        </li>
                                        
                                        <li class="in">
                                            <img class="avatar" alt="" src="images/avatar-10.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="#" class="name">Al Pacino</a>
                                                <span class="datetime">at Jul 25, 2012 11:09</span>
                                                <span class="body">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                </span>
                                            </div>
                                        </li>
                                        
                                        <li class="out">
                                            <img class="avatar" alt="" src="images/avatar-1.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="#" class="name">Prakasam Mathaiyan</a>
                                                <span class="datetime">at Jul 25, 2012 11:09</span>
                                                <span class="body">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                </span>
                                            </div>
                                        </li>
                                        
                                        <li class="in">
                                            <img class="avatar" alt="" src="images/avatar-10.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="#" class="name">Al Pacino</a>
                                                <span class="datetime">at Jul 25, 2012 11:09</span>
                                                <span class="body">
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
                                                    sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                </span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="chat-form">
                                    <div class="input-cont">   
                                        <input class="m-wrap" type="text" placeholder="Type a message here..." />
                                    </div>
                                    <div class="btn-cont"> 
                                        <span class="arrow"></span>
                                        <a href="javascript:;" class="btn blue"><i class="fs-checkmark-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  <!-- END : Chat -->
                </div>
<?php */ ?>

            </div>  <!-- End : Inner Page container -->
            <a href="javascript:void(0);" class="scrollup">Scroll</a>
        </div>  <!-- End : Inner Page Content -->

    </div>  
    <p>
      <!-- End : container -->
      
      
      <script type="text/javascript" src="js/jquery.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui-1.10.3.custom.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/jquery.slimscroll.min.js"></script>
      <script type="text/javascript" src="js/jquery.blockUI.js"></script>
      <script type="text/javascript" src="js/jquery.event.move.js"></script>
      <script type="text/javascript" src="js/lodash.compat.js"></script>
      <script type="text/javascript" src="js/respond.min.js"></script>
      <script type="text/javascript" src="js/excanvas.js"></script>
    </p>
    <p>&nbsp; </p>
    <p>&nbsp;</p>
    <p>&nbsp; </p>
<p>&nbsp;</p>
<p>
  <script type="text/javascript" src="js/breakpoints.js"></script>
  <script type="text/javascript" src="js/touch-punch.min.js"></script>
  
  <script type="text/javascript" src="js/jquery.flot.min.js"></script>
  <script type="text/javascript" src="js/jquery.flot.tooltip.js"></script>
  <script type="text/javascript" src="js/jquery.flot.pie.min.js"></script>
  <script type="text/javascript" src="js/jquery.flot.time.min.js"></script>
  <script type="text/javascript" src="js/jquery.sparkline.js"></script>
  <script type="text/javascript" src="js/fullcalendar.min.js"></script>
  
  
  <script type="text/javascript" src="js/app.js"></script>
  <script type="text/javascript" src="js/plugins.js"></script>
</p>
    <script>
        jQuery(document).ready(function() {
            App.init();
            Dashboard.init();
        });
    </script>
</body>
</html>
<script>

var databaseRef = firebase.database().ref('users/');

var counter = 0;
//$( "#data_loader" ).show();

databaseRef.once('value', function(snapshot) {
	snapshot.forEach(function(childSnapshot) {
	
	counter = counter + 1;
  });
  //alert(counter);
  document.getElementById('total_brokers').innerHTML = counter;
 // $( "#data_loader" ).hide();
  
});

</script>