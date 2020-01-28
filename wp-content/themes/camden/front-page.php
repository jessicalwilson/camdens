<?php get_header(); ?>

<?php $hero_image = get_field('hero_image'); ?>
<?php $hero_heading = get_field('hero_heading'); ?>

<?php if ($hero_heading) :?>
	<section class="hero hero--home" style="background-image: url(<?php echo $hero_image; ?>)">
		<h2 class="hero__heading hero__heading--home"><?php echo $hero_heading; ?></h2>
	</section>
<?php endif; ?>
	
<main class="content home-content">
	
	<?php if ( have_rows( 'featured_item' ) ) : ?>
	<section class="section featured-items">
		<h2 class="section__title">Features</h2>
		<?php while( has_sub_field('featured_item') ): ?>
			<div class="featured-item">
				<img class="featured-item__image" src="<?php the_sub_field('item_image'); ?>" alt="">
				<h3 class="featured-item__heading"><?php the_sub_field('item_heading'); ?></h3>
				<p class="featured-item__copy"><?php the_sub_field('item_copy'); ?></p>
			</div>
		<?php endwhile; ?>
	</section>
	<?php endif; ?>
	
	<?php $about_story = get_field('about_story'); ?>
	<?php $about_image = get_field('about_image'); ?>
	
	<?php if ($about_story) :?>
		<section class="section about">
			<h2 class="section__title">About</h2>
			<p class="about__copy"><?php echo $about_story; ?></p>
			<img class="about__image" src="<?php echo $about_image; ?>" alt="">
		</section>
	<?php endif; ?>
	
	<?php $callout = get_field('callout'); ?>
	
	<?php if ($callout) :?>
		<section class="section callout">
			<div class="callout__text"><?php echo $callout['callout_text'] ?></div>
			<a class="callout__link" href="<?php echo $callout['callout_link']['url'] ?>"><?php echo $callout['callout_link']['title'] ?></a>
		</section>
	<?php endif; ?>
	
	<?php if ( have_rows( 'hours' ) ) : ?>	
	<section class="section hours">
		<h2 class="section__title">Hours</h2>
		<?php while( has_sub_field('hours') ): ?>
			<div class="course">
				<h3 class=""><?php the_sub_field('course'); ?></h3>
			</div>
			<div class="times">
				<p><?php the_sub_field('times'); ?></p>
			</div>
		<?php endwhile; ?>
	</section>
	<?php endif; ?>
		
		<?php $social_media = get_field('social_media'); ?>
		
		<?php if ($social_media) :?>
			<section class="section social-media">
				<img src="" alt="">
				<img src="" alt="">
				<img src="" alt="">
			</section>
		<?php endif; ?>
</main>

<?php get_footer();