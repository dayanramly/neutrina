<?php
/**
* The main template file
*
* This is the most generic template file in a WordPress theme and one
* of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query,
* e.g., it puts together the home page when no home.php file exists.
*/

get_header(); ?>



<div class="container">
  <div class="row main-content">
            <?php
              query_posts( 'posts_per_page=6' );
              ?>
              <?php if ( have_posts() ) : ?>
              <?php while ( have_posts() ) : the_post(); ?>
              <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
              ?>
            <div class="col-xs-8 col-xs-offset-2">
              <div class="post-content">

                <h4 class="page-title"><?php the_title(); ?> </h4>
                <div class="row post-additional">
                  <div class="col-xs-8">
                    <?php echo get_the_date('j F Y'); ?>, <?php the_category(', ') ?>                  
                    </div>
                  <div class="col-xs-4 text-right">
                    <?php comments_number( '0 comment', '1 comment', '% comments' ); ?>
                  </div>
                </div>

                <img class="img-responsive" src="<?php echo $image[0]; ?>">
                <h4><?php the_excerpt(); ?></h4>
                <a class="continue-reading" href="<?php the_permalink() ?>" role="button">Continue reading...</a>
                <hr>
              </div>
            </div>

            <?php endwhile;?>
          <?php else : ?>
     
        <div class="col-xs-10 col-xs-offset-1">
          <h4>Belum ada postingan</h4>
        </div>
        <?php endif; ?> 

        <div class="col-xs-8 col-xs-offset-2 list-category">
          <h4>Kategori</h4>
          <?php 
          $args = array(
            'show_option_all'    => '',
            'orderby'            => 'name',
            'order'              => 'ASC',
            'style'              => 'list',
            'show_count'         => 0,
            'hide_empty'         => 1,
            'use_desc_for_title' => 1,
            'child_of'           => 0,
            'feed'               => '',
            'feed_type'          => '',
            'feed_image'         => '',
            'exclude'            => '',
            'exclude_tree'       => '',
            'include'            => '',
            'hierarchical'       => 1,
            'title_li'           => __( '' ),
            'show_option_none'   => __( '' ),
            'number'             => null,
            'echo'               => 1,
            'depth'              => 0,
            'current_category'   => 0,
            'pad_counts'         => 0,
            'taxonomy'           => 'category',
            'walker'             => null
            );
          wp_list_categories( $args );
          ?>
        </div>
      </div>
    </div>


    <?php get_footer();?>
