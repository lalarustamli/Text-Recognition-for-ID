<?php
ini_set('display_errors','1');
header('Content-type: text/html; charset=utf-8');

$frontfile = $_POST['front'];


switch($_POST['sened']){
	case 'shexsiyyet':
$backfile =  $_POST['back'];
		include('getdata.php');
	break;
	case 'yenipass':
$backfile =  $_POST['back'];
		include('getdata_new.php');
	break;
	case 'beynel':
		include('getdata_pass.php');
	break;
}

include('insert_data.php');
?>
