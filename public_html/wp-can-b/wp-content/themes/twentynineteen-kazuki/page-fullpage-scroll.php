
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package flapsplan
 */
//wp_enqueue_style( 'animsition', 'https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/css/animsition.min.css' , array() , '4.0.2' );
wp_enqueue_style( 'fullPage', 'https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/jquery.fullpage.min.css' , array() , '2.9.7' );
//wp_enqueue_script( 'animsition', 'https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/js/animsition.min.js', array(), '4.0.2', true );
wp_enqueue_script( 'fullPage', 'https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/jquery.fullpage.min.js', array( 'jquery' ), '2.9.7', true );
//wp_enqueue_script( 'fullPageExtensions', 'https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/jquery.fullpage.extensions.min.js', array('fullPage'), '2.9.7', true );
wp_enqueue_script( 'easings', 'https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/vendors/jquery.easings.min.js' , array('fullPage') , '2.9.7' , true);
//wp_enqueue_script( 'fullPageScrollOverflow', 'https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/vendors/scrolloverflow.min.js' , array('fullPage') , '2.9.7' , true);
wp_enqueue_script( 'concept', get_template_directory_uri() . '/js/concept.js', array('jquery', 'fullPage'), '201811242', true );
add_filter( 'body_class', function( $classes ) {
	$classes[] = 'page-concept';
	return $classes;
} );
get_header();

?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<div class="concept-Base panel-Background">
			<section class="concept-Base_Slide  concept-Section concept-Slide1 fp-auto-height-responsive">
				<div class="concept-Base_SlideInner concept-Content_Container">
					<header class="concept-Section_Header panel-Head">
						<h1 class="concept-Section_HeaderTitle">CONCEPT</h1>
					</header>

					<div class="concept-Base_Inner">
						<div class="panel-Body_DropShadow panel-Body panel-Body-pt30">
							<div class="concept-Content concept-Content-slide1">
								<div class="concept-Animation-FromRight">
									<h2 class="concept-Content_Title">「executive」<br>+「arts」</h2>
									<p class="concept-Content_TitleDscript">
										「インターネットを通じて<br>世界をより良く変えてゆく」<br>
										私たちは、クオリティの高いコンテンツや<br>プログラムを世界に発信する<br>クリエーター集団です。
									</p>
								</div>

							</div>

						</div>
					</div>

				</div>
			</section>

			<section class="concept-Base_Slide  concept-Section concept-Slide1 fp-auto-height-responsive">
				<div class="concept-Base_SlideInner concept-Content_Container">
					<header class="concept-Section_Header panel-Head">
						<h1 class="concept-Section_HeaderTitle">CONCEPT</h1>
					</header>

					<div class="concept-Base_Inner st-Content_Inner">
						<div class="panel-Body_DropShadow panel-Body">
							<div class="concept-Content concept-Content-slide1">

								<div class="concept-Animation-FromLeft concept-Animation-Delay2">
									<h3 class="concept-Content_Title-sub concept-Text-red">Message</h3>
									<p class="concept-Text mb-5">
										xe:executive
									</p>
									<p class="concept-Text mb-5">
										「執行部」といった意味からコンピュータシステム全体の統御を指し<br>
										高付加価値を生むプログラムを提供する技術者集団という想いを込めています
									</p>
									<p class="concept-Text concept-Slide1_MessageText-3">
										arts:<br>
										<span class="concept-Base_StrongText concept-Slide1_StrongText">芸術や技能、コンテンツなどを創作し</span>輩出する。
									</p>
								</div>

							</div>

						</div>
					</div>

				</div>
			</section>


			<section class="concept-Base_Slide concept-Content concept-Slide2 fp-auto-height-responsive">
				<div class="concept-Base_SlideInner">

					<header class="concept-Section_Header panel-Head">
						<h1 class="concept-Section_HeaderTitle">CONCEPT</h1>
					</header>

					<div class="concept-Base_Inner st-Content_Inner">
						<div class="panel-Body panel-Body_DropShadow concept-Base_Panel">

								<div class="concept-Slide2_QuotBox concept-Animation-FromRight">
									<blockquote class="concept-Text concept-Text_Quot">
										自ら新しい時代のあり方を考え、<br>その実現のために行動する<br>
										未来の社会を自ら創造する。<br>
										「インターネットを通じて世界をより良く変えてゆく」
									</blockquote>
								</div>

						</div>

					</div>
				</div>
			</section>


			<section class="concept-Base_Slide concept-Content concept-Slide2 fp-auto-height-responsive">
				<div class="concept-Base_SlideInner">

					<header class="concept-Section_Header panel-Head">
						<h1 class="concept-Section_HeaderTitle">CONCEPT</h1>
					</header>

					<div class="concept-Base_Inner st-Content_Inner">
						<div class="panel-Body panel-Body_DropShadow concept-Base_Panel">

								<div class="concept-Animation-FromLeft concept-Animation-Delay1">
									<p class="concept-Text-slide2">
										<span class="concept-Text concept-Text-nomal concept-Text-mb30">私たちは、サービスの向上に努め</span>
										<span class="concept-Text concept-Text-nomal concept-Text-mb30">素晴らしい提案・制作物によって顧客に貢献します。<br>常に当事者意識をもって物事に向き合い、自らの責任意識で、<br>やりがいと情熱を持って</span>
										<span class="concept-Text concept-Text_Strong-lg concept-Text-mb30">最高の結果を追求し</span>
										<span class="concept-Text concept-Text-nomal">期待以上の結果を提供します。</span>
									</p>
								</div>

						</div>

					</div>
				</div>
			</section>


			<section class="concept-Base_Slide concept-Content concept-Content-Slide3 concept-Slide3 fp-auto-height-responsive">
				<div class="concept-Base_SlideInner">

					<header class="concept-Section_Header panel-Head">
						<h1 class="concept-Section_HeaderTitle">CONCEPT</h1>
					</header>

					<div class="concept-Base_Inner st-Content_Inner">
						<div class="panel-Body panel-Body_DropShadow concept-Base_Panel">

							<div class="concept-Base_Unit concept-Slide3_Unit">

								<div class="concept-Animation-FromRight concept-Animation-Delay0">

									<p class="concept-Text concept-Text-lh28 concept-Text-mb40">
										私たちは<br>
										日々努力し<span class="concept-Text_Strong concept-Text-red">チャレンジ精神を大切にします</span><br class="concept-Text-mb15">
										時々刻々と変化し続ける<br class="concept-Text-mb15">ビジネス環境の中では、
									</p>
									<p class="concept-Text concept-Text_Strong">
										新しいチャレンジがなければ、<br>停滞し衰退を意味すると考えます。
									</p>
								</div>
							</div>
						</div>
					</div>

				</div>
			</section>



			<section class="concept-Base_Slide concept-Content concept-Content-Slide3 concept-Slide3 fp-auto-height-responsive">
				<div class="concept-Base_SlideInner">

					<header class="concept-Section_Header panel-Head">
						<h1 class="concept-Section_HeaderTitle">CONCEPT</h1>
					</header>

					<div class="concept-Base_Inner st-Content_Inner">
						<div class="panel-Body panel-Body_DropShadow concept-Base_Panel">

							<div class="concept-Base_Unit concept-Slide3_Unit">

								<div class="concept-Animation-FromLeft concept-Animation-Delay1">
									<div class="concept-Slide3_UnitInner">

										<p class="concept-Base_MessageText concept-Slide3_Message-proof">
											<span class="concept-Text concept-Text-mb35">働く環境を大切にします</span>

											<span class="concept-Text concept-Text_Strong concept-Text-red concept-Text-mb15">
												ワーク・ライフ・バランスを
											</span>
											<span class="concept-Text concept-Text_Strong concept-Text-red concept-Text-mb40">
												「仕事と私生活をうまく調和させ互いに良い影響を与えあう循環づくり」
											</span>

											<span class="concept-Text">と定義し実現に取り組みます。</span>
										</p>

								</div>
							</div>
						</div>
					</div>

				</div>
			</section>

			<section class="concept-Base_Slide concept-Content concept-Content-Slide3 concept-Slide3 fp-auto-height-responsive">
				<div class="concept-Base_SlideInner">

					<header class="concept-Section_Header panel-Head">
						<h1 class="concept-Section_HeaderTitle">CONCEPT</h1>
					</header>

					<div class="concept-Base_Inner st-Content_Inner">
						<div class="panel-Body panel-Body_DropShadow concept-Base_Panel">

							<div class="concept-Base_Unit concept-Slide3_Unit">

								<div class="concept-Animation-FromLeft concept-Animation-Delay1">
									<div class="concept-Slide3_UnitInner">
										<figure class="concept-Slide3_ImageUnit">
											<img src="<?php bloginfo('template_directory') ?>/images/logo@2x.png">
										</figure>
									</div>
									<p class="concept-Text_Signature">
										株式会社　ジーアーツ<br>
										代表取締役　
									</p>
								</div>
							</div>
						</div>
					</div>

				</div>
			</section>


			<footer id="colophon" class="site-footer sw-Whole sw-Footer fp-auto-height fp-auto-height-responsive">
				<div class="site-info">

					<section class="st-Content_Inner sw-Footer_Inner">


<!--						<div class="sw-Footer_AnchorTopArea"><a href="#anchorTop"><img src="--><?php //bloginfo('template_directory');?><!--/images/footer/button_totop@2x.png" width="70" height="70"></a></div>-->
<!---->
<!--						<div class="sw-Footer_Contents">-->
<!---->
<!--							<div class="sw-Footer_LogoBox">-->
<!--								<a href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--"><img class="sw-Footer_Logo" src="--><?php //bloginfo('template_directory')?><!--/images/footer/logo_white.png" alt="flapsplan"></a>-->
<!--							</div>-->
<!---->
<!--							<ul class="sw-Footer_Navigation_List">-->
<!--								<li class="sw-Footer_NavigationItem"><a href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--">HOME</a></li>-->
<!--								<li class="sw-Footer_NavigationItem"><a href="--><?php //echo esc_url( home_url( '/topics' ) ); ?><!--"><span class="sw-Footer_NavigationLabel">TOPICS</span></a></li>-->
<!--								<li class="sw-Footer_NavigationItem"><a href="--><?php //echo esc_url( home_url( '/concept' ) ); ?><!--"><span class="sw-Footer_NavigationLabel">CONCEPT</span></a></li>-->
<!--								<li class="sw-Footer_NavigationItem"><a href="--><?php //echo esc_url( home_url( '/member' ) ); ?><!--"><span class="sw-Footer_NavigationLabel">MEMBER</span></a></li>-->
<!--								<li class="sw-Footer_NavigationItem"><a href="--><?php //echo esc_url( home_url( '/works' ) ); ?><!--"><span class="sw-Footer_NavigationLabel">WORKS</span></a></li>-->
<!--								<li class="sw-Footer_NavigationItem"><a href="--><?php //echo esc_url( home_url( '/service' ) ); ?><!--"><span class="sw-Footer_NavigationLabel">SERVICE</span></a></li>-->
<!--								<li class="sw-Footer_NavigationItem"><a href="--><?php //echo esc_url( home_url( '/about' ) ); ?><!--"><span class="sw-Footer_NavigationLabel">ABOUT</span></a></li>-->
<!--								<li class="sw-Footer_NavigationItem"><a href="--><?php //echo esc_url( home_url( '/contact' ) ); ?><!--"><span class="sw-Footer_NavigationLabel">CONTACT</span></a></li>-->
<!--							</ul>-->
<!--						</div>-->

						<small class="sw-Footer_CopyRight">&copy; 2018 FLAPSplan – All rights reserved.</small>

					</section>


					<!--			<a href="--><?php //echo esc_url( __( 'https://wordpress.org/', 'flapsplan' ) ); ?><!--">-->
					<!--				--><?php
					//				/* translators: %s: CMS name, i.e. WordPress. */
					//				printf( esc_html__( 'Proudly powered by %s', 'flapsplan' ), 'WordPress' );
					//				?>
					<!--			</a>-->
					<!--			<span class="sep"> | </span>-->
					<!--				--><?php
					//				/* translators: 1: Theme name, 2: Theme author. */
					//				printf( esc_html__( 'Theme: %1$s by %2$s.', 'flapsplan' ), 'flapsplan', '<a href="http://underscores.me/">xeArts</a>' );
					//				?>

				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div>

	</main><!-- #main -->
</div><!-- #primary -->

<script>
	jQuery(function($){
		// fullpage option
		$('.concept-Base').fullpage({
			anchors: ['slide1', 'slide2', 'slide3'],
			scrollingSpeed: 800,
			sectionSelector: '.concept-Base_Slide,.sw-Footer',
			verticalCentered: false,
			responsiveWidth: 737,
			afterSlideLoad: function(anchorLink){
				$(this).addClass('active');
			}
		});
	});
</script>

</div><!-- #content -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
