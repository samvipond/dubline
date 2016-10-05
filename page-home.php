<?php
/*
Template Name: Home Page 
 */

get_header(); ?>
<header>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"> <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/dubline_sigSG.jpg" alt="logo" class="logo"> 
	</a>
</header>
<section class="homepage">
	<?php get_template_part('content', 'menu'); ?>
</section>

<?php get_footer(); ?>