<footer class="footer footer1" >
    <div class="container">
      <div class="main_text">
      Изготовление макетов</br>
      <div>кораблей <span>&#9679</span> техники <span>&#9679</span> зданий</div>
             </div>
      <div class="contacts">
        <div class="soc">
          <img src="<?php echo get_template_directory_uri(); ?>/img/vk.svg" alt="vk">
          <img src="<?php echo get_template_directory_uri(); ?>/img/facebook.svg" alt="facebook">
          <img src="<?php echo get_template_directory_uri(); ?>/img/instagram.svg" alt="instagram">
          <img src="<?php echo get_template_directory_uri(); ?>/img/whatsapp.svg" alt="whatsapp">
        </div>
        <div class="phone cont" tel="+79051330399">
          <img src="<?php echo get_template_directory_uri(); ?>/img/phone_footer.svg" alt="телефон">+7(915) 969-17-05 
        </div>
        <div class="mail cont">
          <img src="<?php echo get_template_directory_uri(); ?>/img/mail_footer.svg" alt="почта">MODELYAR76@mail.ru
        </div>
      </div>
    </div>
	</footer>
</div>

<script>
	$(document).ready(function() {
		if($('.mainSlider').length){
			$('.topHeader').addClass('hasSlider');
			$('.mainSlider').slick({
				dots: false,
				arrows: false,
				slidesToShow: 1,
				slidesToScroll: 1,
				autoplay: true,
 				autoplaySpeed: 3000,
 				infinite: true,
  				speed: 1000,
 				fade: true,
  				cssEase: 'linear'
			})
		}
	})	
</script>
<?php wp_footer();?>
</body>

</html>