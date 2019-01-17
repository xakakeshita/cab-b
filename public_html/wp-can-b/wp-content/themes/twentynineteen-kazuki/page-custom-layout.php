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

        <header class="cstomLyout-Header">
<!--            <img src="--><?php //bloginfo('template_directory');?><!--/images/dirt-road-1920.jpg">-->
        </header>

            <section class="cstomLyout-Section namespace-Main namespace-Main-cstomLyout">
                <header class="cstomLyout-Section_Header">
                    <h2 class="cstomLyout-Section_Title">セクションのメインタイトル</h2>
                    <span class="cstomLyout-Section_SubTitle">Englesh-Title</span>
                    <p class="cstomLyout-Section_TitleDscript">どちらをhタグにしてどちらをサブタイトルとして扱うかはページの意図と関わってきます。また、どこまでをHeaderタグのなかに納めるかも意図や構造化によって変わってきます。</p>
                </header>

                <div class="cstomLyout-Section_Content">
                    <div class="cstomLyout-SubSection">
                        <div class="cstomLyout-SubSection_Header cstomLyout-SubSection_Header-content1">
                            <h3 class="cstomLyout-SubSection_Title">サブコンテンツ１のタイトル-OurProduct</h3>
                            <p class="cstomLyout-Subsection_TitleDscript">ディスクリプショントとなるようなテキストが入る。タイトルとは別に補足的に文章が入ることは多いです。</p>
                        </div>
                        <div class="cstomLyout-SubSection_Content cstomLyout-SubSection_Content-1 cstomLyout-Product">

                            <h4 class="cstomLyout-Product_Title">ROAD SPORTS</h4>

                            <p class="cstomLyout-Text cstomLyout-Text_Stroken cstomLyout-Text-w">
                                cstomLyout-layoutのサブコンテンツその１のテキスト<br>
                                cstomLyout-layoutのサブコンテンツその１のテキスト<br>
                                cstomLyout-layoutのサブコンテンツその１のテキスト<br>
                            </p>
                        </div>
                    </div><!-- /.SubSection -->

                    <div class="cstomLyout-SubSection">
                        <div class="cstomLyout-SubSection_Header cstomLyout-SubSection_Header-content2">
                            <h3 class="cstomLyout-SubSection_Title cstomLyout-Text_Stroken cstomLyout-Text-w">サブコンテンツ２のタイトル<br>-About-</h3>
                            <p class="cstomLyout-Text_Stroken cstomLyout-Text-w">ディスクリプショントとなるようなテキストが入る。タイトルとは別に補足的に文章が入ることは多いです。</p>
                        </div>
                        <div class="cstomLyout-SubSection_Content cstomLyout-SubSection_Content-2">
                            <p class="cstomLyout-Text cstomLyout-Text_Stroken cstomLyout-Text-w">
                                cstomLyout-layoutのサブコンテンツその２のテキスト<br>
                                cstomLyout-layoutのサブコンテンツその２のテキスト<br>
                                cstomLyout-layoutのサブコンテンツその２のテキスト<br>
                            </p>

                            <button class="cstomLyout-Button">More</button>
                        </div>
                    </div><!-- /.SubSection -->

                    <div class="cstomLyout-SubSection">

                        <div class="cstomLyout-SubSection_Content-division">

                            <div class="cstomLyout-SubSection_Content-quarter">
                                <span class="ui-icon-circle-test">1</span>
                                <img src="<?php bloginfo('template_directory');?>/images/board-640.jpg">
                            </div>

                            <div class="cstomLyout-SubSection_Content-quarter">
                                <span class="ui-icon-circle-test">2</span>
                                <img src="<?php bloginfo('template_directory');?>/images/business-640.jpg">

                            </div>

                            <div class="cstomLyout-SubSection_Content-quarter">

                                <span class="ui-icon-circle-test">3</span>
                                <img src="<?php bloginfo('template_directory');?>/images/laptop-640.jpg">
                            </div>

                            <div class="cstomLyout-SubSection_Content-quarter">
                                <span class="ui-icon-circle-test">4</span>
                                <img src="<?php bloginfo('template_directory');?>/images/pencil-640.jpg">
                            </div>

<!--                            <div class="flexItem-flex-test" style="background-color:darkorange;">-->
<!--                                <span class="ui-icon-circle-test">5</span>-->
<!--                                <img src="--><?php //bloginfo('template_directory');?><!--/images/walk-640.jpg">-->
<!--                            </div>-->

                        </div>

                    </div><!-- /.SubSection -->

                    <div class="cstomLyout-SubSection">

                        <div class="cstomLyout-SubSection_Content-division">

                            <div class="cstomLyout-SubSection_Content-third">
                                <span class="ui-icon-circle-test">1</span>
                                <img src="<?php bloginfo('template_directory');?>/images/board-640.jpg">
                            </div>

                            <div class="cstomLyout-SubSection_Content-third" style="background-color:darkorange;">
                                <span class="ui-icon-circle-test">2</span>
                                <img src="<?php bloginfo('template_directory');?>/images/business-640.jpg">

                            </div>

                            <div class="cstomLyout-SubSection_Content-third" style="background-color:gray;">

                                <span class="ui-icon-circle-test">3</span>
                                <img src="<?php bloginfo('template_directory');?>/images/laptop-640.jpg">
                            </div>
                            <!---->
                            <!--                            <div class="flexItem-flex-test">-->
                            <!--                                <span class="ui-icon-circle-test">4</span>-->
                            <!--                                <img src="--><?php //bloginfo('template_directory');?><!--/images/pencil-640.jpg">-->
                            <!--                            </div>-->

                            <!--                            <div class="flexItem-flex-test" style="background-color:darkorange;">-->
                            <!--                                <span class="ui-icon-circle-test">5</span>-->
                            <!--                                <img src="--><?php //bloginfo('template_directory');?><!--/images/walk-640.jpg">-->
                            <!--                            </div>-->

                        </div>

                    </div><!-- /.SubSection -->



                    <div class="cstomLyout-SubSection">

                        <div class="cstomLyout-SubSection_Content-division">

                            <div class="cstomLyout-SubSection_Content-half" style="background-color:gray;">
                                <span class="ui-icon-circle-test">1</span>
                                <img src="<?php bloginfo('template_directory');?>/images/board-640.jpg">
                            </div>

                            <div class="cstomLyout-SubSection_Content-half" style="background-color:darkorange;">
                                <span class="ui-icon-circle-test">2</span>
                                <img src="<?php bloginfo('template_directory');?>/images/business-640.jpg">

                            </div>

<!--                            <div class="flexItem-flex-test" style="background-color:gray;">-->
<!---->
<!--                                <span class="ui-icon-circle-test">3</span>-->
<!--                                <img src="--><?php //bloginfo('template_directory');?><!--/images/laptop-640.jpg">-->
<!--                            </div>-->
<!---->
<!--                            <div class="flexItem-flex-test">-->
<!--                                <span class="ui-icon-circle-test">4</span>-->
<!--                                <img src="--><?php //bloginfo('template_directory');?><!--/images/pencil-640.jpg">-->
<!--                            </div>-->

                            <!--                            <div class="flexItem-flex-test" style="background-color:darkorange;">-->
                            <!--                                <span class="ui-icon-circle-test">5</span>-->
                            <!--                                <img src="--><?php //bloginfo('template_directory');?><!--/images/walk-640.jpg">-->
                            <!--                            </div>-->

                        </div>

                    </div><!-- /.SubSection -->


                </div><!-- /.Section_Content -->
            </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
