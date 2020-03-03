<?php /* Template Name: Контакты */ ?>
<?php get_header(); ?>
	<div class="slider mainSlider">
		<div class="slide slide-1"></div>
		<div class="slide slide-2"></div>
		<div class="slide slide-3"></div>
		<div class="slide slide-4"></div>
		<div class="slide slide-5"></div>
		<div class="slide slide-6"></div>
	</div>
	<main class="main fore-ground">
		<div class="container contact_page">
			<h2>Контакты</h2>
			<img src="<?php echo get_template_directory_uri(); ?>/img/phone.svg">
			<div class="phone" tel="+79051330399">+7<span>(</span>915<span>)</span> 969-17-05</div>
	        <img src="<?php echo get_template_directory_uri(); ?>/img/mail.svg">
        	<div class="mail">MODELYAR76<span>@</span>mail.com</div>
        	<img src="<?php echo get_template_directory_uri(); ?>/img/pin.svg">
        	<div class="mail">Ярославская обл. <span>/</span> г. Рыбинск</div>
		</div>
	</main>
<?php get_footer();?>