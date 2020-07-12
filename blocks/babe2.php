<?php
function b_babe_show(){
global $DB, $xoopsConfig,  $xoopsUser;
$block = array();
$block['title'] = "&nbsp; Babe II";
$myts = new MyTextSanitizer();
$block['content'] .= '<a width="120" height="160" href='.XOOPS_URL.'/modules/babe2/index.php >';
$block['content'] .= '<center><img src="http://www.jokeaday.com/babe.jpg" width="120" height="160"border="0" /></center></a>';
return $block;
}
?>