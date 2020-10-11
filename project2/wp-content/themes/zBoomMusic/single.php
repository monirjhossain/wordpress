
<?php get_header();?>
<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">
					<?php
									if(have_posts()):

										while(have_posts()): the_post();
								?>
								<article>
                                    <?php the_post_thumbnail(); ?>
									<img src="<?php echo get_template_directory_uri(); ?>/images/img1.png"/>
									<h2><a href="#"><?php the_title();?></a></h2>
									<div class="info">[By Admin on December 01, 2020 wit <a href="#">01 Comment</a>]</div>
									<p><?php the_content(); ?></p>
								</article>
								<?php 

							endwhile;
						endif;

								 ?>
					<article>
						<img src="images/img2.png"/>
						<h2><a href="#">Welcome To Our Great Site</a></h2>
						<div class="info">[By Admin on December 01, 2012 with <a href="#">01 Commnets</a>]</div>
						<p>Consectetur adipisci. Belit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore ater magnam aliquam quaerat voluptatem. ut enim ad minima ven m, quis nost. Rum exercitationem ullam...</p>
					</article>
					<ul id="pagi">
						<li><a class="current" href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">next</a></li>
					</ul>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<div class="box">
						<div class="heading"><h2>Latest Albums</h2></div>
						<div class="content">
							<img src="images/albums.png"/>
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
<?php get_footer();?>

</body></html>