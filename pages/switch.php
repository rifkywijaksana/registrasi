<?php
$link = $_GET['id'];
 
 switch($link) 
 {
 	case 1 :
	include "kehadiran.php";
	break;
	case 2 :
	include "lihatkehadiran.php";
	break;
	case 3 :
	include "data_anggota.php";
	break;
	case 4 :
	include "kehadiran2.php";
	break;
	case 5 :
	include "proseslogin.php";
	break;
	case 6 :
	include "kehadiran3.php";
	break;
	default :
	include "kehadiran.php";
	break;

}
?>