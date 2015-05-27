<?php
//$title = 'Index';
$q = $_GET['q'];
$root = $_SERVER['DOCUMENT_ROOT'];
include_once($root.'/dist/inc/head.php');
include_once($root.'/dist/inc/nav.php');


if (!empty($q)){
	include_once($root.'/content/'.$q.'.html');
} 
else {
	include_once($root.'/content/index.html');
}

include_once($root.'/dist/inc/footer.php');
include_once($root.'/dist/inc/script.php');
?>


