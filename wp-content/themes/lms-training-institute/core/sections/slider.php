<?php if ( get_theme_mod('lms_education_blog_box_enable') ) : ?>

<?php $lms_education_args = array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'category_name' =>  get_theme_mod('lms_education_blog_slide_category'),
  'posts_per_page' => get_theme_mod('lms_education_blog_slide_number'),
); ?>

<div class="slider">
  <div class="owl-carousel">
    <?php $lms_education_arr_posts = new WP_Query( $lms_education_args );
    if ( $lms_education_arr_posts->have_posts() ) :
      while ( $lms_education_arr_posts->have_posts() ) :
        $lms_education_arr_posts->the_post();
        ?>
        <div class="blog_box">
          <?php
            if ( has_post_thumbnail() ) :
              the_post_thumbnail();
            else:
              ?>
              <div class="slider-alternate">
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/banner.png'; ?>">
              </div>
              <?php
            endif;
          ?>
          <div class="content_inner_box">
            <?php if ( get_theme_mod('lms_education_title_unable_disable',true) ) : ?>
            <h3 class="post-title mb-3 mt-0"><a href="<?php echo esc_url(get_permalink($post->ID)); ?>"><?php the_title(); ?></a></h3>
            <?php endif; ?>
            <div class="slider-btn">
              <a href="<?php the_permalink(); ?>"><?php esc_html_e('Read More','lms-training-institute'); ?></a>
            </div>
          </div>
        </div>
      <?php
    endwhile;
    wp_reset_postdata();
    endif; ?>
  </div>
</div>

<?php endif; ?>
