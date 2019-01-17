<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package flapsplan
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("works-Cases_Unit"); ?> >
<!--	<header class="entry-header">-->
<!--		--><?php
//		if ( is_singular() ) :
//			the_title( '<h1 class="entry-title">', '</h1>' );
//		else :
//			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
//		endif;
//
//		if ( 'post' === get_post_type() ) :
//			?>
<!--			<div class="entry-meta">-->
<!--				--><?php
//				flapsplan_posted_on();
//				flapsplan_posted_by();
//				?>
<!--			</div><!-- .entry-meta -->
<!--		--><?php //endif; ?>
<!--	</header><!-- .entry-header -->

            <?php if(have_posts()): ?>
                <div class="works-Cases_Item">

                    <?php $terms = get_the_terms($post->ID, 'works_category'); ?>
                    <?php foreach( $terms as $term ): ?>
                      <?php
                        $term_id = get_queried_object_id();
                        if($term->term_id ==  $term_id)
                      :?>

                      <a href="<?php echo get_permalink( ); ?>">
                            <figure class="works-Cases_ImgUnit">
                                <?php if (get_field('movie')):?>
                                    <iframe src="<?php the_field( "movie" ); ?>"></iframe>
                                <?php else: ?>

                                    <?php the_post_thumbnail(); ?>

                                <?php endif;?>
                              <?php if (get_field('new')):?>
                                <span class="home-Works_Item-Newicon home-Works_NewIcon-<?php echo $term->slug ;?>">NEW</span>
                              <?php endif; ?>
                            </figure>
                            <h3 class="works-Cases_Title"><?php echo get_the_title(); ?></h3>
                            <span class="works-Cases_CategoryName works-Cases_CategoryName-<?php echo $term->slug ;?>"><?php echo $term->name ;?></span>
                        </a>
                        <?php endif; ?>

                    <?php endforeach; ?>

                </div>
            <?php endif; ?>

<!--	--><?php //flapsplan_post_thumbnail(); ?>

<!--	<div class="entry-content">-->
<!--		--><?php
//		the_content( sprintf(
//			wp_kses(
//				/* translators: %s: Name of current post. Only visible to screen readers */
//				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'flapsplan' ),
//				array(
//					'span' => array(
//						'class' => array(),
//					),
//				)
//			),
//			get_the_title()
//		) );
//
//		wp_link_pages( array(
//			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'flapsplan' ),
//			'after'  => '</div>',
//		) );
//		?>
<!--	</div><!-- .entry-content -->

<!--	<footer class="entry-footer">-->
<!--		--><?php //flapsplan_entry_footer(); ?>
<!--	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
