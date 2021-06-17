<?php get_header(); ?>
  <div class="cardbox">
  <?php
    if( have_posts() ) :
      for ($var = 0; $var < 6; $var++) :
        the_post(); ?>
        <div class="col1">
          <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="img">
              <?php the_post_thumbnail(); ?>
            </div>
            <h5><?php echo get_the_date(); ?></h5>
            <p><?php the_title(); ?></p>
            <a href="<?php the_permalink(); ?>">READ MORE</a>
          </div>
        </div>
      <?php endfor;
    else :
      ?><p>表示する記事がありません</p><?php
    endif;
  ?>
  </div>
</section>
</main>
<?php get_footer(); ?>