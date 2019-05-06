<?php 

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage TravelTheme
 * @since TravelTheme 1.0
 */
get_header(); ?>

<div id="primary" class="content-area">
	<main><?php if ( have_posts() ) : ?>

<?php
			// Start the loop.
			while ( have_posts() ) : 
				the_post(); ?>
				
				<h1><?php the_title(); ?></h1> <!-- comentariu html -->
				<?php the_content();?>
				<?php the_date(); ?>
				<?php the_category();?>
				<?php
					echo '<hr>'; //comentariu php - diferenta dintr comm de html si php este ca pe cel de html se vede ce comentariu ai pus in source page (not ok)
												
				// End the loop.
				endwhile;
			
			// If no content, include the "No posts found" template.
		else :
				
		endif;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>