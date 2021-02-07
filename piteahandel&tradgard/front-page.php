<!-- Projekt Webbdesign för CMS - Moa Hjemdahl 2019 -->
<?php get_header(); 

// Hämta kategori länk
$category_id = get_cat_ID( 'Blogg' );
$category_link = get_category_link( $category_id );
?>

<div class="fp-content">
    <p id="welcome">Välkommen till Piteå Handel & Trädgård, en sevärdhet i norr</p>
    <?php get_sidebar(); ?>
    <!-- Länk block -->
    <div class="fp-buttons">
        <div class="fp-block">
            <a href="http://club.amercurius.com/m/pitea/" target="_blank">
                <img src="<?php echo get_template_directory_uri() . '/pictures/club.png' ?>" alt="Rund grön knapp med clubkort.">
                <h3>Club Piteå</h3>
                <p>Som medlem i Club Piteå kan du hos oss samla bonuspoäng.</p>
            </a>            
        </div>
        <div class="fp-block">
            <a href="<?php echo get_page_link( get_page_by_title( 'Tjänster' )->ID ); ?>">
                <img src="<?php echo get_template_directory_uri() . '/pictures/blomma.png' ?>" alt="Rund grön knapp med blomma.">
                <h3>Blommogram</h3>
                <p>Vem vill du göra glad idag? Vi hjälper er att skicka blommor i hela Sverige och stora delar av världen.</p>
            </a>
        </div>
        <div class="fp-block">
            <a href="<?php echo esc_url( $category_link ); ?>">
                <img src="<?php echo get_template_directory_uri() . '/pictures/glasoga.png' ?>" alt="Rund grön knapp med glasögon.">
                <h3>Blogg</h3>
                <p>Här uppdaterar vi ofta, ta en stund och läs, lär dig mer om det gröna och bli inspirerad.</p>
            </a>
        </div>
    </div>
</div>

<?php get_footer(); ?>