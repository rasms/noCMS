<?php
//get querys
if(!empty($_GET['f'])){
	$f = $_GET['f'];
}
else {
	$f = '';
}
if(!empty($_GET['q'])){
	$q = $_GET['q'];
}
else {
	$q = 'home';
}

//include header and nav
$root = $_SERVER['DOCUMENT_ROOT'];
include_once($root.'/dist/inc/head.php');
include_once($root.'/dist/inc/nav.php');

//include content
if (!empty($f) && !empty($q)) {
	if (file_exists($root.'/content/'.$f.'/'.$q.'.html')) {
		include_once($root.'/content/'.$f.'/'.$q.'.html');
	}
	else {
		include_once($root.'/content/404.html');
	}
}
elseif (empty($f) && !empty($q) && ($q != 'home')) {
	if (file_exists($root.'/content/'.$q.'.html')) {
		include_once($root.'/content/'.$q.'.html');
	}
	else {
		include_once($root.'/content/404.html');
	}
}
else {
	include_once($root.'/content/home.html');
}


//include footer and scripts
include_once($root.'/dist/inc/footer.php');
include_once($root.'/dist/inc/scripts.php');
?>
