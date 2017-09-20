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
    	<h2>Posts:</h2>
        <div class="wrapper">

            <?php while(have_posts()) : the_post(); ?>
        	<div class="grid_16 post-short">
            	<a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail() ?>
                </a>
                <dl class="def-list-1">
                	<dt>
                    	<a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </dt>
                    <span class="post-date">
                        <?php echo get_the_date(); ?>
                        &nbsp;-&nbsp;
                        <?php the_time(); ?>
                    </span>
                    <dd>
                    	<?php the_content("Read More"); ?>
                    </dd>
                </dl>
            </div>
            <?php endwhile; ?>

            <div id="newer-posts">
                <?php previous_posts_link('Newer Posts'); ?>
            </div>
            <div id="older-posts">
                <?php next_posts_link('Older Posts'); ?>
            </div>                          
        </div>
    </article>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
    