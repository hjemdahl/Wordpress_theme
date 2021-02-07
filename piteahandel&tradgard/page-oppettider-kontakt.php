<!-- Projekt Webbdesign för CMS - Moa Hjemdahl 2019 -->
<?php get_header('simple'); ?>

<div class="page-content">
    <h1><?php the_title(); ?></h1>
    <?php get_sidebar(); ?>
    <div class="info-block">
        <div class="flex">
            <!-- Sidinnehåll -->
            <div class="info rows">
                <img class="side-img" src="<?php echo get_template_directory_uri() . '/pictures/oppettider.jpg' ?>" alt="Vitt träskrivbord uppifrån med laptop, blommor och verktyg på.">
                <h2>Vi har öppet 364 dagar, hela året om!</h2>
                <p>
                    Våra Öppettider: Sommar (ca 1a Maj- 15 Sept)<br>
                    Mån-Fre: 09-18<br>
                    Lör: 09-16<br>
                    Sön: 11-16<br><br>
                    Våra Öppettider: Vinter (ca 15 Sept-1a Maj)<br>
                    Mån-Fre: 09-18<br>
                    Lör: 09-14<br>
                    Sön: 11-14<br>
                </p>
                <p>
                    Vår adress:<br>
                    Hamnviksvägen 2<br>
                    943 33 Öjebyn
                </p>
                <p>
                    Telefon:<br>
                    +46 (0)911-60015<br><br>
                    Vi har telefontid, vare dag i enlighet med våra öppettider.
                    Under högsäsong är det många som ringer till oss.. Telefonkön växer snabbt men vi besvarar alla samtal som placerats i kö.<br><br>
                    Ni kan även nå oss via E-post:<br>
                    info@piteahandeltradgard.se, samt via vår Facebook-sida.
                </p>
            </div>
            <div class="info rows">
                <!-- Kotaktformulär -->
                <h2>Kontakta oss direkt</h2>
                <?php
                    the_post();
                    the_content();
                ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>