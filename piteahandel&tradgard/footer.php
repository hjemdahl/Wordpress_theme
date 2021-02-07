<!-- Projekt Webbdesign för CMS - Moa Hjemdahl 2019 -->

<footer>
    <!-- Kontakt block -->
    <div class="phone f-block">
        <img src="<?php echo get_template_directory_uri() . '/pictures/icon_phone.png' ?>" alt="Telefon ikon.">
        <p>0911-600 15</p>
    </div>
    <div class="f-block">
        <img src="<?php echo get_template_directory_uri() . '/pictures/icon_mail.png' ?>" alt="Mail ikon.">
        <a href="mailto:info@handeltradgard.se">info@piteahandeltradgard.se</a>
    </div>
    <div class="f-block">
        <img src="<?php echo get_template_directory_uri() . '/pictures/icon_location.png' ?>" alt="Adress ikon.">
        <p>Hamnviksvägen 2, 943 33 Öjebyn</p>
    </div>
    <!-- Cookies länk -->
    <a class="cookies f-item" href="<?php echo get_page_link( get_page_by_title( 'Cookies' )->ID ); ?>">Information om Cookies</a>
    <p class="f-item">© 2016 Piteå Handel & Trädgård AB</p>
</footer>
<script src="<?php echo get_template_directory_uri() . '/js/toggle_menu.js' ?>"></script>
<?php wp_footer(); ?>
</body>
</html>