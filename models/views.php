<?php 
Class View{
	public static function getView($myFile="", $data=array()){
		include $myFile;
	}
}
?>