<?php get_header(); ?>

<?php $hero = get_field('hero');?>
	
<?php if ($hero) :?>
	<section class="hero hero--home" style="background-image: url(<?php echo $hero['hero_image']; ?>)">
		<h2 class="hero__heading hero__heading--home"><?php echo $hero['hero_heading'] ?></h2>
	</section>
<?php endif; ?>
	
<main class="content home-content">
	
	<?php $featured_items = get_field('featured_items');?>
	
	<?php if ( have_rows( 'featured_items' ) ) : ?>
	<section class="section featured-items">
		<h2 class="section-title">Features</h2>
		<?php while( have_rows('featured_items') ): the_row(); ?>
			<?php ?>
			<div class="featured-item">
				<img class="" src="" alt="">
				<h3 class=""></h3>
				<p class=""></p>
			</div>
		<?php endwhile; ?>
	</section>
	<?php endif; ?>
	
	<?php $about = get_field('about'); ?>
	
	<?php if ($about) :?>
		<section class="section about">
			<h2 class="section-title">About</h2>
			<p><?php echo $about['about_story'] ?></p>
			<img src="" alt="">
		</section>
	<?php endif; ?>
	
	<?php $callout = get_field('callout'); ?>
	
	<?php if ($callout) :?>
		<section class="section callout">
			<div class="callout__text"><?php echo $callout['callout_text'] ?></div>
			<a href="<?php echo $callout['callout_link']['url'] ?>"><?php echo $callout['callout_link']['title'] ?></a>
		</section>
	<?php endif; ?>

	<section class="section social-media">
		<img src="" alt="">
		<img src="" alt="">
		<img src="" alt="">
	</section>

	<section class="section hours">
		<h2 class="section-title">Hours</h2>
		<div class="course">
			<h3 class=""></h3>
		</div>
		<div class="times">
			<h4></h4>
			<p></p>
		</div>
	</section>
</main>

<?php get_footer();