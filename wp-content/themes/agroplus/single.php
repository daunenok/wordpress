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
            <div class="grid_16">
                <h2 class="h2-post"><?php the_title(); ?></h2>
                <div class="date-post">
                    <span class="post-date">
                        <?php echo get_the_date(); ?>
                        &nbsp;-&nbsp;
                        <?php the_time(); ?>
                    </span>
                </div>
                <?php the_post_thumbnail() ?>
                <p> <?php the_content(); ?> </p>
                <div class="spacer"></div>
                <?php comments_template(); ?>
            </div>
            <?php endwhile; ?>                         
        </div>
    </article>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>