<!-- Projekt Webbdesign för CMS - Moa Hjemdahl 2019 -->
<?php get_header('simple'); ?>

<div class="page-content">
    <h1><?php the_title(); ?></h1>
    <?php get_sidebar(); ?>
    <div class="info-block">
        <div class="flex">
            <div class="info rows">
            <!-- Sidinnehåll -->
                <img class="side-img" src="<?php echo get_template_directory_uri() . '/pictures/om_oss.jpg' ?>" alt="Blommor övwr hela bildern på olika skärpedjup.">
                <h2>Piteå Handel och Trädgård</h2>
                <p>Vi är en av Norrlands största och vackraste handels- och visningsträdgård på 8000 kvadratmeter, belägen i Öjebyn, Piteå. Vi som jobbar här är ett härligt och glatt gäng med över 50 års samlad erfarenhet inom blomster- och trädgårdsbranschen.
                    Vi kan erbjuda våra kunder ett brett sortiment av allt ifrån träd, buskar och perenner till snittblommor, krukväxter och presentartiklar. Vi är även stora inom bröllop och begravning.
                    <br><br>
                    Våra drömmar, visioner och mål är att vi ska utvecklas än mer än det vi redan gjort. Arbeta, än mer, med vår kreativa sida och inte alltid hålla oss inom ramen.
                    Detta gör vi förvisso varje dag, vilket ni säkerligen kan se i våra annorlunda buketter, binderier och inte minst en hysteriskt vacker och originell handelsträdgård/blomsterbutik.
                    Vår butik och handels/visnings-trädgård skall alltid hålla en hög nivå, både på personal, växter och blommor. Vi har alla typer av personligheter i vårt team, pysslaren, den kreativa, hög arbetsmoral, skaparen, arbetsmyran, praktikern, visionären, realisten m.m. Tillsammans är vi Piteå handel & Trädgård, alla behövs.
                    <br><br>
                    Vårt mål för företaget är att ständigt utvecklas, kunden ska förvånas och känna wow-effekten varje gång den är förbi vår verksamhet och det gäller alla årstider och säsonger.
                    Nya idéer och utmaningar skall kanta företaget och vi skall alltid ligga steget före. Goda skratt skall fylla väggarna! 
                </p>
            </div>
            <div class="info rows">
                <!-- Bilder på anställda -->
                <h2>Våra medarbetare</h2>
                <div class="emp-wrap">
                    <div class="employees">
                        <img class="img-employee" src="<?php echo get_template_directory_uri() . '/pictures/emp1.jpg' ?>" alt="Anställd.">
                        <p>Johan</p>
                    </div>
                    <div class="employees">
                        <img class="img-employee" src="<?php echo get_template_directory_uri() . '/pictures/emp2.jpg' ?>" alt="Anställd.">
                        <p>Ellinor</p>
                    </div>
                    <div class="employees">
                        <img class="img-employee" src="<?php echo get_template_directory_uri() . '/pictures/emp3.jpg' ?>" alt="Anställd.">
                        <p>Kristina</p>
                    </div>
                    <div class="employees">
                        <img class="img-employee" src="<?php echo get_template_directory_uri() . '/pictures/emp4.jpg' ?>" alt="Anställd.">
                        <p>Inger</p>
                    </div>
                    <div class="employees">
                        <img class="img-employee" src="<?php echo get_template_directory_uri() . '/pictures/emp5.jpg' ?>" alt="Anställd.">
                        <p>Markus</p>
                    </div>
                    <div class="employees">
                        <img class="img-employee" src="<?php echo get_template_directory_uri() . '/pictures/emp6.jpg' ?>" alt="Anställd.">
                        <p>Johanna</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>