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
    <?php include("config.php"); ?>
</head>
<body>

	<?php
        
        $install_validade = true;
        $login_validade = true;

        if($install_validade == true){

            if($login_validade == true){
               @$url_link = $_GET['url_link'];
            if($url_link == "home"){
                include("app/page_home.php");
            }elseif($url_link == "books"){
                include("app/page_book.php");
            }elseif($url_link == "chapters"){
                include("app/page_chapter.php");
            }elseif($url_link == "edite"){
                include("app/page_edite.php");
            }else{
                include("app/page_home.php");
            }
            }else{
                 include("app/page_login.php");
            }

        }else{
            include("app/page_install.php");
        }  

	?>

</body>
</html>