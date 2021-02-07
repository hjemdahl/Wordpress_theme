<!-- Projekt Webbdesign för CMS - Moa Hjemdahl 2019 -->
<div class="sidebar">
    <!-- Meny -->
    <?php
        wp_nav_menu(array('theme_location' => 'main-menu'));
    ?>
    <!-- Widget area -->
    <div id="widgets">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Block widget") ) : ?>
    <?php endif;?>
</div>
</div>