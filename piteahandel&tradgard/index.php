<!-- Projekt Webbdesign för CMS - Moa Hjemdahl 2019 -->
<?php get_header('simple'); ?>

<div class="page-content">
    <?php get_sidebar(); ?>
    <div class="info-block">
        <div class="info">
            <!-- Post -->
            <?php
                if (have_posts()) :
                    while (have_posts()) :
                        ?>
                        <article class="post">
                            <?php
                            the_post();
                            ?>
                            <h2><?php the_title(); ?></h2>
                            <?php
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