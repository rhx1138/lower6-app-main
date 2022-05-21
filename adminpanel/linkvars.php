<? 
/*$section_arr1=array (

array ("About Us","staticpage.php?id=1" ,0,"", "category.png"),
array ("Why Us","staticpage.php?id=2" ,0,"", "category.png"),
array ("How It Works","staticpage.php?id=3" ,0,"", "category.png"),
array ("FAQs","staticpage.php?id=4" ,0,"", "category.png"),
array ("Terms & Condition","staticpage.php?id=5" ,0,"", "category.png"),
array ("Privacy Policy","staticpage.php?id=6" ,0,"", "category.png"),
array ("Contact Us","staticpage.php?id=8" ,0,"", "category.png"),
array ("Social Links","staticpage.php?id=7" ,0,"", "category.png"),

);

$page_arr2=array(
array("Manage Plan/Packages","manage_plan_packages.php",0),
array("Add Plan/Packages","add_plan_package.php?mode=add",0),);


$section_arr2=array (

array ("Manage Plan/Packages","manage_plan_packages.php",count($page_arr2),$page_arr2,"category.png"),
//array ("Add Plan/Packages","add_plan_package.php?mode=add",count($page_arr2),$page_arr2,"category.png"),

);
*/
$page_arr3=array(
array("Manage Users","manage_user.php",0),
array("Add Users","add_user.php?mode=add",0),);

/*
$section_arr3=array (

array ("Manage Users","manage_users.php?pno=1",count($page_arr3),$page_arr3,"category.png"),
array ("Add Users","add_user.php?mode=add",count($page_arr3),$page_arr3,"category.png"),

);

$page_arr4=array(
array("Manage Subadmin","manage_subadmins.php",0),
array("Add Subadmin","add_subadmin.php?mode=add",0),);


$section_arr4=array (

array ("Manage Subadmin","manage_subadmins.php?pno=1",count($page_arr4),$page_arr4,"category.png"),
array ("Add Subadmin","add_subadmin.php?mode=add",count($page_arr4),$page_arr4,"category.png"),

);

$page_arr5=array(
array("Manage Apply Job","manage_apply_job.php",0),
array("Add Apply Job","add_apply_job.php?mode=add",0),);


$section_arr5=array (

array ("Manage Apply Job","manage_apply_job.php?pno=1",count($page_arr5),$page_arr5,"category.png"),
array ("Add Apply Job","add_apply_job.php?mode=add",count($page_arr5),$page_arr5,"category.png"),

);

$page_arr6=array(
array("Manage Settings","manage_settings.php",0),
array("Add Settings","add_setting.php?mode=add",0),);


$section_arr6=array (

array ("Manage Settings","manage_settings.php",count($page_arr6),$page_arr6,"category.png"),

);

$page_arr7=array(
array("Manage User Messages","manage_user_messages.php",0),
array("Add User Message","add_user_message.php?mode=add",0),);

$section_arr7=array (

array ("Manage User Messages","manage_user_messages.php?pno=1",count($page_arr7),$page_arr7,"category.png"),

);

$page_arr8=array(
array("View Resume Requests","manage_user_without_resume.php",0),);

$section_arr8=array (

array ("View Resume Requests","manage_user_without_resume.php?pno=1",count($page_arr8),$page_arr8,"category.png"),

);

$page_arr9=array(
array("View Comments","manage_comments.php",0),);

$section_arr9=array (

array ("View Comments","manage_comments.php?pno=1",count($page_arr9),$page_arr9,"category.png"),

);

$slide_arr=array(
array("Manage Slides","manage_slides.php",0),
array("Add Slide","add_slide.php?mode=add",0),);

$sec_slide_arr=array(
array ("Manage Slides","manage_slides.php?pno=1",count($slide_arr),$slide_arr,"category.png"),
array ("Add Slide","add_slide.php?mode=add",count($slide_arr),$slide_arr,"category.png"),
);

$product_arr=array(
array("Manage Slides","manage_slides.php",0),
array("Add Slide","add_slide.php?mode=add",0),);

$sec_product_arr=array(
array ("Manage Products","manage_products.php?pno=1",count($product_arr),$product_arr,"category.png"),
array ("Add Product","add_product.php?mode=add",count($product_arr),$product_arr,"category.png"),
);


$blog_arr=array(
array("Manage Blog Categories","manage_blog_categories.php",0),
array("Manage Blogs","manage_blogs.php",0),
array("Add Blog","add_blog.php?mode=add",0),);

$sec_blog_arr_main=array(
array ("Manage Blog Categories","manage_blog_categories.php?pno=1",count($blog_arr),$blog_arr,"category.png"),
array ("Manage Blogs","manage_blogs.php?pno=1",count($blog_arr),$blog_arr,"category.png"),
array ("Add Blog","add_blog.php?mode=add",count($blog_arr),$blog_arr,"category.png"),
);
$sec_blog_arr_blogs=array(
array ("Manage Blogs","manage_blogs.php?pno=1",count($blog_arr),$blog_arr,"category.png"),
array ("Add Blog","add_blog.php?mode=add",count($blog_arr),$blog_arr,"category.png"),
);
$sec_blog_arr_cat=array(
array ("Manage Blog Categories","manage_blog_categories.php?pno=1",count($blog_arr),$blog_arr,"category.png"),
);
*/

	
	$HeadLinksArray = array (
		
	array("Categories",count($section_arr1),$section_arr1),
	
	array("Products",count($sec_product_arr),$sec_product_arr),
	
	
	
	);




//echo count($HeadLinksArray);die;
//print_r($HeadLinksArray); die;

 ?>
<script language="javascript" type="text/javascript">	
	
	var NoOffFirstLineMenus=<? echo count($HeadLinksArray).";"; ?>	//Total No. Of Main Sections Specify Here Too
	var LowBgColor='#FFFFFF';		
	var LowSubBgColor='#FFFFFF';		
	var HighBgColor='#7B9045';		
	var HighSubBgColor='#666666';	
	var FontLowColor='#333333';		
	var FontSubLowColor='#333333';	
	var FontHighColor='White';		
	var FontSubHighColor='White';	
	var BorderColor='#333333';		
	var BorderSubColor='#333333';	
	var BorderWidth=1;				
	var BorderBtwnElmnts=1;			
	var FontFamily="Verdana,Arial"	
	var FontSize=9;					
	var FontBold=1;					
	var FontItalic=0;				
	var MenuTextCentered='center';	
	var MenuCentered='center';		
	var MenuVerticalCentered='top';	
	var ChildOverlap=.0;			
	var ChildVerticalOverlap=.0;	
	var StartTop=94;				
	var StartLeft=0;				
	var VerCorrect=0;				
	var HorCorrect=0;				
	var LeftPaddng=3;				
	var TopPaddng=3;				
	var FirstLineHorizontal=1;		
	var MenuFramesVertical=0;		
	var DissapearDelay=75;			
	var TakeOverBgColor=0;			
	var FirstLineFrame='navig';		
	var SecLineFrame='navig';		
	var DocTargetFrame='navig';		
	var TargetLoc='';				
	var HideTop=0;					
	var MenuWrap=0;					
	var RightToLeft=0;				
	var UnfoldsOnClick=0;			
	var WebMasterCheck=0;			
	var ShowArrow=0;				
	var KeepHilite=1;				
	var Arrws=['../images/tri.gif',3,10,'../images/tridown.gif',6,4,'../images/trileft.gif',5,10];	// Arrow source, width and height
	
function BeforeStart(){return}
function AfterBuild(){return}
function BeforeFirstOpen(){return}
function AfterCloseAll(){return}

<?
	for($LinkCount=1;$LinkCount<=count($HeadLinksArray);$LinkCount++)
	{
		////////// FOR MAIN MENU (IE) 1ST LEVEL OF MENU (HEADING)/////////////////////
		/*echo 'Menu'.$LinkCount.' = new Array("'.$HeadLinksArray[$LinkCount-1][0].'","'.$HeadLinksArray[$LinkCount-1][5].'","",'.$HeadLinksArray[$LinkCount-1][1].','.$HeadLinksArray[$LinkCount-1][2].','.$HeadLinksArray[$LinkCount-1][3].');';*/
			
			$TempChildAry = $HeadLinksArray[$LinkCount-1][4];
			if(is_array($TempChildAry))
			{
				for($LinkCount2=1;$LinkCount2<=count($TempChildAry);$LinkCount2++)
				{
					////////// FOR SUB OF THE MENU (IE) 2ND LEVEL OF MENU/////////////////////
					/*echo "\n Menu".$LinkCount."_".$LinkCount2." = new Array('".$TempChildAry[$LinkCount2-1][0]."','".$TempChildAry[$LinkCount2-1][1]."','".$TempChildAry[$LinkCount2-1][2]."',".$TempChildAry[$LinkCount2-1][3].",".$TempChildAry[$LinkCount2-1][4].",".$TempChildAry[$LinkCount2-1][5].");";*/
					
							
							$TempChildAry2 = $TempChildAry[$LinkCount2-1][6];
							
							if(is_array($TempChildAry2))
							{
								////////// FOR SUB - SUB OF THE MENU (IE) 3RD LEVEL OF MENU///////////////////// 							
								for($LinkCount3=1;$LinkCount3<=count($TempChildAry2);$LinkCount3++)
								{
										/*echo "\n Menu".$LinkCount."_".$LinkCount2."_".$LinkCount3." = new Array('".$TempChildAry2[$LinkCount3-1][0]."','".$TempChildAry2[$LinkCount3-1][1]."','".$TempChildAry2[$LinkCount3-1][2]."',".$TempChildAry2[$LinkCount3-1][3].",".$TempChildAry2[$LinkCount3-1][4].",".$TempChildAry2[$LinkCount3-1][5].");";*/
										
								}
							}
					
				}
			}
		
	}
?>
</script>