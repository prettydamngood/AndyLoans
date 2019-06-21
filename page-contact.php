<?php
/**
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<section class="">
			<div class="container">
			<div class="row">
			<div class="col-12">
			<h2 class="section-header mb-4">
				Contact Us
			</h2>
			<p>Got a question? Drop your question the form below and we'll get back to you as soon as possible</p>
			</div>
			<div class="col-12">
			<?php echo do_shortcode('[contact-form-7 id="25" title="Contact form 1"]');?>
			</div>
			</div>
			</div>
		
		</section>
		
	</main>
</div>
<?php
get_footer();
