<footer class="footer">
    <div class="container">
      <div class="logo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="логотип">
      </div>
      <div class="menu">
        <ul>
          <?php wp_nav_menu(); ?>
        </ul>
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
<?php wp_footer();?>
</body>

</html>