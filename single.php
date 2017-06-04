
<?php get_header(); ?>

	<!-- PAGE HEADER -->
	<section id="page-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
						<h1>Blog / <?php the_title(); ?></h1>
						<span class="st-border"></span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /PAGE HEADER -->


	<!-- BLOG -->
	<section id="blog">
		<div class="container">
			<div class="row">
				<div class="col-md-9">

              <div class="single-blog">
    						<article>
    							<div class="post-thumb">

                    <?php the_post_thumbnail( 'full', array( 'class'  => 'img-responsive' ) ); ?>

                  </div>
    							<!-- <h4 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4> -->
    							<div class="post-meta text-uppercase">
    								<span><?php the_date(); ?></span>
    								<span>In <?php the_category(', '); ?></span>
    								<span>By <?php the_author_posts_link(); ?></span>
    							</div>
    							<div class="post-article">
                    <?php the_content(); ?>
                    <?php comments_template(); ?>
                  </div>
                  <div class="post-link"><a href="">www.yourdomain.com</a></div>
    							<a href="" class="btn btn-readmore">Read More</a>

    					</article>
  					</div>
            <hr>
          <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, nothing here!' ); ?></p>
          <?php endif; ?>


					<ul class="pagination">
						<li><a href="#"><i class="fa fa-angle-left"></i></a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<div class="sidebar-widget">
						<div class="blog-search">
              <form>
                  <input type="text" name="search">
                  <span>
                  	<button id="submit_btn" class="search-submit" type="submit">
                      <i class="fa fa-search"></i>
                      </button>
                  </span>
              </form>
          </div>
					</div>
					<div class="sidebar-widget">
						<h4 class="sidebar-title">Categories</h4>
						<ul>
							<li><a href="">Web Design</a></li>
							<li><a href="">Web Development</a></li>
							<li><a href="">Video</a></li>
							<li><a href="">HTML</a></li>
							<li><a href="">CSS</a></li>
						</ul>
					</div>
					<div class="sidebar-widget">
						<h4 class="sidebar-title">Flickr</h4>
						<ul class="content-flickr">
							<li>
                <a href="#" title="">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/img1.png" alt="">
                </a>
              </li>
              <li>
                  <a href="#">
                      <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/img2.png" alt="">
                  </a>
              </li>
              <li>
                  <a href="#">
                      <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/img3.png" alt="">
                  </a>
              </li>
              <li>
                  <a href="#">
                      <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/img4.png" alt="">
                  </a>
              </li>
              <li>
                  <a href="#">
                      <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/img5.png" alt="">
                  </a>
              </li>
              <li>
                <a href="#">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/img6.png" alt="">
                </a>
              </li>
						</ul>
					</div>
					<div class="sidebar-widget">
						<h4 class="sidebar-title">Tags</h4>
						<div class="tagcloud">
							<a href="">design</a>
							<a href="">html</a>
							<a href="">php</a>
							<a href="">wordpress</a>
							<a href="">css</a>
							<a href="">development</a>
							<a href="">theme</a>
							<a href="">plugin</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /BLOG -->



<?php get_footer(); ?>
