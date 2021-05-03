<?php

$theme_database_register = "basic_blue";

if($theme_database_register == "basic"){
	$theme_color_font = "#999";
	$theme_color_border = "#999";
	$theme_color_background = "#999";
}elseif($theme_database_register == "basic_blue"){
	$theme_color_font = "#3385ff";
	$theme_color_border = "#3385ff";
	$theme_color_background = "#3385ff";
}elseif($theme_database_register == "basic_red"){
	$theme_color_font = "#ff3333";
	$theme_color_border = "#ff3333";
	$theme_color_background = "#ff3333";
}elseif($theme_database_register == "basic_yellow"){
	$theme_color_font = "#b38f00";
	$theme_color_border = "#e6b800";
	$theme_color_background = "#e6b800";
}elseif($theme_database_register == "basic_green"){
	$theme_color_font = "#669900";
	$theme_color_border = "#669900";
	$theme_color_background = "#669900";
}elseif($theme_database_register == "basic_black"){
	$theme_color_font = "#444";
	$theme_color_border = "#444";
	$theme_color_background = "#444";
}else{
	$theme_color_font = "#999";
	$theme_color_border = "#999";
	$theme_color_background = "#999";
}

echo "
<style>

.theme_color_font{
	color: ".$theme_color_font.";   
}

.theme_color_border{
	border: 1px solid ".$theme_color_border.";
	border-bottom: 3px solid ".$theme_color_border.";
}

.theme_color_background{
	background-color: ".$theme_color_background.";
}

</style>
";

?>
