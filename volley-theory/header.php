<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Volley_Theory
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header>
	<div id="logo--container">
		<a href="/">
			<img src="http://localhost/VT/wp-content/uploads/images/VT_Logo.svg" alt="Volley Theory Logo">
		</a>
	</div>
	<button id="nav--btn">
		<div></div>
		<div></div>
		<div></div>
	</button>
	<nav id="nav--header">
		<button id="nav-close--btn">
			<div></div>
			<div></div>
		</button>
		<ul>
			<li><a href="/">Home</a></li>
			<li><a href="/demo">Demo</a></li>
			<li><a href="/about">About</a></li>
			<li><a href="https://staging.volleytheory.com/">Login</a></li>
		</ul>
	</nav>
</header>
<script>
	const navBtn = document.getElementById('nav--btn');
	const navCloseBtn = document.getElementById('nav-close--btn');
	const navHeader = document.getElementById('nav--header');

	navBtn.addEventListener('click', () => {
		navHeader.classList.add('nav--active');
	})

	navCloseBtn.addEventListener('click', () => {
		navHeader.classList.remove('nav--active');
	})
</script>