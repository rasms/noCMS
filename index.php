<?php

//get querys
$f = '';
$q = '';
if(!empty($_GET['f'])){
	$f = $_GET['f'];
}
if(!empty($_GET['q'])){
	$q = $_GET['q'];
}
if(empty($f) && empty($q)){
	$q = 'home';
}

//include header and nav
$root = $_SERVER['DOCUMENT_ROOT'];
include_once($root.'/inc/metas.php');
include_once($root.'/inc/head.php');
include_once($root.'/inc/nav.php');

//include content
if (!empty($f) && !empty($q) && (file_exists($root.'/content/'.$f.'/'.$q.'.html'))) {
	include_once($root.'/content/'.$f.'/'.$q.'.html');
}
elseif (empty($f) && !empty($q) && (file_exists($root.'/content/'.$q.'.html'))) {
	include_once($root.'/content/'.$q.'.html');
}
elseif (empty($f) && empty($q)) {
	include_once($root.'/content/home.html');
}
else {
	include_once($root.'/content/404.html');
}

//include footer and scripts
include_once($root.'/inc/footer.php');
include_once($root.'/inc/scripts.php');

?>
