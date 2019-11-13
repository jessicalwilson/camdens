<?php get_header(); ?>

<?php 
	$hero_text = get_field('hero_text');
	$hero_image = get_field('hero_image');
?>

<section class="hero hero--home" style="background-image: url(<?php echo $hero_image['url']; ?>)">
	<div class="hero__copy">
		<h2><?php echo $hero_text ?></h2>
	</div>
</section>

<main class="content home-content">
	<section class="featured-items">
		<h2 class="featured-items__title">Features</h2>
		<?php ?>
		<div></div>
	</section>

	<section class="images">
		<img src="" alt="">
		<img src="" alt="">
		<img src="" alt="">
	</section>

	<section class="hours">
		<h2>Hours</h2>
		<div class="course">
			<h3></h3>
		</div>
		<div class="times">
			<h4></h4>
			<p></p>
		</div>
	</section>
</main>
<?php get_footer();