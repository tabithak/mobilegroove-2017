<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package materialwp
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area col-md-4 col-lg-4" role="complementary">
	<div>
		<h3 class="head">Latest Tweets</h3>
		<div class="tweet">
			<a href=""><a href="https://twitter.com/peggyanne" target="_blank" class="twitter-name">@peggyanne</a><br />
			<div class="peggyanne"></div>
		</div>
	</div>

	<h3 class="head">Our Shows</h3>
	<div class="sponsors media-box clearfix">
		<?php if ( is_active_sidebar('sponsor-ads') ) { dynamic_sidebar('sponsor-ads'); } ?>
	</div>

	<h3 class="head">Our Partners</h3>
	<div class="sponsors clearfix">
		<?php if ( is_active_sidebar('partner-ads') ) { dynamic_sidebar('partner-ads'); } ?>
	</div>	
</div><!-- #secondary -->


