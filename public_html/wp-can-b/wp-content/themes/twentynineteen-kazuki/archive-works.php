<?php
/**
 * The template for displaying archive pages
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

<!--		--><?php //if ( have_posts() ) : ?>

<!--			<header class="page-header">-->
<!--				--><?php
//					the_archive_title( '<h1 class="page-title">', '</h1>' );
//					// Remove for now @TODO
//					// the_archive_description( '<div class="page-description">', '</div>' );
//				?>
<!--			</header><!-- .page-header -->

<!--			--><?php
//			// Start the Loop.
//			while ( have_posts() ) :
//				the_post();
//
//				/*
//				 * Include the Post-Format-specific template for the content.
//				 * If you want to override this in a child theme, then include a file
//				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
//				 */
//				get_template_part( 'template-parts/content/content', 'excerpt' );
//
//				// End the loop.
//			endwhile;
//
//			// Previous/next page navigation.
//			twentynineteen_the_posts_navigation();
//
//			// If no content, include the "No posts found" template.
//		else :
//			get_template_part( 'template-parts/content/content', 'none' );
//
//		endif;
//		?>

			<section class="home-Works">
				<div class="">
					<header class="home-Works_Header home-Section_Header">
						<h2 class="home-Works_HeaderTitle">WORK<span class="home-Section_TextOrange">S</span></h2>
					</header>


					<ul class="home-Works_List">

						<?php query_posts( array(
							'post_type' => 'works', //カスタム投稿名を指定
							'posts_per_page' => 9      ///表示件数（-1で全ての記事を表示）
						)); ?>

						<?php if(have_posts()): ?>
							<?php while(have_posts()):the_post(); ?>
								<!--ページが存在する場合の指定-->

								<li class="home-Works_Item">
									<?php $terms = get_the_terms($post->ID, 'works_category'); ?>
									<a class="home-Works_ItemAnchor" href="<?php echo get_permalink( ); ?>">
										<figure class="home-Works_ImgUnit">
<!--											--><?php //if (get_field('movie')):?>
<!--												<iframe src="--><?php //the_field( "movie" ); ?><!--"></iframe>-->
<!---->
<!--											--><?php //else: ?>

												<?php the_post_thumbnail(); ?>

<!--											--><?php //endif;?>

<!--											--><?php //foreach( $terms as $term ) : ?>
<!--												--><?php //if (get_field('new')):?>
<!--													<span class="home-Works_Item-Newicon home-Works_NewIcon---><?php //echo $term->slug ;?><!--">NEW</span>-->
<!--												--><?php //endif; ?>
<!--											--><?php //endforeach; ?>
										</figure>

										<h4 class="home-Works_PostTitle"><?php echo get_the_title(); ?></h4>

										<?php foreach( $terms as $term ) : ?>

											<p class="home-Works_CategoryLabel home-Works_CategoryLabel-<?php echo $term->slug ;?>">
												<?php echo $term->name ;?>
											</p>

										<?php endforeach; ?>

									</a>

								</li>


							<?php endwhile; else: ?>
							<!--ページが存在しない場合の指定-->
							<?php
							get_template_part( 'template-parts/content/content', 'none' );
							?>
						<?php endif; ?>
						<?php wp_reset_query(); ?>
					</ul>

					<div class="home-MoreButton_Unit">
						<a href="<?php echo esc_url( home_url( '/works' ) );?>">
							<button class="home-MoreButton">
								MORE
							</button>
						</a>
					</div>

				</div>

			</section>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
