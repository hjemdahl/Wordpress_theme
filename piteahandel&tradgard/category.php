<!-- Projekt Webbdesign för CMS - Moa Hjemdahl 2019 -->
<?php get_header('simple'); ?>

<div class="page-content">
    <!-- Sidtitel -->
    <h1><?php single_cat_title(''); ?></h1>
    <?php get_sidebar(); ?>
    <div class="info-block">
        <div class="flex">
            <div class="info">
                <!-- Posts -->
            <?php
                    if (have_posts()) :
                        while (have_posts()) :
                            ?>
                            <article class="excerpt">
                                <?php
                                the_post();
                                ?>
                                <h2><?php the_title(); ?></h2>
                                <?php
                                if ( has_post_thumbnail() ) {
                                    the_post_thumbnail();
                                }
                                the_excerpt();
                                ?>
                            </article>
                            <?php
                        endwhile;
                    endif;
                ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>