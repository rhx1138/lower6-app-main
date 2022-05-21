<div id="sidebar" class="sidebar-fixed">    <!-- Start : Side bar -->

            <div id="sidebar-content">  <!-- Start : Side bar content -->
                
                <ul id="nav">   <!-- Start : Side bar Menu Items -->
                    
                    <li <?php if($pagetitle=='Dashboard'){ ?> class="current open" <?php } ?>>
                        <a href="dashboard.php">
                            <i class="fa fa-dashboard"></i> Dashboard <span class="selected"></span>
                        </a>
                    </li>

							 
							 <li <?php if('User'==$pagename){ ?> class="current open" <?php } ?>>
                               <a href="manage_user.php">
                                   <i class="fa fa-desktop"></i>User
                                </a>
                               
                             </li>
                    <li <?php if($pagename=='Manage Static page') { ?> class="current open" <?php } ?>>
                        <a href="javascript:void(0);">
                            <i class="fa fa-desktop"></i>Manage Static pages
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="managestaticpage.php?pid=1">
                                    <i class="fa fa-desktop"></i>General Instructions
                                </a>
                            </li>
                            <li>
                                <a href="managestaticpage.php?pid=2">
                                    <i class="fa fa-desktop"></i>Non-diabetic Instructions
                                </a>
                            </li>
                            <li>
                                <a href="managestaticpage.php?pid=3">
                                    <i class="fa fa-desktop"></i>Type 1 or type 2 diabetic Instructions
                                </a>
                            </li>
                        </ul>
                    </li>
							 
							
                </ul>   <!-- End : Side bar Menu Items -->
                
            </div>  <!-- End : Side bar content -->

        </div>  <!-- End : Side bar -->
