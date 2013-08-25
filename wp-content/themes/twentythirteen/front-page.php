<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<?php $args = array( 'post_type' => 'show', 'posts_per_page' => 10, 'show-status'=>'current');
$loop = new WP_Query( $args );
// echo '<pre>';
// print_r($loop);
// echo '</pre>';
while ( $loop->have_posts() ) : $loop->the_post();
	// echo '<h1>';
	// the_title();
	// echo '</h1>';
	//print_r($post->meta);
	$meta = get_post_meta( $post->ID);
	//echo $meta['wpcf-featured-image-caption'][0];
	//print_r($meta);
	echo '<div class="entry-content">';
	echo '<h1>';
	the_title();
	echo '</h1>';
	the_content();
	the_post_thumbnail('full');
	echo '<center><p class="caption">' . $meta['wpcf-featured-image-caption'][0] . '</p></center>';
	echo '</div>';
endwhile; ?>

			

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>