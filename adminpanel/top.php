 <link rel="stylesheet" type="text/css" href="css/font-awesome.css"/>
 <link rel="icon" type="image/png" href="../images/favicon.png">

<? //include("linkvars.php"); ?>
<header class="header navbar navbar-fixed-top" role="banner">  <!-- Start: Header and Nav Bar -->

        <div class="container"> <!-- Start: Nav Bar Container -->

            <ul class="nav navbar-nav"> <!-- Start: Mobile Menu toggle -->
                <li class="nav-toggle">
                    <a href="javascript:void(0);" title="">
                        <i class="fa fa-bars"></i>
                    </a>
                </li>
            </ul>   <!-- End Mobile Menu toggle -->

            <a class="navbar-brand" href="dashboard.php">  <!-- Start: Logo -->
               <!-- <img src="images/logo.png" alt="logo"/> -->
                <strong>Welcome</strong>  admin
            </a>    <!-- End Logo -->

            <a href="#" class="toggle-sidebar bs-tooltip" data-placement="bottom" data-original-title="Toggle navigation">
                <i class="fa fa-bars"></i>
            </a>    <!-- End : Desktop Main Menu Toggler -->
            <?php /* ?>
          <ul class="nav navbar-nav navbar-left hidden-xs hidden-sm"> <!-- Start : Top Left Drop down -->
                <li><a href="dashboard.php">Dashboard</a></li>
                
                <? 
                     for($i=0;$i<count($HeadLinksArray);$i++)
                            {
                                ?>
                               <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                         <? echo $HeadLinksArray[$i][0]; ?> <i class="fa fa-angle-down"></i>
                                     </a>
                               
                                    <ul class="dropdown-menu">
                                         <?

                                                 $LeftLinkAry1 = $HeadLinksArray[$i][2];
                                                 for($LeftLinkCount=0;$LeftLinkCount<count($LeftLinkAry1);$LeftLinkCount++)
                                                 {
                                                         $destop_count++;
                                                 ?>


                                                 <li>
                                                      <a href="<? echo $LeftLinkAry1[$LeftLinkCount][1] ?>">
                                                               <i class="fa fa-tasks"></i><? echo $LeftLinkAry1[$LeftLinkCount][0] ?>
                                                               </a>
                                                 </li>  

                                                 <?          
                                                 }
                                            ?>
                                    </ul>
                             </li> 
                                       <?
                            }
                    ?>
                
            </ul> <?php */ ?>  <!-- End : Top Left Drop down -->

            <ul class="nav navbar-nav navbar-right">    <!-- Start : Top Right Drop down Menu -->

                <li class="dropdown user">  <!-- Start : User Drop Down -->
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                       <!-- <img class="userImg" src="images/avatar-1.png"> -->
                       
						<!--<input style="margin-right:7px;" type="button" onclick="logout()" id="" value="Logout" class="btn green pull-right" /> -->
                        <span class="username">admin</span>
                        <i class="fa fa-angle-down small"></i>
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a href="changepass.php">
                                <i class="fa fa-user" aria-hidden="true"></i>
 My Profile
                            </a>
                        </li>

                        <li class="divider"></li>

                        <li>
                            <a href="logout.php" onclick="logout()">
                                <i class="fa fa-power-off"></i> Log Out
                            </a>
                        </li>
                    </ul>
                </li>   <!-- End : User Drop Down -->

            </ul>   <!-- End : Top Right Drop down Menu -->

        </div>  <!-- End Nav Bar Container -->

    </header>   <!-- End Header and Nav Bar -->