<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package flapsplan
 */

get_header();
?>

	<div id="primary" class="content-area works-Detail_Wrapper st-Whole">

			<main id="main" class="site-main">

				<header class="st-Whole sw-Section_Header works-Detail_Header">
					<h2 class="sw-Section_HeaderTitle works-Section_HeaderTitle">WORKS</h2>
				</header>

				<div class="works-Section_Inner">

					<div class="works-Navigation namespace-block">
						<div class="works-Navigation_List">
							<a href="<?php echo esc_url( home_url( '/works' ) );?>" class="">
							<div class="works-Navigation_Item works-Navigation_Item-all">
								ALL
							</div>
							</a>
							<?php
							$terms = get_terms('works_category','get=all' );
//							$client_terms = get_terms('client' );


							if ( ! empty( $terms ) && !is_wp_error( $terms ) ){
								foreach ( $terms as $term ) {

									echo '<a href="'.get_term_link($term).'">' .'<div class="works-Navigation_Item works-Navigation_Item-' .$term->slug .'">'  .$term->name .'</div>' .'</a>';
								}

//								foreach ( $client_terms as $client_term ) {
//									echo '<a href="'.get_term_link($client_term).'">' .'<div class="works-Navigation_Item works-Navigation_Item-' .$client_term->slug .' ">' . $client_term->name .'</div>' .'</a>';
//								}
							}
							?>

						</div>
					</div>
				</div>


				<div class="st-Content_TwoColumn">
					<div class="st-Content_ColumnLeft">
						<section class="works-Detail_Main">


							<?php

							while ( have_posts() ) :
									the_post();

//									get_template_part( 'template-parts/content-work', get_post_type() );
									get_template_part( 'template-parts/content/content', 'work' );

						//			the_post_navigation();

									// If comments are open or we have at least one comment, load up the comment template.
									if ( comments_open() || get_comments_number() ) :
										comments_template();
									endif;

								endwhile; // End of the loop.
							?>

							コンテンツコンテンツ
						</section>
						<section class="works-Related namespace-block">
							<header class="works-Related_Header">
							    <h2 class="works-Related_HeaderTitle">RELATED</h2>
							</header>
							<div>
								<ul class="works-Related__List">
									<?php // 現在表示されている投稿と同じタームに分類された投稿を取得
									$taxonomy_slug = 'works_category'; // タクソノミーのスラッグを指定
									$post_type_slug = 'works'; // 投稿タイプのスラッグを指定
									$post_terms = wp_get_object_terms($post->ID, $taxonomy_slug); // タクソノミーの指定
									$value = "";
									if( $post_terms && !is_wp_error($post_terms)) { // 値があるときに作動

//										$term = get_the_terms($post->ID, 'works_category');
										$terms_slug = array(); // 配列のセット
										foreach( $post_terms as $value ){ // 配列の作成
                        $term_id = get_queried_object_id();
                        if($value->term_id ==  $term_id){
													$terms_slug[] = $value->slug; // タームのスラッグを配列に追加
													}
										}
									}
									$args = array(
										'post_type' => $post_type_slug, // 投稿タイプを指定
										'posts_per_page' => 2, // 表示件数を指定
										'order_by' =>  'desc', // 新着順に表示
										'post__not_in' => array($post->ID), // 現在の投稿を除外
										'tax_query' => array( // タクソノミーパラメーターを使用
											array(
												'taxonomy' => $taxonomy_slug, // タームを取得タクソノミーを指定
												'field' => 'slug', // スラッグに一致するタームを返す
//												'terms' => $terms_slug // タームの配列を指定
												'terms' => $value->slug // タームの配列を指定

											)
										)
									);
									$the_query = new WP_Query($args); if($the_query->have_posts()):
										?>
										<?php while ($the_query->have_posts()): $the_query->the_post(); ?>
									<li class="works-Related__Item">
										<a href="<?php the_permalink() ?>">
                        <figure class="works-Cases_ImgUnit">
													<?php if (get_field('movie')):?>
														<iframe src="<?php the_field( "movie" ); ?>"></iframe>
													<?php else: ?>

														<?php the_post_thumbnail(); ?>

													<?php endif;?>
												</figure>
												<h3 class="works-Cases_Title"><?php the_title(); ?></h3>
												<span class="works-Cases_CategoryName works-Cases_CategoryName-<?php echo $value->slug ;?>"><?php echo $value->name ;?></span>
										</a>
									</li>
									<?php endwhile; ?>
<!--										--><?php //wp_reset_postdata(); ?>
									<?php endif; ?>
								</ul>
							</div>
						</section>
					</div>
<!--					--><?php //get_sidebar('works');?>

					<div><!--st-Content_TwoColumn-->

			</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
