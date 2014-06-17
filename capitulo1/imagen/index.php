<?php
$screen_w=0;
$screen_h=0;
$img=$_SERVER['QUERY_STRING'];
if(file_exists($img)) {
	if(isset($_COOKIE['dimension_pantalla'])) {
		$screen=explode('x',$_COOKIE['dimension_pantalla']);
		if(count($screen)==2) {
			$screen_w=intval($screen[0]);
			$screen_h=intval($screen[1]);
		}
	}
	
	if($screen_w>0) {
		$theExt=pathinfo($img,PATHINFO_EXTENSION);
		if($screen_w>=1024) {
			$output=substr_replace($img,'-med',-strlen($theExt)-1,0);
		} else if($screen_w<=800) {
			$output=substr_replace($img,'-low',-strlen($theExt)-1,0);	
		}
		if(isset($output)&&file_exists($output)) {
			$img=$output;
		}
	}
	readfile($img);
}
?>