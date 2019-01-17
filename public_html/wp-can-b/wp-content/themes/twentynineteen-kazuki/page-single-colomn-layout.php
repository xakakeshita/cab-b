<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package xearts
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<!--			--><?php
//			while ( have_posts() ) : the_post();
//
//				get_template_part( 'template-parts/content', 'page' );
//
//				// If comments are open or we have at least one comment, load up the comment template.
//				if ( comments_open() || get_comments_number() ) :
//					comments_template();
//				endif;
//
//			endwhile; // End of the loop.
//			?>
            <header class="entry-header sngLyout-Header">
                <?php
                if ( is_single() ) :
                    the_title( '<h1 class="entry-title sngLyout-Header_Title">', '</h1>' );
                else :
                    the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                endif;

                if ( 'post' === get_post_type() ) : ?>
                    <div class="entry-meta">
<!--                        --><?php //xearts_theme_posted_on(); ?>
                    </div><!-- .entry-meta -->
                <?php
                endif; ?>
            </header><!-- .entry-header -->

            <div class="sngLyout-Section_Wrapper">

                <section class="sngLyout-Section"><!-- 100% -->
                    <header class="sngLyout-Section_Header"><!-- 1280px -->
                        <h2 class="sngLyout-Section_Title">content1-news-のセクションタイトル</h2>
                        <span class="sngLyout-Section_SubTitle"> e g ) news..</span>
                    </header>
                    <div class="sngLyout-Section_Content sngLyout-Content"><!-- 1020px -->
                        <div class="sngLyout-Content_Inner"><!-- 980px -->
                            <p class="sngLyout-Text sngLyout-Content_Body sngLyout-Content-right"><!-- 540px -->
                                content1の具体的な内容がここから始まります。single-layout構成なので、縦に流れるようにコンテンツが組み立てられていて、できる限り、１画面には１文章にするほうが見やすいレイアウトになります。<b class="sngLyout-Text-lg">font-size</b>や<b class="sngLyout-Text-lg">font-family</b>や<b class="sngLyout-Text-lg">余白</b>の使い方、simpleなcolor展開がより見やすいpointとなります。<b class="sngLyout-Text-lg">落ち着いた雰囲気</b>や<b class="sngLyout-Text-lg">安心感</b>を与えたいときには適しています。また、<b class="sngLyout-Text-lg"></b>動きを付けたい場合にはその他のデザインはsimpleなほうが適しているので<strong class="sngLyout-Text_Strong">single-layout</strong>が適しています。
                            </p>

                            <figure class="sngLyout-Content_Img sngLyout-Content-left"><!-- 440px -->
                                <img src="<?php bloginfo('template_directory') ;?>/images/sunrise-1280.jpg" alt="">
                            </figure>
                        </div>


                        <h3 style="text-align: center"> news</h3>

                        <ul class="sngLyout-Content sngLyout-Content_Body-newsList sngLyout-Content-center"><!-- 1020px -->
                            <li style="margin: 0 0 15px 0;"><time style="display: inline-block; margin: 0 15px 0 0;">20xx.01.04</time><span style="display: inline-block; margin: 0 15px 0 0; background-color: red; color: #ffffff;">category1</span>newsのリスト1</li>
                            <li style="margin: 0 0 15px 0;"><time style="display: inline-block; margin: 0 15px 0 0;">20xx.01.04</time><span style="display: inline-block; margin: 0 15px 0 0; background-color: yellow; color: #000;">category2</span>newsのリスト2</li>
                            <li style="margin: 0 0 15px 0;"><time style="display: inline-block; margin: 0 15px 0 0;">20xx.01.04</time><span style="display: inline-block; margin: 0 15px 0 0; background-color: blue; color: #ffffff;">category3</span>newsのリスト3</li>
                            <li style="margin: 0 0 15px 0;"><time style="display: inline-block; margin: 0 15px 0 0;">20xx.01.04</time><span style="display: inline-block; margin: 0 15px 0 0; background-color: red; color: #ffffff;">category1</span>newsのリスト4</li>
                        </ul>

                    </div>
                    <figure class="sngLyout-Content-max"><!-- 1280px -->
                        <img src="<?php bloginfo('template_directory') ;?>/images/snowman-1920.jpg" alt="officeの内観">
                    </figure>
                </section>

                <section class="sngLyout-Section">
                    <header class="sngLyout-Section_Header">
                        <h2 class="sngLyout-Section_Title">content2のセクションタイトル</h2>
                        <span class="sngLyout-Section_SubTitle"> e g ) about..</span>
                        <p class="snglyout-Text sngLyout-Text-intro sngLyout-Intro-content1">
                            lead文やdescliption、などintroductionとなるような導入の文面を入れることができます。<br>
                            この部分で、キャッチフレーズをタイトルやサブタイトルとは別に入れることもできます。
                        </p>
                    </header>
                    <div class="sngLyout-Section_Content sngLyout-Content">
                        <p class="sngLyout-Text sngLyout-Content_Body sngLyout-Content-center">
                            content2
                            の具体的な内容がここから始まります。single-layout構成なので、縦に流れるようにコンテンツが組み立てられていて、できる限り、１画面には１文章にするほうが見やすいレイアウトになります。<b class="sngLyout-Text-lg">font-size</b>や<b class="sngLyout-Text-lg">font-family</b>や<b class="sngLyout-Text-lg">余白</b>の使い方、simpleなcolor展開がより見やすいpointとなります。<b class="sngLyout-Text-lg">落ち着いた雰囲気</b>や<b class="sngLyout-Text-lg">安心感</b>を与えたいときには適しています。また、<b class="sngLyout-Text-lg"></b>動きを付けたい場合にはその他のデザインはsimpleなほうが適しているので<strong class="sngLyout-Text_Strong">single-layout</strong>が適しています。
                        </p>

                        <figure class="sngLyout-Content_Img sngLyout-Content-center">
                            <img src="<?php bloginfo('template_directory') ;?>/images/dirt-road-1280.jpg" alt="">
                        </figure>
                    </div>
                </section>


                <section class="sngLyout-Section">
                    <header class="sngLyout-Section_Header">
                        <h2 class="sngLyout-Section_Title">content3のセクションタイトル</h2>
                        <span class="sngLyout-Section_SubTitle">e g ) product..</span>
                    </header>
                    <div class="sngLyout-Section_Content sngLyout-Content">
                        <div class="sngLyout-Content_Inner">
                            <p class="sngLyout-Text sngLyout-Content_Body sngLyout-Content-left">
                                content3の具体的な内容がここから始まります。single-layout構成なので、縦に流れるようにコンテンツが組み立てられていて、できる限り、１画面には１文章にするほうが見やすいレイアウトになります。<b class="sngLyout-Text-lg">font-size</b>や<b class="sngLyout-Text-lg">font-family</b>や<b class="sngLyout-Text-lg">余白</b>の使い方、simpleなcolor展開がより見やすいpointとなります。<b class="sngLyout-Text-lg">落ち着いた雰囲気</b>や<b class="sngLyout-Text-lg">安心感</b>を与えたいときには適しています。また、<b class="sngLyout-Text-lg"></b>動きを付けたい場合にはその他のデザインはsimpleなほうが適しているので<strong class="sngLyout-Text_Strong">single-layout</strong>が適しています。
                            </p>

                            <figure class="sngLyout-Content_Img sngLyout-Content-right">
                                <img src="<?php bloginfo('template_directory') ;?>/images/dance-640.jpg" alt="">
                            </figure>
                        </div>
                    </div>
                </section>
            </div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
