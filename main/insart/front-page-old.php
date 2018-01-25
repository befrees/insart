<!DOCTYPE html>

<html lang="en">

<head>

	<?php get_header('head') ?>

</head>

<body <?php body_class() ?>>

	<div class="wrapper">

		<header id="site-header" class="header header-image full-height header-full header-home header-color">

			<?php get_template_part( 'parts/top-line' ); ?>

			<div class="header-content flexbox flex-wrap text-center">

				<div class="header-caption h72">To be everywhere is to be nowhere.</div>

				<div class="header-subcaption text-warning">Lucius Annaeus Seneca (c. 4 BCE–65 CE)</div>

				<div class="heade-text h2">

					<p>We focus on what we do best: <br>FinTech & Java Engineering</p>

				</div>

			</div>

			<div class="header-bg" <?php echo  has_post_thumbnail($post->ID) ? 'style="background-image: url(' .get_the_post_thumbnail_url($post->ID, 'img_big') . ')"' : ''; ?>></div>

			<button class="go-down"><i class="ic-down"></i></button>

		</header>
		<div class="middle" id="middle">

			<div class="container">

				<?php while(have_posts()): the_post(); ?>

				<div class="row home-content">

					<div class="h1 text-center col-md-8 col-md-offset-2"><?= get_the_title(); ?></div>

					<div class="home-text col-md-10 col-md-offset-1 b1"><?= get_the_content() ?></div>

				</div>

				<div class="row block-home-engineering">

			<?php endwhile; ?>

				<?php $childs = get_pages(array('parent'=>$post->ID, 'sort_column' => 'menu_order') );

				// print_r($childs);

				foreach($childs as $child): setup_postdata($child); ?>

					<div class="col-md-6">

						<div class="_inner-item">

							<div class="_thumb text-center"><?php echo get_the_post_thumbnail($child->ID); ?></div>

							<div class="_title h3 text-center"><?php echo $child->post_title ?></div>

							<div class="_entry p1"><?php echo get_the_excerpt($child->ID); ?></div>

							<div class="_more b1"><a href="<?= get_permalink($child->ID) ?>">>Learn More</a></div>

						</div>

					</div>

				<?php endforeach; wp_reset_postdata(); ?>

					

				</div>

			</div>



		</div>

		<?php $clients = get_posts('post_type=client&numberposts=-1&orderby=menu_order&order=asc');

				// print_r($clients);

				 ?>
				 <?php /* ?>
<div class="container-fluid content-top content-bg">
                <div class="container">
                    <?php $page_clients = get_post(96); ?>
                    <div class="row">
                        <div class="page-entry col-md-9 col-md-offset-2">
                            <div class="h1 title-bracket"><?= $page_clients->post_title; ?></div>
                            <div class="content"><?= $page_clients->post_content ?></div>
                        </div>
                    </div>
                </div>
            </div>
				 <div class="container">
                    <div class="row clients-list flexbox flex-wrap">
                    <?php foreach($clients as $item): ?>
                        <div class="col-md-3 _item-client">
                            <div class="client-inner">
                                <figure class="_logo"><?php echo get_field('logo_svg', $item->ID) ?></figure>
                                <div class="_descr"><?php echo get_the_excerpt($item->ID); ?></div>
                                <?php if(get_field('show_case', $item->ID)): ?>
                                <div class="_more"><a href="<?php echo get_permalink($item->ID); ?>">> Check the Case Study</a></div>
                            <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
<?php */ ?>
		<div class="block-clients full-height flexbox flex-wrap">
			<div class="slider-clients">

				<?php foreach($clients as $client):

				// $cl_meta = get_metadata('post', $client->ID, '',1); ?>

				<!-- <pre><?php //print_r( get_field(  'baner',$client->ID )) ?></pre> -->

				<div class="slide-item">

					<div class="cl-logo">
						<?php if(!get_field('hide_client_logo', $client->ID)): ?>
						<?= get_post_meta( $client->ID, 'logo_svg', 1 ) ; ?>
							<?php endif; ?>
						</div>

					<div class="container flexbox flex-wrap">

						<div class="text-center _slide-inner">

							<div class="h1 _title"><?= get_post_meta( $client->ID, 'caption', 1 ); ?></div>

							<div class="slde-bottom-wrap">

								<div class="_descr fw300"><p><?= get_post_meta( $client->ID, 'baner_entry', 1 ); ?></p></div>

							</div>

						</div>

					</div>

					<div class="_more text-center">
					<?php if(get_field('show_case', $client->ID)): ?>
						<a href="<?= get_permalink($client->ID); ?>" class="btn btn-warning btn-sm">LEARN MORE</a>
					<?php endif; ?>
					</div>
					<?php $img = get_field(  'baner',$client->ID ); ?>

					<div class="bg-slide" style="background-image: url(<?php echo $img['sizes']['img_big'] ?>)"><div class="bg-mask"></div></div>

				</div>

				<?php endforeach; ?>

			</div>

				<div class="arrows-container"></div>
		</div>


		<div class="block-testimonials-home">

			<div class="container">

			<?php $reviews = get_posts('post_type=review'); ?>

				<div class="h2 title-block text-center">Clients Testimonials</div>

				<div class="block-testimonials-container">

					<div class="testimonials-slider dots-yellow">

						<?php foreach($reviews as $review): ?>

							<div class="item-testimnial">

								<div class="_photo text-center"><?php echo get_the_post_thumbnail($review->ID, 'img_278_278', array('class'=>'img-circle')); ?></div>

								<div class="_name"><?php echo $review->post_title ?></div>

								<div class="_post-human"><?php echo get_field('post', $review->ID) ?></div>

								<div class="_entry p1"><?php echo $review->post_excerpt ?></div>

								<div class="social-links">

								<?php if(get_field('b_link', $review->ID)): ?>

									<a href="<?= get_field('b_link', $review->ID) ?>" target="_blank"><i class="icon-soc ic-fb"><?php //include __DIR__ . "/img/svg/ic-fb.svg" ?></i></a>

								<?php endif; ?>

								<?php if(get_field('in_link', $review->ID)): ?>

									<a href="<?= get_field('in_link', $review->ID) ?>" target="_blank"><i class="icon-soc ic-in"><?php //include __DIR__ . "/img/svg/ic-in.svg" ?></i></a>

								<?php endif; ?>

								<?php if(get_field('twiter_link', $review->ID)): ?>

									<a href="<?= get_field('twiter_link', $review->ID) ?>" target="_blank"><i class="icon-soc ic-twit"><?php //include __DIR__ . "/img/svg/ic-twit.svg" ?></i></a>

								<?php endif; ?>

								</div>

							</div>

						<?php endforeach; ?>

					</div>

				</div>

			</div>

		</div> <!-- .block-testimonials-home -->

		<?php get_template_part( 'parts/bottom-block' ); ?>

		<?php get_template_part( 'parts/insights-block' ); ?>

		

	</div>

	<?php get_footer(); ?>

</body>

</html>