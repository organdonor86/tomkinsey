<?php
    /**
    * Template Name: Index
    */
?>

<?php get_header(); ?>

<!-- SLIDER -->
<section id="slider">
	<div id="home-carousel" class="carousel slide" data-ride="carousel" data-interval="8000">
		<div class="carousel-inner">
			<div class="item active" style="background-image: url(<?php echo get_field('slider_image_1')['url']; ?>)">
				<div class="carousel-caption container">
					<div class="row">
						<div class="col-sm-7">
							<h2>WYeah Yeah yeah</h2>
							<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor. Aenean sollicitudin, lorem quis bibendum auctor.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="item" style="background-image: url(<?php echo get_field('slider_image_2')['url']; ?>)">
				<div class="carousel-caption container">
					<div class="row">
						<div class="col-sm-7">
							<h2>creative world</h2>
							<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor. Aenean sollicitudin, lorem quis bibendum auctor.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="item" style="background-image: url(<?php echo get_field('slider_image_3')['url']; ?>)">
				<div class="carousel-caption container">
					<div class="row">
						<div class="col-sm-7">
							<h2>creative world</h2>
							<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor. Aenean sollicitudin, lorem quis bibendum auctor.</p>
						</div>
					</div>
				</div>
			</div>
			<a class="home-carousel-left" href="#home-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
			<a class="home-carousel-right" href="#home-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
		</div>
	</div> <!--/#home-carousel-->
</section>
<!-- /SLIDER -->


<!-- INTRO -->
<section class="intro">
<div class="container">
	<div class="row">
		<div class="col-md-12">
      <div class="body-wrap"
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    	    <?php the_field('business_intro'); ?>

          <?php endwhile; else :?>
      	  <p><?php _e( 'Sorry, nothing here!' ); ?></p>
        <?php endif; ?>
      </div>
		</div>
	</div>
</div>
</section>


<!-- SERVICES -->
<section id="services">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h1>Services</h1>
					<span class="st-border"></span>
				</div>
				<p>Here are the services we offer at the moment sort of thing...</p>
			</div>

			<div class="portfolio-wrapper" >
			<div class="portfolio-items">

				<div class="col-lg-4 col-sm-12 work-grid">
					<div class="portfolio-content">
						<img class="img-responsive" src="wp-content/themes/tomkinseyfencingandlandscaping/images/works/portfolio-4.jpg" alt="">
						<div class="portfolio-overlay">
							<a href="./images/works/portfolio-4.jpg"><i class="fa fa-camera-retro"></i></a>
							<h5>Web Development</h5>
							<p>Design, Develop</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-12 work-grid">
					<div class="portfolio-content">
						<img class="img-responsive" src="wp-content/themes/tomkinseyfencingandlandscaping/images/works/portfolio-5.jpg" alt="">
						<div class="portfolio-overlay">
							<a href="./images/works/portfolio-5.jpg"><i class="fa fa-camera-retro"></i></a>
							<h5>Web Development</h5>
							<p>Design, Develop</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-12 work-grid">
					<div class="portfolio-content">
						<img class="img-responsive" src="wp-content/themes/tomkinseyfencingandlandscaping/images/works/portfolio-6.jpg" alt="">
						<div class="portfolio-overlay">
							<a href="./images/works/portfolio-6.jpg"><i class="fa fa-camera-retro"></i></a>
							<h5>Web Development</h5>
							<p>Design, Develop</p>
						</div>
					</div>
				</div>

			</div>
			</div>

		</div>
	</div>
</section>
<!-- /SERVICES -->



<!-- TESTIMONIAL -->
	<section id="testimonial">
		<div class="container">
			<div class="row">
				<div class="overlay"></div>
				<div class="col-md-8 col-md-offset-2 col-sm-12">
					<div class="st-testimonials">

						<div class="item active text-center">
							<p>"Pug distillery narwhal bushwick, scenester qui roof party marfa mustache. Taxidermy cliche sriracha cillum prism leggings. Kogi scenester quis affogato, craft beer roof party odio microdosing mumblecore nisi cornhole XOXO normcore chillwave skateboard."</p>
							<div class="st-border"></div>
							<div class="client-info">
								<h5>Tom Roof</h5>
								<span>CEO of Domain.com</span>
							</div>
						</div>

						<div class="item text-center">
							<p>"Leggings synth polaroid cray consequat, +1 esse mustache. Disrupt excepteur skateboard, jianbing leggings fap bicycle rights. Freegan cornhole gluten-free aliquip chartreuse wolf."</p>
							<div class="st-border"></div>
							<div class="client-info">
								<h5>Mustafiz</h5>
								<span>CEO of Domain.com</span>
							</div>
						</div>

						<div class="item text-center">
							<p>"Keffiyeh hoodie quis williamsburg neutra. Snackwave velit put a bird on it etsy tousled shoreditch. Shoreditch schlitz craft beer narwhal, est vape hoodie fanny pack chicharrones crucifix minim skateboard."</p>
							<div class="st-border"></div>
							<div class="client-info">
								<h5>Sean Hynes</h5>
								<span>CEO of Domain.com</span>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /TESTIMONIAL -->




<!-- CONTACT -->
<section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h1>Contact us</h1>
					<span class="st-border"></span>
				</div>
			</div>
			<div class="col-sm-4 contact-info">
				<p class="contact-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae voluptatum dolorum, possimus tenetur pariatur officia, quo commodi autem doloribus vero rerum aspernatur quidem temporibus.</p>
				<p class="st-address"><i class="fa fa-map-marker"></i> <strong>E71 8th Ave, New York NY 21001, US</strong></p>
				<p class="st-phone"><i class="fa fa-mobile"></i> <strong>+00 123-456-789</strong></p>
				<p class="st-email"><i class="fa fa-envelope-o"></i> <strong>email@yourdomain.com</strong></p>
				<p class="st-website"><i class="fa fa-globe"></i> <strong>www.yourdomain.com</strong></p>

			</div>
			<div class="col-sm-7 col-sm-offset-1">
				<form action="php/send-contact.php" class="contact-form" name="contact-form" method="post">
					<div class="row">
						<div class="col-sm-6">
							<input type="text" name="name" required="required" placeholder="Name*">
						</div>
						<div class="col-sm-6">
							<input type="email" name="email" required="required" placeholder="Email*">
						</div>
						<div class="col-sm-6">
							<input type="text" name="subject" placeholder="Subject">
						</div>
						<div class="col-sm-6">
							<input type="text" name="website" placeholder="Website">
						</div>
						<div class="col-sm-12">
							<textarea name="message" required="required" cols="30" rows="7" placeholder="Message*"></textarea>
						</div>
						<div class="col-sm-12">
							<input type="submit" name="submit" value="Send Message" class="btn btn-send">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<!-- /CONTACT -->

<?php get_footer(); ?>
