<?php
###########################################################################
#                                                                         #
# ==--=========================================                           #
#  BABE A DAY II                                                          #
# ==--=========================================                           #
# A module For E-XooPs                                                    #
# by Farsus www.farsus.dk                                                 #
#                                                                         #
########################################################################### 
include("../../mainfile.php");
include_once($xoopsConfig['root_path']."class/xoopsmodule.php");
include_once($xoopsConfig['root_path']."class/xoopsgroup.php");
$ModName = "Babe2";
	global $xoopsDB, $xoopsConfig;
	if ( $xoopsConfig['startpage'] == "babe2" ) {
		$xoopsOption['show_rblock'] =1;
		include(XOOPS_ROOT_PATH."/header.php");
		make_cblock();
		echo "<br />";
	} else {
		$xoopsOption['show_rblock'] =0;
		include(XOOPS_ROOT_PATH."/header.php");
	}

 $xoopsModule = XoopsModule::getByDirname("babe2");
 if ( !$xoopsModule ) {
	redirect_header($xoopsConfig['xoops_url']."/",2,_MODULENOEXIST);
	exit();
 }
if(file_exists($xoopsConfig['root_path']."modules/contact/language/".$xoopsConfig['language']."/main.php")){
	include($xoopsConfig['root_path']."modules/contact/language/".$xoopsConfig['language']."/main.php");
}else{
	include($xoopsConfig['root_path']."modules/contact/language/english/index.php");
	}
    OpenTable();
echo "
<div align='center'>
<table><td><img src='http://www.jokeaday.com/babe.jpg' border='2' vspace=2></td></table>";
echo "</a><br><a href=\"http://www.farsus.dk\"> Babe II By Farsus </></div>";
    CloseTable();
include("../../footer.php");
?>
