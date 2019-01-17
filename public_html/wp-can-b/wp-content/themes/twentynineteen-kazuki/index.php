<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) {

			// Load posts loop.
//			while ( have_posts() ) {
				the_post();
				get_template_part( 'template-parts/content/content' );
//			}

			// Previous/next page navigation.
//			twentynineteen_the_posts_navigation();

		} else {

			// If no content, include the "No posts found" template.
			get_template_part( 'template-parts/content/content', 'none' );

		}
		?>
<!--			<div>-->
				<div class="namespace-Main">
					<header>
						<h2 >INFORMATION</h2>
						<p>新着情報</p>
					</header>
					<ul>
						<?php

						$paged = get_query_var('paged') ? get_query_var('paged') : 1 ;
						// The Query
						$the_query = new WP_Query( array(
							'post_type' => 'post',
							'posts_per_page' => 3,
						) );

						// The Loop
						if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();?>

							<li>

								<a href="<?php the_permalink()?>">
									<time><?php the_time('Y.m.d');?></time>
									<span><?php the_title()?></span>
								</a>
							</li>
							<?php
						endwhile;

							// Previous/next page navigation.
							twentynineteen_the_posts_navigation();

							wp_reset_postdata();
						else:
							/* Restore original Post Data */?>

						<?php endif;?>

					</ul>
				</div>

			<div class="namespace-block">

			<button><a style="color: #ffffff;" href="<?php echo esc_url( home_url( '/works' ) ); ?>">works一覧</a></button>

			</div>
<!--			</div>-->
		</main><!-- .site-main -->
	</section><!-- .content-area -->

<?php
get_footer();
