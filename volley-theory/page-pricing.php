<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 * 
 * Template Name: VT Pricing Page
 * Template Post Type: page
 *
 * @package Volley_Theory
 */

get_header();
?>
	<main>
		<section id="pricing-page--container" class="section--default">
			<h1 class="hero--text">Outsmart. Outlast. Outplay.</h1>
			<article class="quote-box--container demo-quote-page--container">
			
				<div class="demo-quote-price">
					<p>VOLLEY THEORY</p>
					<p>$1,500</p>
					<a class="link--btn" href="/demo">Purchase Now</a>
				</div>
				
				<div class="demo-quote-details">
					<div>
						<p>Unlimited match analysis,  in-season and post-season</p>
						<p>Unlimited line-up prediction</p>
					</div>
					<div>
						<p>One-Year Subscription August 1st - July 31 price increases Aug 8</p>
						<p>Easy to use + always with you–at your desk or on the court</p>
					</div>
				</div>
			</article>
		<div class="pricing-page-text--container">
			<img src="http://localhost/VT/wp-content/uploads/images/VolleyTheory_ProductMockup_Login.svg" alt="Login Example">
			<div>
				<h3 class="section--subheadline">Winning starts with the right matchup</h3>
				<p class="section--text">Volley Theory gives you the complete view of all the unique matchups possible between your lineup and any other team you play. No other platform offers this insight.</p>
				<a class="link--btn" href="/demo">Schedule demo</a>
			</div>
		</div>
		</section>
	</main>
	<?php 
	get_footer(); 
