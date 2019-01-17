<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main namespace-Main">

<!--			--><?php
//
//			/* Start the Loop */
//			while ( have_posts() ) :
//				the_post();
//
//				get_template_part( 'template-parts/content/content', 'page' );
//
//				// If comments are open or we have at least one comment, load up the comment template.
//				if ( comments_open() || get_comments_number() ) {
//					comments_template();
//				}
//
//			endwhile; // End of the loop.
//			?>

			<header id="anchor-pagetop" class="entry-header namespace-block">
				<?php
				if ( is_sticky() && is_home() && ! is_paged() ) {
					printf( '<span class="sticky-post">%s</span>', _x( 'Featured', 'post', 'twentynineteen' ) );
				}
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
				endif;
				?>
			</header><!-- .entry-header -->

			<div>

				<h3 id="top" class="namespace-block">	コンテンツ１- プルダウン-</h3>
				<div>
					<ul class="dropdown">
						<li><a href="#">テキスト1</a></li>
						<li>
							<a href="#">テキスト2</a>
							<ul>
								<li><a href="#">b1</a></li>
								<li><a href="#">b1</a></li>
							</ul>
						</li>
						<li>
							<a href="#">テキスト3</a>
							<ul>
								<li><a href="#">c1</a></li>
								<li><a href="#">c1</a></li>
							</ul>
						</li>
						<li><a href="#">テキスト4</a></li>
						<li><a href="#">テキスト5</a></li>
					</ul>
				</div>

				<hr>

				<div id="textslide" class="namespace-block">
					<h3>コンテンツ2 -横からのスライド -<i class="fa fa-angle-up" aria-hidden="true"></i></h3>
					<!--  cssのみでanimationを実装　-->
					<p class="text-slide_FromRight">
						本文２、本文２、本文２、本文２、本文２、本文２<br>
						本文２、本文２、本文２、本文２、本文２、本文２<br>
						本文２、本文２、本文２、本文２、本文２、本文２<br>
						本文２、本文２、本文２、本文２、本文２、本文２<br>
					</p>

					<p class="text-slide_FromLeft transition-delay-1">
						少し遅れて右から,,,本文２、本文２、本文２、本文２、本文２、本文２<br>
						少し遅れて右から,,,本文２、本文２、本文２、本文２、本文２、本文２<br>
						少し遅れて右から,,,本文２、本文２、本文２、本文２、本文２、本文２<br>
						少し遅れて右から,,,本文２、本文２、本文２、本文２、本文２、本文２<br>
					</p>
				</div>

				<hr>

				<div class="namespace-block">
					<h3 class="arrow-delta-title">コンテンツ3 -下つき三角を簡単なcssで表現 -</h3>
					<p>本文３　本文３　本文３　本文３</p>
					<figure><img src="<?php bloginfo('template_directory');?>/images/walk-640.jpg" alt="image画像"></figure>
				</div>

				<hr>

				<div id="accordion" class="namespace-block">
					<h3>アコーディオン</h3>

					<!--  javascriptのみで実装 (jQueryの読み込みはしていない)　-->

					<span class="accordion-open">コンテンツ4- アコーディオン - <i class="fas fa-arrow-circle-down"></i><small>(開く)</small></span>

					<div class="accordion-content">
						<ul>
							<li>
								<p>テキスト1</p>
								<p>説明１説明１</p>

							</li>
							<li>
								テキスト2
								<p>説明2説明2</p>
							</li>
							<li>
								テキスト3
								<p>説明３説明３</p>
							</li>
							<li>
								テキスト4
								<p>説明４説明４</p>
							</li>
							<li>
								テキスト5
								<p>説明５説明５</p>
							</li>
						</ul>

						<small class="accordion-close">閉じる<i class="fas fa-times-circle"></i></small>
					</div>
				</div>

				<script>
				jQuery(function($) {
					$('.accordion-open').click(function (e) {
						var $hide_content = $('.accordion-content');

						$($hide_content).slideToggle(500);

//						if($('i', this).hasClass('fa-chevron-circle-down')){
//							$('i', this).removeClass('fa-chevron-circle-down').addClass('fa-times-circle');
//						}else{
//							$('i', this).addClass('fa-chevron-circle-down').removeClass('fa-times-circle');
//						}
					});

					$('.accordion-close').click(function (e) {
						var $hide_content = $('.accordion-content');

						$($hide_content).slideToggle(500);

//						if($('i', this).hasClass('fa-chevron-circle-down')){
//							$('i', this).removeClass('fa-chevron-circle-down').addClass('fa-times-circle');
//						}
					});
				});

				</script>

				<!-- アコーディオンここまで -->

				<hr>

				<div class="animate-on-70 namespace-block">
					<h3>コンテンツ５ -ふわっと浮き出る - </h3>

					<!--
						function.phpでjQueryを読み込み、javascriptを作成
					　-->

					<p class="">本文4、本文4、本文4、本文4、本文4、本文4、</p>
					<figure><img src="<?php bloginfo('template_directory');?>/images/tea-plantation-640.jpg" alt="image画像"></figure>
					<p>本文5、本文5、本文5、本文5、本文5、本文5、</p>
				</div>

				<script>
					jQuery(function($) {
						var controller = new ScrollMagic.Controller({globalSceneOptions: {duration: 500}});

						$('.animate-on-70').each(function () {
							new ScrollMagic.Scene({triggerElement: this, triggerHook: 0.7})
								.on("start", function (event) {

									var element = event.target.triggerElement();

									$(element).toggleClass('animate-active');
									// $(element).toggleClass("concept-Animation_LeftToRight");

								})
								.addTo(controller);
						});
					});
				</script>

				<!-- ふわっと浮き出るAnimationここまで -->

				<hr>

				<div id="modal" class="namespace-block">
					<h3>コンテンツ６-モーダル - </h3>
					<p>モーダルを実装</p>

					<!--
						参考：http://bashalog.c-brains.jp/17/02/28-103000.php
								 https://on-ze.com/archives/6971
								 2つのファイルを読み込みして実装
								 <link rel="stylesheet" href="//cdn.jsdelivr.net/modaal/0.3.1/css/modaal.min.css">
								 <script src="//cdn.jsdelivr.net/modaal/0.3.1/dist/js/modaal.min.js">
					 -->

					<script>
						(function($){

							// モーダルのデフォルト設定を変更する
							$.fn.modaal.options.overlay_opacity = 0.6;
						})(jQuery);
					</script>

					<a class="recommend-Anchor modaal"  href="#modal-Recommend"
						 data-modaal-custom-class="modal-Recommend"
						 data-modaal-width="540">
						モーダル表示（売るなら今です）
					</a>
					<div id="modal-Recommend" class="modal-Template">
						<div class="modal-Recommend_Header">
							<p class="modal-Recommend_HeaderText">売るなら今です！</p>
						</div>

						<div class="modal-Recommend_Content">
							<p class="modal-Recommend_Text modal-Recommend_Text-1">
								商品の価格は、発売後、<br>
								毎週値下がりしてしまいます。<br>
								今が最高値の可能性が高いです。<br>
								<span class="modal-Recommend_Text-emphasis">売るなら今です！</span><br>
							</p>
							<p class="modal-Recommend_Text modal-Recommend_Text-2">ぜひこのまま<br>買取お申し込みにお進みください。</p>
						</div>

						<div class="form-Submit modal-Recommend_Submit">
							<button type="submit" class="btn btn-block form-Button">
								<i class="fas fa-chevron-circle-left form-Button_Icon form-Button_Icon-prev"></i>
								申込に戻る
							</button>
						</div>
					</div><!--モダール表示　（売るなら今です）ここまで-->

					<script>
						$(document).separationPopup();
					</script>

				</div>

				<hr>

				<div id="slick" class="namespace-block">
					<h3>
						slickを実装
					</h3>

					<!--
          	function.phpでjQuery,ダウンロードしたslickのjsファイルとcssファイル(_slick.scssと_slick-theme.scss)を読み込みをした上で、カスタマイズ
          	http://kenwheeler.github.io/slick/
        　-->

					<ul class="slick_List">
						<li>
							<img src="<?php echo get_template_directory_uri()?>/images/asset1.jpg" alt="">
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri()?>/images/asset2.png" alt="">
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri()?>/images/asset3.png" alt="">
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri()?>/images/asset4.png" alt="">
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri()?>/images/asset5.png" alt="">
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri()?>/images/asset6.png" alt="">
						</li>

					</ul>

				</div><!-- slick -->
				<script>
					jQuery(function($){
						$('.slick_List').slick({
							infinite: true,
							slidesToScroll: 1,
							slidesToShow: 3,
							centerPadding: '20px',
							dots: true,
							arrows: true,
							centerMode: true,
							responsive: [
								{
									breakpoint: 768,
									settings: {
										centerMode: true,
										centerPadding: '20px',
										slidesToShow: 2
									}
								},
								{
									breakpoint: 480,
									settings: {
										arrows: false,
										centerMode: true,
										centerPadding: '20px',
										slidesToShow: 1
									}
								}
							]

						});
					});
				</script>

				<section class="top-MainImage">

					<ul>
						<li>
							<img src="<?php echo get_theme_file_uri('images/dirt-road-1280.jpg')?>" alt="">
						</li>
						<li>
							<img src="<?php echo get_theme_file_uri('images/sunrise-1280.jpg')?>" alt="">
						</li>
						<li>
							<img src="<?php echo get_theme_file_uri('images/dirt-road-1920.jpg')?>" alt="">
						</li>
						<li>
							<img src="<?php echo get_theme_file_uri('images/snowman-1920.jpg')?>" alt="">
						</li>
						<li>
							<img src="<?php echo get_theme_file_uri('images/road-1920.jpg')?>" alt="">
						</li>
					</ul>
					<script>
						jQuery(function($){
							$('.top-MainImage ul').slick({
								autoplay: true,
								arrows: false,
								fade: true
							});
						});
					</script>

				</section><!-- /.top-MainImage-->


				<div>

					スマートスクロール

					<script>
						$(function(){
							// #で始まるリンクをクリックしたら実行されます
							$('a[href^="#"]').click(function() {
								// スクロールの速度
								var speed = 400; // ミリ秒で記述
								var href= $(this).attr("href");
								var target = $(href == "#" || href == "" ? 'html' : href);
								var position = target.offset().top;
								$('body,html').animate({scrollTop:position}, speed, 'swing');
								return false;
							});
						});
//					</script>

					<ul>
						<li class="underLine-animation">
							<a href="#top">topへ戻る</a>
						</li>
						<li class="underLine-animation">
							<a href="#textslide">横からのスライドへ</a>
						</li>
						<li class="underLine-animation">
							<a href="#accordion">アコーディオンへ</a>
						</li>
						<li class="underLine-animation">
							<a href="#modal">モーダルへ</a>
						</li>
						<li class="underLine-animation">
							<a href="#slick">slickへ</a>
						</li>
					</ul>

				</div>

				<hr>

				タブ

				<ul class="service-Tab js_tab">
					<li class="js_tab1 js_tab_color js_tab_current_color">タブ１</li>
					<li class="js_tab2 js_tab_color">タブ２</li>
				</ul>

				<div class="js_tab_content js_tab_current_content js_tab_content-1">
					タブ１のコンテンツ
				</div>

				<div class="js_tab_content js_tab_content-2">
					タブ2のコンテンツ
				</div>


			</div>

			<footer>
			<button id="fadeInFix_AnchorTopButton">
				<a href="#anchor-pagetop">

<!--					<img src="--><?php //bloginfo('template_directory'); ?><!--/images/common/page-top.png" alt=""><br>-->
					ページTOPへ
				</a>
			</button>
			</footer>


		</main><!-- #main -->
	</section><!-- #primary -->

<script>
	$(function() {

		var w =$(window).width();
		if (w > 768){
			var topBtn = $('#fadeInFix_AnchorTopButton');
			topBtn.hide();
			//スクロールが100に達したらボタン表示

			$(window).scroll(function () {
				if ($(this).scrollTop() > 100) {
					topBtn.fadeIn();
				} else {
					topBtn.fadeOut();
				}
			});
		}

		//スクロールしてトップ
		topBtn.click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 500);
			return false;
		});
	});
</script>
<?php
get_footer();
