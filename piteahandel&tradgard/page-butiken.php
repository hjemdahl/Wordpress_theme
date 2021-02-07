<!-- Projekt Webbdesign för CMS - Moa Hjemdahl 2019 -->
<?php get_header('simple'); ?>

<div class="page-content">
    <h1><?php the_title(); ?></h1>
    <?php get_sidebar(); ?>
    <div class="info-block">
            <div class="info">
                <!-- Sidinnehåll -->
                <?php
                    if (have_posts()) :
                        while (have_posts()) :
                            ?>
                            <article class="post butiken">
                                <?php
                                the_post();
                                if ( has_post_thumbnail() ) {
                                    the_post_thumbnail();
                                }
                                the_content();
                                ?>
                            </article>
                            <?php
                        endwhile;
                    endif;
                ?>
            </div>
    </div>    
</div>

<?php get_footer(); ?>