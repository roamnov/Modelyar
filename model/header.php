<html lang="ru">
<head>

	<meta charset = "UTF-8">
	<meta name = "viewport" content ="width-device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<title></title>
	<?php wp_head(); ?>
</head>
<body>

<div class="topHeader">
	
	<header class="header">
    <div class="container">
    	<div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="логотип"></div>
	    <div class="menu">
	    	<ul>
		      <?php wp_nav_menu(); ?>
	    	</ul>
		</div>
	</div>
  	</header>