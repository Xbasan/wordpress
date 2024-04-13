<?php if ( get_theme_mod('lms_training_institute_aboutus_enable') ) : ?>

  <section id="about" class="py-5">
    <div class="container">      
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 align-self-center mb-2 mb-md-2">
          <div class="about-image-box">
            <?php if ( get_theme_mod('lms_training_institute_aboutus_image1') ) : ?>
              <img class="image1" src="<?php echo esc_url(get_theme_mod('lms_training_institute_aboutus_image1')) ?>">
            <?php endif; ?>
            <?php if ( get_theme_mod('lms_training_institute_aboutus_image2') ) : ?>
              <img class="image2" src="<?php echo esc_url(get_theme_mod('lms_training_institute_aboutus_image2')) ?>">
            <?php endif; ?>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 align-self-center mt-5 pt-4 pt-md-0 mt-md-0">
          <?php if ( get_theme_mod('lms_training_institute_aboutus_section_title') ) : ?>
            <h3 class="mb-4"><?php echo esc_html(get_theme_mod('lms_training_institute_aboutus_section_title')) ?></h3>
          <?php endif; ?>
          <?php $lms_training_institute_slider_pages = array();
            $lms_training_institute_mod = intval( get_theme_mod( 'lms_training_institute_aboutus' ));
            if ( 'page-none-selected' != $lms_training_institute_mod ) {
              $lms_training_institute_slider_pages[] = $lms_training_institute_mod;
            }
            if( !empty($lms_training_institute_slider_pages) ) :
              $lms_training_institute_args = array(
                'post_type' => 'page',
                'post__in' => $lms_training_institute_slider_pages,
                'orderby' => 'post__in'
              );
              $lms_training_institute_query = new WP_Query( $lms_training_institute_args );
              if ( $lms_training_institute_query->have_posts() ) :
                $i = 1;
          ?>
          <div class="inner-box">
            <?php  while ( $lms_training_institute_query->have_posts() ) : $lms_training_institute_query->the_post(); ?>
              <h4 class="pb-2"><?php the_title(); ?></h4>
              <?php echo wp_trim_words( get_the_content(), get_theme_mod('lms_training_institute_story_excerpt_number',15) ); ?>
              <div class="slider-btn my-5">
                <a href="<?php the_permalink(); ?>"><?php esc_html_e('Read More','lms-training-institute'); ?></a>
              </div>
            <?php $i++; endwhile;
            wp_reset_postdata();?>
          </div>
          <?php else : ?>
            <div class="no-postfound"></div>
          <?php endif;
          endif;?>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </section>

<?php endif; ?>
