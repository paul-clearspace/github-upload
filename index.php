<?php get_header(); ?>

<body>
<div class="container">
<div class="main">

<?php if(have_posts()) : ?>
	<?php while(have_posts()): the_post(); ?>
	
	<article class="post">
	<h3>
		<a href="<?php the_permalink(); ?>">
		<?php the_title(); ?>
		</a>
	</h3>
	<div class="meta">Created by <?php the_author(); ?></div>
	<?php if(has_post_thumbnail()) : ?>
         <div class="post-thumbnail">
         <?php the_post_thumbnail(); ?>
         </div>
      <?php endif; ?>
	<?php the_excerpt(); ?>
	</article>

<br>
<a class="button" href="<?php the_permalink(); ?>">
READ MORE
</a>
<?php endwhile; ?>
<?php else: ?>
<?php echo wpautop('sorry no posts found'); ?>
<?php endif ; ?>
</div>
<div class="sidebar">
	<?php if(is_active_sidebar('sidebar')) : ?>
		<?php dynamic_sidebar('sidebar'); ?>
	<?php endif; ?>
</div>
<div class="clr"></div>
</div>
<?php get_footer(); ?>