<?php /* Template Name: Наши работы */ ?>
<?php get_header('cases'); ?>
  <main class="main">
  	<?php if(have_posts()) {while(have_posts()){ the_post();?>
    <div class="container">
          

        <div class="item"><a href="<?php the_permalink();?>">
            <div class="item_img">
              <div class="img">
              	<a href="<?php the_permalink();?>"><?php the_post_thumbnail('medium'); ?></a>
              </div>
            </div>
            <div class="text"> 
            <a href="<?php the_permalink();?>" ><?php the_title();?></a> 
            </div>
           </a>
          </div>
      </div>
    <?php }
     }?>
    </div> 
  </main>

<?php get_footer('about');?>
