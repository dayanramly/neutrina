<?php 
/**
* The template for displaying all single posts and attachments
*
* @package WordPress
* @subpackage neutrina
* @since neutrina
*/

get_header(); ?>

<div class="container">

	<div class="row main-content">

		<div class="col-xs-8 col-xs-offset-2">
			<div class="post-content">
				<?php 
				while ( have_posts() ) : the_post();
				the_title( '<h4 class="page-title">', '</h4>' );

				$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );?>
				<div class="row post-additional">
					<div class="col-xs-8">
						<?php echo get_the_date('j F Y'); ?>, <?php the_category(', ') ?>                  
					</div>
					<div class="col-xs-4 text-right">
						<?php comments_number( '0 comment', '1 comment', '% comments' ); ?>
					</div>
				</div>
				<img src="<?php echo($image[0]); ?>" alt="" class="img-responsive img-page">
				<h4 class="post-content-text"><?php the_content(); endwhile; ?></h4>
			</div>
		</div>
	</div>
</div>

<?php get_footer();?>