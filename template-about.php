<?php 
/* 
Template Name: About Template
*/

get_header(); ?>

       <?php while ( have_posts() ) :
			the_post(); ?>
		<!-- ::::::::::::::::::::: Page Title Section:::::::::::::::::::::::::: -->
		<section <?php if(has_post_thumbnail()) : ?> style="background-image: url(<?php the_post_thumbnail_url('large') ?>) " <?php endif; ?> class="page-title">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!-- breadcrumb content -->
						<div class="page-breadcrumbd">
							<h2><?php the_title(); ?></h2>
							<p><a href="<?php echo site_url(); ?>">Home</a> / <a href="">Pages</a> /<?php the_title(); ?></p>
						</div><!-- end breadcrumb content -->
					</div>
				</div>
			</div>
		</section><!-- end breadcrumb -->
	
		<section class="block about-us-block section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!-- block text -->
						<div class="block-text">
							<?php the_content();  ?>
						</div>
					</div>
					
				</div>
			</div>
		</section>


        <?php get_template_part('content/promo'); ?>

		<section class="section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="block-text">
							<h2>A Finance Agency Crafting Beautiful &amp; Engaging Online Experiences</h2>
							<p>Seamlessly communicate distinctive alignments and business models. Efficiently whiteboard robust meta-services whereas stand-alone synergy. Enthusiastically engage premier supply chains after intuitive testing procedures. Conveniently parallel task robust imperatives through corporate customer service.</p> 
							
							<p>Dynamically productivate tactical mindshare via business collaboration and idea-sharing. Credibly conceptualize extensive schemas for functionalized metrics. </p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="block-img">
							<img src="http://localhost/borhan/wp-content/themes/neuron/assets/img/homepageblock.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
		</section>

        <?php endwhile; ?>

<?php get_footer(); ?>