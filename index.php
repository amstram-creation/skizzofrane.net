<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" 
	"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8" />
<title>skizzOfrane.net - Act ur life</title>
<meta http-equiv="content-language" content="fr" />
<meta name="creator" content="skizzOfrane" />
<meta name="robots" content="index" />
<meta name="distribution" content="global" />
<meta name="revisit-after" content="30 days" />
<meta name="identifier-url" content="http://www.skizzofrane.net" />

<style type="text/css">
body{background:black;}
div{position:absolute; top:50%; left:50%; width:620px; height:468px; margin:-234px 0px 0px -310px;}
a{float:left; display:block; width:200px; height:150px; margin:2px; border:1px solid gray;}
span{display:none;}
#sof{border:1px solid black; background:url('sof.gif');}
<?php
$menu = array_fill(0,4, 'skizz') + array_fill(4,4,'frane');
srand((float)microtime() * 1000000);
shuffle($menu);
menu_lightblue_style($menu);
?>
</style>

</head>
<body>
<div><?php menu_lightblue_body($menu); ?>

</div>
</body>
</html>

<?php
function menu_lightblue_body($menu){
	foreach ($menu as $i => $name) {
		if ($i==4) 
			echo '<a href="mailto:skizzofrane.net@liebrex.net" id="sof"><span>act ur life</span></a>';
		echo "\n".'<a id="sof'.($i+1).'" href="./'.$name.'"><span>'.$name.'</span></a>';
	}
}
function menu_lightblue_style($menu){
	$keys = array_keys($menu);
	srand((float)microtime() * 1000000);
	shuffle($keys);
	foreach ($menu as $k => $name) {
		$i = $k+1;
		echo "#sof$i{background:url('sof".($keys[$k]+1).".jpg');}\n";
		$a[$name][] = "#sof$i:hover";
	}
	echo implode(',',$a['skizz'])."{background: url('skizz.jpg');}\n".implode(',',$a['frane'])."{background: url('frane.jpg');}\n";
}
?>