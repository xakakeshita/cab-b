<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package flapsplan
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header works-Detail_PostHeader">
        <time class="works-Detail_PostTime"><?php the_time('Y.m.d'); ?></time>


        <?php
        if ( is_singular() ) :
            the_title( '<h1 class="entry-title works-Detail_PostTitle">', '</h1>' );
        else :
            the_title( '<h2 class="entry-title works-Detail_PostTitle"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
        endif;

        if ( 'post' === get_post_type() ) :
            ?>
            <div class="entry-meta">
<!--                --><?php
//                flapsplan_posted_on();
//                flapsplan_posted_by();
//                ?>
            </div><!-- .entry-meta -->
        <?php endif; ?>
    </header><!-- .entry-header -->

    <div class="entry-content works-Detail_PostContent">

        <?php
        the_content( sprintf(
            wp_kses(
            /* translators: %s: Name of current post. Only visible to screen readers */
                __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', '' ),
                array(
                    'span' => array(
                        'class' => array("works-Detail_PostBody"),
                    ),
                )
            ),
            get_the_title()
        ) );

        wp_link_pages( array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'flapsplan' ),
            'after'  => '</div>',
        ) );
        ?>
    </div><!-- .entry-content -->

<!--    <footer class="entry-footer">-->
<!--        --><?php //flapsplan_entry_footer(); ?>
<!--    </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
