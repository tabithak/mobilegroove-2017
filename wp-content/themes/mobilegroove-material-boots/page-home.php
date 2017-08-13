<?php
/**
 *
 * Template Name: Home Page 
 *
 * @package materialwp
 */

get_header(); ?>

<div class="container">
	<div class="row">

		<div id="primary" class="col-md-8 col-lg-8">
			<main id="main" class="site-main" role="main">

				<div class="carousel-item">
				  <img src="http://via.placeholder.com/350x150" alt="...">
				  <div class="carousel-caption d-none d-md-block">
				    <h3>...</h3>
				    <p>...</p>
				  </div>
				</div>
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
					    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
					  </ol>

					  <!-- Wrapper for slides -->
					  <div class="carousel-inner" role="listbox">
					    <div class="item active">
					      <img src="http://via.placeholder.com/350x150" alt="...">
					      <div class="carousel-caption">
					        ...
					      </div>
					    </div>
					    <div class="item">
					      <img src="http://via.placeholder.com/350x150" alt="...">
					      <div class="carousel-caption">
					        ...
					      </div>
					    </div>
					    <div class="item">
					      <img src="http://via.placeholder.com/350x150" alt="...">
					      <div class="carousel-caption">
					        ...
					      </div>
					    </div>
					    <div class="item">
					      <img src="http://via.placeholder.com/350x150" alt="...">
					      <div class="carousel-caption">
					        ...
					      </div>
					    </div>
					    ...
					  </div>

					  <!-- Controls -->
					  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->
		<div class="col-md-4">
			<div class="main-content-menu cf">
            	<?php


					$post_mobileApps = getCatPostsList('990','2');
					$post_mobileCommerce = getCatPostsList('139','2');
					$post_mobileEnterprise = getCatPostsList('1315','2');
					$post_mobileLoyalty = getCatPostsList('996','2');
					$post_mobileMarketing = getCatPostsList('40','2');
					$post_mobileResearch = getCatPostsList('1316','2');
					$post_mobileSearch = getCatPostsList('43','2');
					$post_socialMedia = getCatPostsList('48','2');


				?>
				<div class="clear">
					<ul id="sideNav">

						 <?php if ($post_mobileCommerce != false) { ?>
						 <li><a href="" class="sideNavSection"><span class="hidden-text">Mobile </span>Apps<i class="icon icon-topic icon-topic-apps"></i></a>
						 	<div class="sideMenuSlide"><ul><?php echo $post_mobileApps; ?><li class="sideNavReadMore"><a href="<?php echo SITEPATH;?>/mobile-apps">Read All Articles &raquo;</a></li></ul></div>
						 </li>
						 <?php } ?>

						 <?php if ($post_mobileCommerce != false) { ?>
						 <li><a href="" class="sideNavSection"><span class="hidden-text">Mobile </span>Commerce<i class="icon icon-topic icon-topic-commerce"></i></a>
						 	<div class="sideMenuSlide"><ul><?php echo $post_mobileCommerce; ?><li class="sideNavReadMore"><a href="<?php echo SITEPATH;?>/mobile-commerce">Read All Articles &raquo;</a></li></ul></div>
						 </li>
						 <?php } ?>

						 <?php if ($post_mobileEnterprise != false) { ?>
						 <li><a href="" class="sideNavSection"><span class="hidden-text">Mobile </span>Enterprise<i class="icon icon-topic icon-topic-enterprise"></i></a>
						 	<div class="sideMenuSlide"><ul><?php echo $post_mobileEnterprise; ?><li class="sideNavReadMore"><a href="<?php echo SITEPATH;?>/mobile-enterprise">Read All Articles &raquo;</a></li></ul></div>
						 </li>
						 <?php } ?>

						 <?php if ($post_mobileLoyalty != false) { ?>
						 <li><a href="" class="sideNavSection"><span class="hidden-text">Mobile </span>Loyalty<i class="icon icon-topic icon-topic-loyalty"></i></a>
						 	<div class="sideMenuSlide"><ul><?php echo $post_mobileLoyalty; ?><li class="sideNavReadMore"><a href="<?php echo SITEPATH;?>/mobile-loyalty">Read All Articles &raquo;</a></li></ul></div>
						 </li>
						 <?php } ?>

						 <?php if ($post_mobileMarketing != false) { ?>
						 <li><a href="" class="sideNavSection"><span class="hidden-text">Mobile </span>Marketing<i class="icon icon-topic icon-topic-marketing"></i></a>
						 	<div class="sideMenuSlide"><ul><?php echo $post_mobileMarketing; ?><li class="sideNavReadMore"><a href="<?php echo SITEPATH;?>/mobile-marketing">Read All Articles &raquo;</a></li></ul></div>
						 </li>
						 <?php } ?>

						 <?php if ($post_mobileResearch != false) { ?>
						 <li><a href="" class="sideNavSection"><span class="hidden-text">Mobile </span>Research<i class="icon icon-topic icon-topic-research"></i></a>
						 	<div class="sideMenuSlide"><ul><?php echo $post_mobileResearch; ?><li class="sideNavReadMore"><a href="<?php echo SITEPATH;?>/mobile-research">Read All Articles &raquo;</a></li></ul></div>
						 </li>
						 <?php } ?>

						 <?php if ($post_mobileSearch != false) { ?>
						 <li><a href="" class="sideNavSection"><span class="hidden-text">Mobile </span>Search<i class="icon icon-topic icon-topic-search"></i></a>
						 	<div class="sideMenuSlide"><ul><?php echo $post_mobileSearch; ?><li class="sideNavReadMore"><a href="<?php echo SITEPATH;?>/search">Read All Articles &raquo;</a></li></ul></div>
						 </li>
						 <?php } ?>

						 <?php if ($post_socialMedia != false) { ?>
						 <li><a href="" class="sideNavSection">Social Media<i class="icon icon-topic icon-topic-social-media"></i></a>
						 	<div class="sideMenuSlide"><ul><?php echo $post_socialMedia; ?><li class="sideNavReadMore"><a href="<?php echo SITEPATH;?>/social-media">Read All Articles &raquo;</a></li></ul></div>
						 </li>
						 <?php } ?>
					</ul>
				</div>
			</div>
		</div>
		<?php get_sidebar(); ?>
		
	</div> <!-- .row -->
</div> <!-- .container -->

<?php get_footer(); ?>
