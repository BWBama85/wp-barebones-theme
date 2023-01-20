<?php
/**
 * Header
 *
 * @package WP Barebones Theme
 */

/**
 * Exit if accessed directly
 */
defined( 'ABSPATH' ) || die( 'File cannot be accessed directly' );
?>

<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>
	</head>

	<body id="top" <?php body_class(); ?>>

		<?php wp_body_open(); ?>

		<header>
			Header
		</header>

		<nav id="navbar">
			Navbar
		</nav>
