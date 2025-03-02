<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 * 
 * Template Name: VT Demo Page
 * Template Post Type: page
 *
 * @package Volley_Theory
 */

get_header();
?>
	<main>

	</main>
	<script>
		const labels = document.querySelectorAll("form label");
		const inputs = document.querySelectorAll("form .input");
		console.log(inputs)
		inputs.forEach(input => {
			// ANY INPUT VALUE TAKE LABEL OPACITY DOWN FULL
			input.addEventListener('input', () => {
				let forID = input.getAttribute('id');
				if (input.value.length > 0) {
					labels.forEach(label => {
					if (label.getAttribute('for') === forID) {
						label.classList.remove('active--input-label-half');
						label.classList.add('active--input-label-full');
						return;
					}
				})
				} else if (input.value.length <= 0) {
					labels.forEach(label => {
					if (label.getAttribute('for') === forID) {
						label.classList.remove('active--input-label-full');
						return;
					}
				})
				}
			})
			// FOCUS TAKE LABEL OPACITY DOWN HALF
			input.addEventListener('focus', () => {
				let forID = input.getAttribute('id');
				labels.forEach(label => {
					if (label.getAttribute('for') === forID) {
						label.classList.add('active--input-label-half');
					}
				})
			})
			// FOCUS OUT TAKE LABEL OPACITY TO NORMAL
			input.addEventListener('focusout', () => {
				console.log(input)
				let forID = input.getAttribute('id');
				labels.forEach(label => {
					if (label.getAttribute('for') === forID) {
						label.classList.remove('active--input-label-half');
					}
				})
			})
		})
	</script>

	<?php 
	get_footer(); 
