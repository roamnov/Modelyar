<?php get_header('cases'); ?>
  <main class="main">
    <div class="container">
      <div class="item_page">
        <div class="galery">
          <div class="item">
            <div class="clearfix">
                <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                
                   <?php
$args = array(
  'post_parent' => $post->ID,
  'post_type' => 'attachment',
  'orderby' => 'menu_order', // сортировка, menu_order - по выставленному в админке порядку, можно также сортировать по имени или дате добавления 
  'order' => 'ASC',
  'numberposts' => 5, // количество выводимых изображений
  'post_mime_type' => 'image'
);
if ( $images = get_children( $args ) ) {
  // если никаких изображений в пост не добавлено, то не выводим вообще ничего
  echo '<div id="sliderbody" style="width:640px; height:480px;"><div id="slider">';
  // не забудьте указать свои значения ширины (640) и высоты (480)
      foreach( $images as $image ) {
        echo wp_get_attachment_image( $image->ID, 'trueslider' );
      }
  echo '</div></div>'; 
}

                   ?>

                </ul>
            </div>
          </div>
        </div>
        <div class="text">
           
        </div>
      
      </div>
    </div> 
  </main>

<?php get_footer('about'); ?>