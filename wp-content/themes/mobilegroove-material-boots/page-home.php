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

		<div id="primary" class="col-md-12 col-lg-12">
			<main id="main" class="site-main" role="main">
				<div id="carousel" class="carousel slide" data-ride="carousel">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
					    <li data-target="#carousel" data-slide-to="0" class="active"></li>
					    <li data-target="#carousel" data-slide-to="1"></li>
					    <li data-target="#carousel" data-slide-to="2"></li>
					  </ol>

					  <!-- Wrapper for slides -->
					  <div class="carousel-inner" role="listbox">
					    <div class="item active clear">
					      	<img src="http://via.placeholder.com/150x150" alt="..." class="alignleft">
					      <div class="carousel-caption alignleft">
					      	<h3 class="carousel-header">Catalyst Writer</h3>
					        <p class="carousel-content lead">Art party trust fund gochujang jean shorts neutra. Small batch health goth ethical chillwave pop-up readymade, butcher tbh coloring book migas pabst blog seitan XOXO enamel pin. Adaptogen hashtag blue bottle tilde meditation.</p>
					        <a href="javascript:void(0)" class="btn btn-raised btn-primary">View Articles</a>
					      </div>
					    </div>
					    <div class="item clear">
					      	<img src="http://via.placeholder.com/150x150" alt="..." class="alignleft">
					      <div class="carousel-caption alignleft">
					      	<h3 class="carousel-header">Frequent Speaker</h3>
					        <p class="carousel-content lead">Four dollar toast artisan activated charcoal williamsburg XOXO yuccie. Affogato chambray fingerstache you probably haven't heard of them narwhal next level fixie 90's wolf crucifix. Copper mug post-ironic cold-pressed, ramps yuccie put a bird on it activated charcoal coloring book.</p>
					        <a href="javascript:void(0)" class="btn btn-raised btn-primary">View Articles</a>
					      </div>
					    </div>
					    <div class="item clear">
					      	<img src="http://via.placeholder.com/150x150" alt="..." class="alignleft">
					      <div class="carousel-caption alignleft">
					      	<h3 class="carousel-header">Renowned Author</h3>
					        <p class="carousel-content lead">Copper mug post-ironic cold-pressed, ramps yuccie put a bird on it activated charcoal coloring book. Copper mug post-ironic cold-pressed, ramps yuccie put a bird on it activated charcoal coloring book.</p>
					        <a href="javascript:void(0)" class="btn btn-raised btn-primary">View Articles</a>
					      </div>
					    </div>					    
					</div>
				</div><!-- #carousel -->


			</main><!-- #main -->
		</div><!-- #primary -->
		
	</div> <!-- .row -->

</div> <!-- .container -->

<div class="row full-row">
	<div class="container">
		<div class="col-lg-12 col-md-12">
			<div class="as-seen-on">
				<h3>As seen on</h3>
				<img src="http://via.placeholder.com/150x150" alt="..." >
				<img src="http://via.placeholder.com/150x150" alt="..." >
				<img src="http://via.placeholder.com/150x150" alt="..." >
				<img src="http://via.placeholder.com/150x150" alt="..." >
				<img src="http://via.placeholder.com/150x150" alt="..." >
			</div>
		</div>
	</div><!-- .container -->
</div><!-- .row -->

<div class="container">
	<div class="row">
		
		<div class="card-deck">
			<div class="col-sm-6 col-md-4 col-lg-4">
				<div class="card">
					<div class="card-block">
						<img class="card-img-top" src="<?php echo(imagepath);?>/article-01.jpg" alt="..." >
						<div class="card-body">
							<p class="card-text">Topic: <span class="topic">MOBILE APPS</span> | Author: Thomas Kriebernegg</p>
							<h3 class="card-text">App Marketing Strategy: Major Differences Between Lifestyle And Entertainment Apps Entertainment Apps</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-4">
				<div class="card">
					<div class="card-block">
						<img class="card-img-top" src="<?php echo(imagepath);?>/article-01.jpg" alt="..." >
						<div class="card-body">
							<p class="card-text">Topic: <span class="topic">MOBILE APPS</span> | Author: Thomas </p>
							<h3 class="card-text">App Marketing Strategy: Major Differences Between Liainment Apps</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-4">
				<div class="card">
					<div class="card-block">
						<img class="card-img-top" src="<?php echo(imagepath);?>/article-01.jpg" alt="..." >
						<div class="card-body">
							<p class="card-text">Topic: <span class="topic">MOBILE APPS</span> | Author: riebernegg</p>
							<h3 class="card-text">App Marketing Stra</h3>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--<div class="col-lg-6 col-sm-12">
			<div class="panel panel-default">
				<a href="javascript:void(0)">
					<img src="<?php //echo(imagepath);?>/article-02.jpg" alt="..." >
				  	<div class="panel-body">
				    	<span class="article-info">Topic: <span class="topic">MOBILE ENTERPRISE</span> | Author: Paul Jerrett</span>
						<h3>Massive Mobility Trends And How They Impact The Enterprise</h3>
				  	</div>
				</a>
			</div>
		</div>-->
	</div> <!-- .row -->
</div> <!-- .container -->


<?php get_footer(); ?>
