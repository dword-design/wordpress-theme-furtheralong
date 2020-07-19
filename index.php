<?php
/**
 * @package Dusk_To_Dawn
 */
get_header(); ?>

<div id="primary">
	<div id="content" class="clear-fix" role="main">

	<?php if (is_home()) : the_post();
		$page = get_page_by_title("home");
		global $post;
		$post = $page;
		setup_postdata($page);
		get_template_part( 'content', 'page');
		rewind_posts();
	endif; ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', get_post_format() ); ?>

	<?php endwhile; ?>

	<?php dusktodawn_content_nav( 'nav-below' ); ?>

	</div><!-- #content -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
