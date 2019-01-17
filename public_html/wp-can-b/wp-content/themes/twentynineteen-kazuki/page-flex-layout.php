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

			<div class="flex-container">

				<div>
					<div><span class="ui-icon-circle">1</span></div>
				</div>

				<div>
					<div><span class="ui-icon-circle">2</span></div>
				</div>

				<div>
					<div><span class="ui-icon-circle">3</span></div>
				</div>

				<div>
					<div><span class="ui-icon-circle">4</span></div>
				</div>

				<div>
					<div><span class="ui-icon-circle">5</span></div>
				</div>

			</div>

			<hr>

			align-items: stretch;

			<div class="flex-container flex-alignitems_stretch" style="width: 200px; flex-wrap: wrap; height:300px;">

				<div class="flex-child">
					<div><span class="ui-icon-circle">1</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">2</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">3</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">4</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">5</span></div>
				</div>

			</div>

			align-content: stretch;
			<div class="flex-container flex-aligncontent_stretch" style="width: 200px; flex-wrap: wrap; height:300px;">

				<div class="flex-child">
					<div><span class="ui-icon-circle">1</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">2</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">3</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">4</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">5</span></div>
				</div>

			</div>

			<hr>

			align-items: flex-start;

			<div class="flex-container flex-alignitems_start" style="width: 200px; flex-wrap: wrap; height:300px;">

				<div class="flex-child">
					<div><span class="ui-icon-circle">1</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">2</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle flex-child-height30px">3</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">4</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">5</span></div>
				</div>

			</div>

			align-content: flex-start;
			<div class="flex-container flex-aligncontent_start" style="width: 200px; flex-wrap: wrap; height:300px;">

				<div class="flex-child">
					<div><span class="ui-icon-circle">1</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">2</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">3</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">4</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">5</span></div>
				</div>

			</div>


			<hr>

			align-items: flex-end;

			<div class="flex-container flex-alignitems_end" style="width: 200px; flex-wrap: wrap; height:300px;">

				<div class="flex-child">
					<div><span class="ui-icon-circle">1</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">2</span></div>
				</div>

				<div class="flex-child flex-child-height30px">
					<div><span class="ui-icon-circle">3</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">4</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">5</span></div>
				</div>

			</div>

			align-content: flex-end;

			<div class="flex-container flex-aligncontent_end" style="width: 200px; flex-wrap: wrap; height:300px;">

				<div class="flex-child">
					<div><span class="ui-icon-circle">1</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">2</span></div>
				</div>

				<div class="flex-child flex-child-height30px">
					<div><span class="ui-icon-circle">3</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">4</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">5</span></div>
				</div>

			</div>

			<hr>

			align-items: center;(sample)

			<div class="flex-container flex-alignitems_center">

				<div class="flex-child">
					<div><span class="ui-icon-circle">1</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">2</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">3</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">4</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">5</span></div>
				</div>


				<div class="flex-child" style="margin-left: 30px;">
					<div class="flex-child-inner1"><span class="ui-icon-circle">1</span></div>
				</div>

				<div class="flex-child">
					<div class="flex-child-inner2"><span class="ui-icon-circle">2</span></div>
				</div>

				<div class="flex-child">
					<div class="flex-child-inner3"><span class="ui-icon-circle">3</span></div>
				</div>

				<div class="flex-child">
					<div class="flex-child-inner4"><span class="ui-icon-circle">4</span></div>
				</div>

				<div class="flex-child">
					<div class="flex-child-inner5"><span class="ui-icon-circle">5</span></div>
				</div>

			</div>


			align-items: center;
			<div class="flex-container flex-alignitems_center" style="width: 200px; flex-wrap: wrap; height:300px;">

				<div class="flex-child">
					<div><span class="ui-icon-circle">1</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">2</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">3</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">4</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">5</span></div>
				</div>


				<div class="flex-child" style="margin-left: 30px;">
					<div class="flex-child-inner1"><span class="ui-icon-circle">1</span></div>
				</div>

				<div class="flex-child">
					<div class="flex-child-inner2"><span class="ui-icon-circle">2</span></div>
				</div>

				<div class="flex-child">
					<div class="flex-child-inner3"><span class="ui-icon-circle">3</span></div>
				</div>

				<div class="flex-child">
					<div class="flex-child-inner4"><span class="ui-icon-circle">4</span></div>
				</div>

				<div class="flex-child">
					<div class="flex-child-inner5"><span class="ui-icon-circle">5</span></div>
				</div>

			</div>

			align-content: center;

			<div class="flex-container flex-aligncontent_center" style="width: 200px; flex-wrap: wrap; height:300px;">

				<div class="flex-child">
					<div><span class="ui-icon-circle">1</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">2</span></div>
				</div>

				<div class="flex-child flex-child-height30px">
					<div><span class="ui-icon-circle">3</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">4</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">5</span></div>
				</div>

			</div>

			<hr>

			justify-content: space-between;

			<div class="flex-container flex-justifycontent_between">

				<div class="flex-child">
					<div><span class="ui-icon-circle">1</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">2</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">3</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">4</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">5</span></div>
				</div>

			</div>

			<hr>

			justify-content: space-around;

			<div class="flex-container flex-justifycontent_around">

				<div class="flex-child">
					<div><span class="ui-icon-circle">1</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">2</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">3</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">4</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">5</span></div>
				</div>

			</div>

			<hr>

			justify-content: center;

			<div class="flex-container flex-justifycontent_center">

				<div class="flex-child">
					<div><span class="ui-icon-circle">1</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">2</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">3</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">4</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">5</span></div>
				</div>

			</div>

			<hr>

			justify-content: flex-start;

			<div class="flex-container flex-justifycontent_start">

				<div class="flex-child">
					<div><span class="ui-icon-circle">1</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">2</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">3</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">4</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">5</span></div>
				</div>

			</div>

			<hr>

			justify-content: flex-end;

			<div class="flex-container flex-justifycontent_end">

				<div class="flex-child">
					<div><span class="ui-icon-circle">1</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">2</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">3</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">4</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">5</span></div>
				</div>

			</div>

			<div>
				<small>*<a href="https://developer.mozilla.org/ja/docs/Web/CSS/align-content">align-contentについて</a></small>
			</div>

			<hr>

			flex-direction: column;

			<div class="flex-container flex-direction_column">

				<div class="flex-child">
					<div><span class="ui-icon-circle">1</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">2</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">3</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">4</span></div>
				</div>

				<div class="flex-child">
					<div><span class="ui-icon-circle">5</span></div>
				</div>

			</div>

			<hr>

			order: <number>;(子要素のプロパティ)

			<div class="flex-container flex-direction_order">

				<div class="flex-child flexItem-order3">
					<div><span class="ui-icon-circle">1</span></div>
				</div>

				<div class="flex-child flexItem-order1">
					<div><span class="ui-icon-circle">2</span></div>
				</div>

				<div class="flex-child flexItem-order2">
					<div><span class="ui-icon-circle">3</span></div>
				</div>

				<div class="flex-child flexItem-order4">
					<div><span class="ui-icon-circle">4</span></div>
				</div>

				<div class="flex-child flexItem-order5">
					<div><span class="ui-icon-circle">5</span></div>
				</div>

			</div>

			<hr>

				align-self：(子要素のプロパティ)<br>
				<ul>
					<li>center</li>
					<li>flex-end</li>
					<li>flex-start</li>
					<li>stretch</li>
				</ul>


				<div class="flex-container flex-alignitems_center">

					<div class="flex-child flexItem-alignself_end">
						<div><span class="ui-icon-circle">1</span></div>
					</div>

					<div class="flex-child">
						<div><span class="ui-icon-circle flexItem-alignself">2</span></div>
					</div>

					<div class="flex-child flexItem-alignself_stretch">
						<div><span class="ui-icon-circle">3</span></div>
					</div>

					<div class="flex-child flexItem-alignself_start">
						<div><span class="ui-icon-circle">4</span></div>
					</div>

					<div class="flex-child">
						<div><span class="ui-icon-circle">5</span></div>
					</div>

				</div>

				<hr>

				flex-grow

			<div class="flex-container">

				<div class="flex-child flecItem-grow">
					<div><span class="ui-icon-circle">1</span></div>
				</div>

				<div class="flex-child flecItem-grow">
					<div><span class="ui-icon-circle">2</span></div>
				</div>

				<div class="flex-child flecItem-grow2x">
					<div><span class="ui-icon-circle">3</span></div>
				</div>

				<div class="flex-child flecItem-grow">
					<div><span class="ui-icon-circle">4</span></div>
				</div>

				<div class="flex-child flecItem-grow">
					<div><span class="ui-icon-circle">5</span></div>
				</div>

			</div>

			<hr>

				flex-basis

			<div class="flex-container">

				<div class="flex-child flexItem-basis250">
					<div><span class="ui-icon-circle">1</span></div>
				</div>

				<div class="flex-child flexItem-basis">
					<div><span class="ui-icon-circle">2</span></div>
				</div>

				<div class="flex-child flexItem-basis">
					<div><span class="ui-icon-circle">3</span></div>
				</div>

				<div class="flex-child flexItem-basis">
					<div><span class="ui-icon-circle">4</span></div>
				</div>

				<div class="flex-child flexItem-basis">
					<div><span class="ui-icon-circle">5</span></div>
				</div>

			</div>

			<hr>

			<div class="flex-container">

				<div class="flex-child flexItem-flex">
					<div><span class="ui-icon-circle">1</span></div>
				</div>

				<div class="flex-child flexItem-flex">
					<div><span class="ui-icon-circle">2</span></div>
				</div>

				<div class="flex-child flexItem-flex2x">
					<div><span class="ui-icon-circle">3</span></div>
				</div>

				<div class="flex-child flexItem-flex">
					<div><span class="ui-icon-circle">4</span></div>
				</div>

				<div class="flex-child flexItem-flex">
					<div><span class="ui-icon-circle">5</span></div>
				</div>

			</div>

			<hr>

			<div class="flex-container-test">

				<div class="flexItem-flex-test" style="background-color:gray;">
						<span class="ui-icon-circle-test">1</span>
						<img src="<?php bloginfo('template_directory');?>/images/board-640.jpg">
				</div>

				<div class="flexItem-flex-test">
						<span class="ui-icon-circle-test">2</span>
						<img src="<?php bloginfo('template_directory');?>/images/business-640.jpg">

				</div>

				<div class="flexItem-flex-test" style="background-color:gray;">

					<span class="ui-icon-circle-test">3</span>
					<img src="<?php bloginfo('template_directory');?>/images/laptop-640.jpg">
				</div>

				<div class="flexItem-flex-test">
					<span class="ui-icon-circle-test">4</span>
					<img src="<?php bloginfo('template_directory');?>/images/pencil-640.jpg">
				</div>

				<div class="flexItem-flex-test" style="background-color:darkorange;">
					<span class="ui-icon-circle-test">5</span>
					<img src="<?php bloginfo('template_directory');?>/images/walk-640.jpg">
				</div>

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
