<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package flapsplan
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<?php if ( have_posts() ) : ?>

            <header class="page-header">
<!--					--><?php
//					the_archive_title( '<h1 class="page-title">', '</h1>' );
//					the_archive_description( '<div class="archive-description">', '</div>' );
//					?>
            </header><!-- .page-header -->

            <section class="works-Section">

                <header class="st-Whole home-Works_Header works-Section_Header">
                    <h1 class="sw-Section_HeaderTitle works-Section_HeaderTitle">WORKS</h1>
                </header>

                <div class="st-Whole works-Section_Container">

                    <div class="st-Content_Inner works-Section_Inner namespace-block">

                        <div class="works-Navigation">
                            <div class="works-Navigation_List">
                                <a href="<?php echo esc_url( home_url( '/works' ) );?>">
                                    <div class="works-Navigation_Item works-Navigation_Item-all">
                                        ALL
                                    </div>
                                </a>
                                <?php
                                $terms = get_terms('works_category',array('get'=>'all') );
//                                $client_terms = get_terms('client',array('get'=>'all') );


                                if ( ! empty( $terms ) && !is_wp_error( $terms ) ){
                                    foreach ( $terms as $term ) {

                                        echo '<a href="'.get_term_link($term).'">' .'<div class="works-Navigation_Item works-Navigation_Item-' .$term->slug .'">'  .$term->name .'</div>' .'</a>';
                                    }

//                                    foreach ( $client_terms as $client_term ) {
//                                        echo '<a href="'.get_term_link($client_term).'">' .'<div class="works-Navigation_Item works-Navigation_Item-' .$client_term->slug .' ">' . $client_term->name .'</div>' .'</a>';
//                                    }
                                }
                                ?>

                            </div>
                        </div>

                        <div class="works-Cases_Container">
                            <?php
//                            /* Start the Loop */
//                            while ( have_posts() ) :
//                                the_post();

                            $paged = get_query_var('paged') ? get_query_var('paged') : 1 ;
                            $taxonomy_slug = 'works_category'; // タクソノミーのスラッグを指定
                            $post_type_slug = 'works'; // 投稿タイプのスラッグを指定
                            $post_terms = wp_get_object_terms($post->ID, $taxonomy_slug); // タクソノミーの指定
                            $value ='';


                            if( $post_terms && !is_wp_error($post_terms)) { // 値があるときに作動
                                $terms_slug = array(); // 配列のセット初期化
                                $term_id = get_queried_object_id(); // タームIDの取得

                                foreach( $post_terms as $value ){ // 配列の作成
                                    if($value->term_id ==  $term_id){
                                        $terms_slug[] = $value->slug; // タームのスラッグを配列に追加

                                        $args = array(
                                            'post_type' => $post_type_slug, // 投稿タイプを指定
                                            'posts_per_page' => 9, // 表示件数を指定
                                            'order_by' =>  'date', // 新着順に表示
                                            'order' =>  'DESC', // 'DESC'=新着順に表示, 'ASC'=古い順
                                            'paged' => $paged,
                                            'tax_query' => array( // タクソノミーパラメーターを使用
                                                array(
                                                    'taxonomy' => $taxonomy_slug, // タームを取得タクソノミーを指定
                                                    'field' => 'slug', // スラッグに一致するタームを返す
                                                    'terms' => $value->slug // タームの配列を指定
                                                )
                                            )
                                        );
                                         $the_query = new WP_Query($args);
                                    }
                                }
                            }

                            if($the_query->have_posts()):?>

                            <?php
                            /* Start the Loop */
                            //                          while ( have_posts() ) :
                            //                                the_post();
                            while ($the_query->have_posts()): $the_query->the_post();

                                /*
                                 * Include the Post-Type-specific template for the content.
                                 * If you want to override this in a child theme, then include a file
                                 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                                 */
                                get_template_part( 'template-parts/content/content-taxonomy', get_post_type() );

                            endwhile;

//                            the_posts_navigation();
                            ?>
                            <?php endif; ?>

                        </div>
                        <div class="sw-PostNavigation">
                            <?php
                            the_posts_navigation(
                                array(
                                    'prev_text'           => ' 前へ',
                                    'next_text'           => '次へ ',
                                    'screen_reader_text'  => 'Navigation',
                                )
                            );
                            wp_reset_query();
                            ?>
                        </div>
                    </div>

                    <?php else : ?>
                    <!-- 投稿がない時の指定-->

                    <header class="st-Whole sw-Section_Header works-Section_Header">
                        <h1 class="sw-Section_HeaderTitle works-Section_HeaderTitle">WORKS</h1>
                    </header>

                    <div class="st-Content_Inner works-Section_Inner">

                        <div class="works-Navigation">
                            <div class="works-Navigation_List">
                                <a href="<?php echo esc_url( home_url( '/works' ) );?>">
                                    <div class="works-Navigation_Item works-Navigation_Item-all">
                                        ALL
                                    </div>
                                </a>
                                <?php
                                $terms = get_terms('works_category','get=all' );
//                                $client_terms = get_terms('client','get=all' );


                                if ( ! empty( $terms ) && !is_wp_error( $terms ) ){
                                    foreach ( $terms as $term ) {

                                        echo '<a href="'.get_term_link($term).'">' .'<div class="works-Navigation_Item works-Navigation_Item-' .$term->slug .'">'  .$term->name .'</div>' .'</a>';
                                    }

//                                    foreach ( $client_terms as $client_term ) {
//                                        echo '<a href="'.get_term_link($client_term).'">' .'<div class="works-Navigation_Item works-Navigation_Item-' .$client_term->slug .' ">' . $client_term->name .'</div>' .'</a>';
//                                    }
                                }
                                ?>

                            </div>
                        </div>

                        <?php

                            get_template_part( 'template-parts/content/content', 'none' );

                        endif;?>
                    </div><!-- works-Section_Inner　投稿がない時の指定-->

                    <div class="sp-only">

                        <h3 class="works-Aside_SectionTitle">CATEGORY</h3>

                        <div class="works-Aside_CategoryArea">

                            <?php
                            $terms = get_terms('works_category','get=all' );
//                            $client_terms = get_terms('client' );


                            if ( ! empty( $terms ) && !is_wp_error( $terms ) ){
                                foreach ( $terms as $term ) {

                                    echo  '<a class="works-Aside_SubNavAnchor" href="'.get_term_link($term).'">'.'<div class="works-Aside_SubNavigation works-Navigation_Item works-Navigation_Item-' .$term->slug .'">' .$term->name .'</div>' .'</a>';
                                }

//                                foreach ( $client_terms as $client_term ) {
//                                    echo '<a class="works-Aside_SubNavAnchor" href="'.get_term_link($client_term).'">' .'<div class="works-Aside_SubNavigation works-Navigation_Item works-Navigation_Item-' .$client_term->slug .' ">'  . $client_term->name .'</div>' .'</a>';
//                                }
                            }
                            ?>
                        </div>
                    </div>
                </div><!-- works-Section_Container　全体-->
            </section>

	<!--			--><?php
//			/* Start the Loop */
//			while ( have_posts() ) :
//				the_post();
//
//				/*
//				 * Include the Post-Type-specific template for the content.
//				 * If you want to override this in a child theme, then include a file
//				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
//				 */
//				get_template_part( 'template-parts/content', get_post_type() );
//
//			endwhile;
//
//			the_posts_navigation();
//
//		else :
//
//			get_template_part( 'template-parts/content', 'none' );
//
//		endif;
//		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
