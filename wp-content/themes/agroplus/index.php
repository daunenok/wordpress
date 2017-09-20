<?php get_header(); ?>

<div class="slider-container">
    <div class="mp-slider">
        <ul class="items">
            <li><img src="<?php bloginfo('stylesheet_directory'); ?>/images/slide-1.jpg" alt="" /><div class="banner mp-ban-1"><span class="row-1">putting our</span><span class="row-2">heart &amp; soul</span><span class="row-3">into the field</span></div></li>
            <li><img src="<?php bloginfo('stylesheet_directory'); ?>/images/slide-2.jpg" alt="" /><div class="banner mp-ban-2"><span class="row-1">we have a strong</span><span class="row-2">agriculture</span><span class="row-3">heritage</span></div></li>
            <li><img src="<?php bloginfo('stylesheet_directory'); ?>/images/slide-3.jpg" alt="" /><div class="banner mp-ban-3"><span class="row-1">growing clean</span><span class="row-2">and full of health</span><span class="row-3">products</span></div></li>
        </ul>
    </div>
</div>
<a href="#" class="mp-prev"></a>
<a href="#" class="mp-next"></a>
</header>
<!-- Content -->
<section id="content">
<div class="container_24">
<div class="wrapper">
<div class="grid_24 content-bg">
<div class="wrapper">
<div class="grid_16 suffix_1 prefix_1 alpha">
    <article class="indent-bot">
    	<h2>Last Posts:</h2>
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
        </div>
    </article>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
    