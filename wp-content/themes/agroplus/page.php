<?php get_header(); ?>

</header>
<!-- Content -->
<section id="content">
<div class="container_24">
<div class="wrapper">
<div class="grid_24 content-bg">
<div class="wrapper">
<div class="grid_16 suffix_1 prefix_1 alpha">
    <article class="indent-bot">
        <div class="wrapper">

            <?php while(have_posts()) : the_post(); ?>
        	<div class="grid_16 page">
            	<h2><?php the_title(); ?></h2>
                <?php the_post_thumbnail() ?>
                <p> <?php the_content(); ?> </p>
            </div>
            <?php endwhile; ?>                         
        </div>
    </article>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
    