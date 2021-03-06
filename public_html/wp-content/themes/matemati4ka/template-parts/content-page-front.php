<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package matemati4ka
 */
?>

<?php
//	the_content();
?>

<section id="fh5co-home" data-section="home">
	<!-- Карусель -->
	<div id="myCarousel" class="carousel slide" data-interval="8000" data-ride="carousel">
		<!-- Индикаторы для карусели -->
		<ol class="carousel-indicators">
			<!-- Перейти к 0 слайду карусели с помощью соответствующего индекса data-slide-to="0" -->
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<!--Перейти к 1 слайду карусели с помощью соответствующего индекса data-slide-to="1"-->
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<!-- Перейти к 2 слайду карусели с помощью соответствующего индекса data-slide-to="2" -->
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>
		<!-- Слайды карусели -->
		<div class="carousel-inner">
			<h1 class="carousel__slogan">Чему бы ты ни учился, ты учишься для себя.</h1>
			<!-- Слайды создаются с помощью контейнера с классом item, внутри которого помещается содержимое слайда -->
			<!-- Слайд №1 -->
			<div class="item active">
				<img class="carousel__img" src="<?php bloginfo('template_url') ?>/img/slider1.jpg" alt="Лекция по математике">
				<div class="carousel-caption to-animate">
					<q>Математика полезна уже тем, что она трудна.</q>
					<a href="https://ru.wikipedia.org/wiki/Александров,_Александр_Данилович"
					   target="_blank"
					   title="Александр Данилович Александров о математике"> Александров&nbsp;А.Д.</a>
				</div>
			</div>
			<!-- Слайд №2 -->
			<div class="item">
				<img class="carousel__img" src="<?php bloginfo('template_url') ?>/img/slider2.jpg" alt="Школьник-вундеркинд">
				<div class="carousel-caption to-animate">
					<q> Везде, где это возможно, считайте. </q>
					<a href="https://ru.wikipedia.org/wiki/Гальтон,_Френсис"
					   target="_blank"
					   title="Фрэнсис Гальтон о математике"> Френсис&nbsp;Гальтон</a>
				</div>
			</div>
			<!-- Слайд №3 -->
			<div class="item">
				<img class="carousel__img" src="<?php bloginfo('template_url') ?>/img/slider3.jpg" alt="Преподаватель у доски">
				<div class="carousel-caption to-animate">
					<q> Великая книга природы написана математическими символами. </q>
					<a href="https://ru.wikipedia.org/wiki/Галилейд,_Галилео"
					   target="_blank"
					   title="Галилей о математике"> Галилео&nbsp;Галилей</a>
				</div>
			</div>
		</div>

		<!-- Навигация для карусели -->
		<!-- В данном случае нам не понадобится, поэтому закомментируем -->
		<!-- Кнопка, осуществляющая переход на предыдущий слайд с помощью атрибута data-slide="prev" -->
		<!--<a class="carousel-control left" href="#myCarousel" data-slide="prev">-->
		<!--<span class="glyphicon glyphicon-chevron-left"></span>-->
		<!--</a>-->
		<!-- Кнопка, осуществляющая переход на следующий слайд с помощью атрибута data-slide="next" -->
		<!--<a class="carousel-control right" href="#myCarousel" data-slide="next">-->
		<!--<span class="glyphicon glyphicon-chevron-right"></span>-->
		<!--</a>-->
	</div>
	<div class="slant"></div>
</section>

<section id="fh5co-intro">
	<div class="container">
		<div class="row row-bottom-padded-lg">
			<div class="fh5co-block to-animate">
				<div class="overlay-darker"></div>
				<div class="overlay"></div>
				<div class="fh5co-text">
					<i class="fh5co-intro-icon icon-square"></i>
					<h2>Школьная математика</h2>
					<p>Я преподаю математику с 5 по 9 класс. Наработанные мною материалы можно посмотреть здесь</p>
					<p><a href="http://matemati4ka.esy.es/2017/02/25/articles/school-math/math-5/start-kontrol-work5/" class="btn btn-primary">Подсмотреть!</a></p>
				</div>
			</div>
			<div class="fh5co-block to-animate">
				<div class="overlay-darker"></div>
				<div class="overlay"></div>
				<div class="fh5co-text">
					<i class="fh5co-intro-icon icon-direction"></i>
					<h2>Классное руководство</h2>
					<p>Если вас интересует как я справляюсь с тридцатью детьми и
						добираюсь живой домой, вам сюда.</p>
					<p><a href="http://matemati4ka.esy.es/2017/02/14/articles/class-managment/class_teacher-duty/1-8" class="btn btn-primary">Как?</a></p>
				</div>
			</div>
			<div class="fh5co-block to-animate">
				<div class="overlay-darker"></div>
				<div class="overlay"></div>
				<div class="fh5co-text">
					<i class="fh5co-intro-icon icon-parents"></i>
					<h2>Работа с родителями</h2>
					<p>Успех в работе с детьми зависит от того, станут ли их родители твоими верными союзниками и пощниками.</p>
					<p><a href="http://matemati4ka.esy.es/2017/02/14/articles/for-parents/сhildrens-rights/live" class="btn btn-primary">Зачем?</a></p>
				</div>
			</div>
		</div>
		<div class="row watch-video text-center to-animate">
			<span>Будни в школе</span>
			<a href="https://www.youtube.com/watch?v=ZGC9gzZ4PF0"
			   class="popup-video btn-video"><i></i></a>
		</div>
	</div>
</section>

<!-- Секция РАБОТА -->
<section id="fh5co-work" data-section="portfolio">
	<div class="container">

		<!-- Заголовок и вводный текст -->
		<div class="row">
			<div class="col-md-12 section-heading text-center">
				<h2 class="to-animate"><?php echo get_cat_name(3) ?></h2>
				<div class="row">
					<div class="col-md-8 col-md-offset-2 subtext to-animate">
						<h3><?php echo category_description(3) ?></h3>
					</div>
				</div>
			</div>
		</div>

		<!-- вывод 6 записей -->
		<div class="row row-bottom-padded-sm"> <?php
				$args = array('posts_per_page' => 6, 'category' => 3);
				$myposts = get_posts($args);
				foreach($myposts as $post) {
					setup_postdata( $post ); ?>
					<div class="col-md-4 col-sm-6 col-xxs-12">
						<?php
						// check if the post has a Post Thumbnail assigned to it.
						if ( has_post_thumbnail() ) {
							$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' ); ?>
							<a class="fh5co-project-item image-popup to-animate" href="
							<?php echo $large_image_url[0]; ?>" title="<?php the_title_attribute(); ?>"> <?php
								the_post_thumbnail( array( 360, 510 ), 'class=img-responsive' ); ?>
								<div class="fh5co-text">
									<h2><?php the_title(); ?></h2>
									<span><?php the_content(); ?></span>
								</div>
							</a> <?php
						} ?>
					</div> <?php
				}
				wp_reset_postdata();
			?>
		</div>
	</div>
</section>

<!-- Секция ОТЗЫВЫ -->
<section id="fh5co-testimonials" data-section="testimonials">
	<div class="container">

		<!-- Заголовок и вводный текст -->
		<div class="row">
			<div class="col-md-12 section-heading text-center">
				<h2 class="to-animate"><?php echo get_cat_name(4) ?></h2>
				<div class="row">
					<div class="col-md-8 col-md-offset-2 subtext to-animate">
						<h3><? echo category_description(4) ?></h3>
					</div>
				</div>
			</div>
		</div>

		<!-- вывод трёх записей -->
		<div class="row"> <?php
			$args = array('posts_per_page' => 3, 'category' => 4);
			$myposts = get_posts($args);
			foreach($myposts as $post) {
				setup_postdata($post); ?>
				<div class="col-md-4">
					<div class="box-testimony">
						<blockquote class="to-animate-2">
							<p><?php the_content(); ?></p>
						</blockquote>
						<div class="author to-animate">
							<i class="testimony__icon <?php echo get_post_meta($post->ID, 'icon-id', true) ?>"></i>
							<p><?php echo the_title() ?></p>
						</div> <!-- end .autor -->
					</div>
				</div> <?php
			}
			wp_reset_postdata() ?>
		</div> <!-- end .row -->
	</div> <!-- end .container -->
</section>

<!-- Секция МОИ НАВЫКИ -->
<section id="fh5co-services" data-section="services">
	<div class="container">

		<!-- Заголовок и вводный текст -->
		<div class="row">
			<div class="col-md-12 section-heading text-left">
				<h2 class=" left-border to-animate"><?php echo get_cat_name(1) ?></h2>
				<div class="row">
					<div class="col-md-8 subtext to-animate">
						<h3><?php echo category_description(1) ?></h3>
					</div>
				</div>
			</div>
		</div>

		<!-- вывод 2 записей -->
		<div class="row">
			<?php
			$args = array('posts_per_page' => 2, 'category' => 1);
			$myposts = get_posts($args);
			foreach($myposts as $post) {
				setup_postdata( $post ); ?>
				<div class="col-md-6 col-sm-6 fh5co-service to-animate">
					<i class="icon to-animate-2 <?php echo get_post_meta($post->ID, 'icon-id', true) ?>"></i>
					<h3><?php the_title() ?></h3>
					<ul><?php the_content() ?></ul>
				</div> <?php
			}
			wp_reset_postdata() ?>
			<div class="clearfix visible-sm-block"></div>
		</div>
	</div>
</section>

<!-- Секция ОБО МНЕ -->
<section id="fh5co-about" data-section="about">
	<div class="container">

		<!-- Заголовок и вводный текст -->
		<div class="row">
			<div class="col-md-12 section-heading text-center">
				<h2 class="to-animate"><?php echo get_cat_name(5) ?></h2>
				<div class="row">
					<div class="col-md-8 col-md-offset-2 subtext to-animate">
						<h3><?php echo category_description(5) ?></h3>
					</div>
				</div>
			</div>
		</div>

		<!-- Вывод записи -->
		<div class="row">
			<?php
			$args = array('posts_per_page' => 1, 'category' => 5);
			$myposts = get_posts($args);
			foreach($myposts as $post) {
				setup_postdata($post); ?>
				<div class="col-md-12">
					<div class="text-center to-animate ksa-about_content"> <?php
						// check if the post has a Post Thumbnail assigned to it.
						if(has_post_thumbnail()) {
							the_post_thumbnail("post_thumbnail", "style=margin-bottom:50px");
						}
						the_content() ?>
					</div>
				</div> <?php
			} ?>
		</div>
	</div>
</section>

<!-- Секция МОЯ СТАТИСТИКА -->
<section id="fh5co-counters"
         style="background-image: url(<?php bloginfo('template_url') ?>
	         /img/blackboard.jpg);" data-stellar-background-ratio="0.5">
	<div class="fh5co-overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 section-heading text-center to-animate">
				<h2>МОЯ СТАТИСТИКА</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="fh5co-counter to-animate">
					<i class="fh5co-counter-icon icon-suitcase to-animate-2"></i>
					<span class="fh5co-counter-number js-counter" data-from="0" data-to="11" data-speed="5000" data-refresh-interval="50">24</span>
					<span class="fh5co-counter-label">Выпущено классов</span>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="fh5co-counter to-animate">
					<i class="fh5co-counter-icon icon-layers to-animate-2"></i>
					<span class="fh5co-counter-number js-counter" data-from="0" data-to="23409" data-speed="5000" data-refresh-interval="50">23409</span>
					<span class="fh5co-counter-label">Проверено контрольных</span>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="fh5co-counter to-animate">
					<i class="fh5co-counter-icon icon-parents to-animate-2"></i>
					<span class="fh5co-counter-number js-counter" data-from="0" data-to="232" data-speed="5000" data-refresh-interval="50">302</span>
					<span class="fh5co-counter-label">Благодарных родителей</span>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="fh5co-counter to-animate">
					<i class="fh5co-counter-icon icon-coffee to-animate-2"></i>
					<span class="fh5co-counter-number js-counter" data-from="0" data-to="452" data-speed="5000" data-refresh-interval="50">749</span>
					<span class="fh5co-counter-label">Выпито чашек кофе :)</span>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Секция КОНТАКТЫ -->
<section id="fh5co-contact" data-section="contact">
	<div class="container">
		<!-- Заголовок и вводный текст -->
		<div class="row">
			<div class="col-md-12 section-heading text-center">
				<h2 class="to-animate"><?php echo get_cat_name(7) ?></h2>
				<div class="row">
					<div class="col-md-8 col-md-offset-2 subtext to-animate">
						<h3><?php echo category_description(7) ?></h3>
					</div>
				</div>
			</div>
		</div>

		<!-- Вывод четырёх записей -->
		<div class="row row-bottom-padded-md">
			<div class="col-md-6 to-animate">
				<h3>Контактная информация</h3>
				<ul class="fh5co-contact-info"> <?php
					$args = array('posts_per_page' => 4, 'category' => 7);
					$myposts = get_posts($args);
					foreach($myposts as $post) {
						setup_postdata($post); ?>
						<li>
							<i class="<?php echo get_post_meta($post->ID, 'icon-id', true)  ?>"></i>
							<?php the_content() ?>
						</li> <?php
					}
					wp_reset_postdata() ?>
				</ul>
			</div>

			<div class="col-md-6 to-animate">
				<!-- Заголовок контейнера -->
				<h3>Напишите мне письмо</h3>

				<!-- Форма обратной связи -->
			 	<?php echo do_shortcode( '[contact-form-7 id="532" title="ksa-contact-form"]' ); ?>
			</div>
		</div>
	</div>
	<div id="map" class="to-animate"></div>
</section>