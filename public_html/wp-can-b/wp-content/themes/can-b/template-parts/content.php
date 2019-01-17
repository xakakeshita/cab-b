<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package can-b
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('archive-Example_Unit'); ?>>

	<header class="entry-header">

	</header><!-- .entry-header -->

	<div class="entry-content">

    <a href="<?php echo get_permalink( ); ?>">

      <div class="archive-Example_Item">

        <figure class="archive-Example_ImgUnit">
          <?php the_post_thumbnail(); ?>
        </figure>
        <h3 class="archive-Example_Title">
          <?php echo get_the_title(); ?>
        </h3>

      </div>

    </a>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
    <!--		--><?php //can_b_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
