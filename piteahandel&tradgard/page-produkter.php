<!-- Projekt Webbdesign för CMS - Moa Hjemdahl 2019 -->
<?php get_header('simple'); ?>

<div class="page-content">
    <h1><?php the_title(); ?></h1>
    <?php get_sidebar(); ?>
    <div class="info-block">
        <!-- Produktmeny -->
        <div class="sub-menu">
            <?php wp_nav_menu(array('theme_location' => 'sub-menu')); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>