<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatiable" content="ie=edge">
	<title>ModelYar</title>
	<?php wp_head(); ?>
</head>
<body style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/bg_about_us.jpg);">
  <header class="header">
    <div class="container">
    <div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="логотип"></div>
    <div class="menu"><ul>
      <?php wp_nav_menu(); ?>
    </ul>
  </div>
</div>
  </header>