<?php 
/**
 * content-quote.php
 *
 * The default template for displaying posts with the Quote post format.
 * @package Theme_Material
 * GPL3 Licensed
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<!-- Article header -->
	<header class="entry-header"> <?php
		// If single page, display the title
		// Else, we display the title in a link
		if ( is_single() ) : ?>
			<h1><?php the_title(); ?></h1>
		<?php else : ?>
			<h1><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		<?php endif; ?>

		<p class="entry-meta">
			<?php 
				// Display the meta information
				material_post_meta();
			?>
		</p>
	</header> <!-- end entry-header -->
	<!-- Article content -->
	<div class="entry-content">
		<?php
			the_content( __( 'Continue reading &rarr;', 'material' ) );

			wp_link_pages();
		?>
	</div> <!-- end entry-content -->

	<!-- Article footer -->
	<footer class="entry-footer">
		<p class="entry-meta">
			<?php 
				// Display the meta information
				
				material_post_meta2();
			?>
		</p>
	</footer> <!-- end entry-footer -->
</article>