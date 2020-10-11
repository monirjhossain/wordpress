<?php 
/*
Template Name:zboom-home
*/ 
?>

<?php get_header();?>

<div class="featured">
	<div class="wrap-featured zerogrid">
		<div class="slider">
			<div class="rslides_container">
				<ul class="rslides" id="slider">

					<?php 


					$data = new WP_Query(array('post_type'=>'sliders'));

					while($data->have_posts()): $data->the_post();

					 ?>
					<li><?php the_post_thumbnail(); ?></li>
					<?php endwhile; ?>

				</ul>
			</div>
		</div>
	</div>
</div>

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block01">
			<?php 
					$data = new WP_Query(array('post_type'=>'services'));
					while($data->have_posts()): $data->the_post();
					 ?>

			<div class="col-1-3">
				<div class="wrap-col box">
					<h2><?php the_title(); ?></h2>
					<p><?php the_content(); ?></p>
					<div class="more"><a href="#">[...]</a></div>
				</div>
			</div>
			<?php endwhile; ?>
			
		</div>
		<div class="row block02">
			<div class="col-2-3">
				<div class="wrap-col">
					<div class="heading"><h2>Latest Blog</h2></div>
	

					<?php 
						$blog = new WP_Query(array('post_type'=>'post'));
						if($blog->have_posts()):
							while($blog->have_posts()): $blog->the_post();

						 ?>


					<article class="row">
						<div class="col-1-3">
							<div class="wrap-col">
								<?php the_post_thumbnail(); ?>
							</div>
						</div>
						<div class="col-2-3">
							<div class="wrap-col">
								<h2><a href="#"><?php the_title(); ?></a></h2>
								<div class="info">By <?php the_author(); ?> on <?php the_date(); ?> with <a href="#">01 Commnets</a></div>
								<p><?php the_content(); ?></p>
							</div>
						</div>
					</article>

					<?php endwhile; endif; ?>
					
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<div class="box">
						<div class="heading"><h2>Latest Albums</h2></div>
						<div class="content">
							<img src="<?php echo get_template_directory_uri();?>/images/albums.png"/>
						</div>
					</div>
					<div class="box">
						<div class="heading"><h2>Upcoming Events</h2></div>
						<div class="content">
							<div class="list">
								<ul>
									<li><a href="#">Magic Island Ibiza</a></li>
									<li><a href="#">Bamboo Is Just For You</a></li>
									<li><a href="#">Every Hot Summer</a></li>
									<li><a href="#">Magic Island Ibiza</a></li>
									<li><a href="#">Bamboo Is Just For You</a></li>
									<li><a href="#">Every Hot Summer</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--------------Footer--------------->
<?php get_footer(); ?>