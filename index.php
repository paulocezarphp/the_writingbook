<!DOCTYPE html>
<html>
<head>
	<title>The Writing Book</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="sortcut icon" href="app/images/icon.png" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="app/css/style.css">
	<link rel="stylesheet" type="text/css" href="app/css/style_mobile.css">
    <link rel="stylesheet" type="text/css" href="app/css/style_desktop.css">
</head>
<body>

	<?php

	    include("config.php");
        
        $user_login = true;

        if($user_login == true){
            include("app/page_home.php");
        }else{
            include("app/page_login.php");
        }  

	?>

</body>
</html>