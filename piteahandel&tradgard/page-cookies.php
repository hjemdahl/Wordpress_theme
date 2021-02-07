<!-- Projekt Webbdesign för CMS - Moa Hjemdahl 2019 -->
<?php get_header('simple'); ?>

<div class="page-content">
    <h1><?php the_title(); ?></h1>
    <?php get_sidebar(); ?>
    <div class="info-block">
        <!-- Sidinnehåll -->
        <div class="info cookies">
            <h2>Vad är cookies?</h2>
            <p>Cookies är små filer som kan lagras när en besökare kommer till en webbplats. De används för att spara information på besökarens dator, mobiltelefon eller surfplatta för att förbättra användarupplevelsen och för att tillhandahålla vissa tjänster. Cookies finns på de flesta webbplatserna och används bland annat för att hålla användare inloggade, komma ihåg inställningar som besökarna valt eller vad som lagts till i varukorgen. De kan också användas för att logga in besökare automatiskt när de återvänder till en sida de loggat in på tidigare.</p>
            <h2>Hur används cookies på den här webbplatsen?</h2>
            <p>Den här webbplatsen använder cookies på följande sätt:</p>
            <ul>
                <li>För att hålla besökaren inloggad när denne navigerar webbplatsens olika sidor.</li>
                <li>För att spara information om inställningar som användare gör i gränssnittet.</li>
                <li>För att inte visa informationstexten om cookies när besökaren klickat på knappen för att ta bort denna.</li>
                <li>För att samla in anonym statistik om exempelvis vilka sidor som besöks och hur länge varje besök varar.</li>
            </ul>
            <h2>Vilka cookies används av den här sidan?</h2>
            <p>De typer av cookies som används av webbplatsen är: Inställningar och inloggning för innehållshanteringssystemetWordPress som är webbplatsens innehållshanteringssystem använder cookies för att hantera inloggningar, se till att inloggade användare inte loggas ut, kolla om cookies tas emot av webbläsaren och för att spara inställningar som användare väljer att göra. Namnen på de cookies som används är:</p>
            <ul>
                <li>wordpress_[Unikt sessions-ID]</li>
                <li>wordpress_logged_in_[Unikt sessions-ID]</li>
                <li>wordpress_test_cookie</li>
                <li>wordpress_test_cookie</li>
                <li>wp-settings-[Användar-ID]</li>
                <li>wp-settings-time-[Användar-ID]</li>
                <li>wfvt_[Unikt sessions-ID]</li>
                <li>wfwaf-authcookie-[Unikt sessions-ID]</li>
                <li>wordfence_verifiedHuman</li>
            </ul>
            <p>Hantering av meddelande om cookies Används för att komma ihåg om besökare valt att dölja meddelandet om cookies. Namnet på cookien som används är:</p>
            <ul>
                <li>ww_cookie_consent</li>
            </ul>
            <h2>Tredje parter</h2>
            <p>Information som statistik över besökare kan också delas med Google via verktyget Google Analytics. Det är möjligt att be webbsidor att inte samla in den informationen med hjälp av Googles webbläsartillägg ”Google Analytics Opt-out”. För mer information om detta se Googles datapolicy.</p>
            <h2>Blockera eller ta bort cookies</h2>
            <p>För att cookies inte ska sparas på din dator kan du i de flesta webbläsarna välja att blockera cookies. Detta kan dock påverka hur webbplatser fungerar och i vissa fall göra att de inte kan användas förrän du slår på cookies igen. Om du efter att du blockerat cookies vill ta bort de som redan sparats kan du göra detta i din webbläsares inställningar. För mer information om hur du gör det i olika webbläsare så kan du läsa mer på aboutcookies.org och allaboutcookies.org.</p>
            <p>Hur vi sparar och behandlar personuppgifter utifrån att GDPR
            träder i kraft den 25 maj 2018:</p>
            <p>Vi sparar och behandlar följande personuppgifter om dig i vårt register:
                Namn, e-postadress, telefonnummer, organisation/företag, adress till organisation/företag och bransch (i de fall vi fått den informationen).
                Detta gör vi för att kunna kontakta dig tills beställning är gjord, betald och levererad.
                Vi använder inte uppgifterna för något annat ändamål än detta. Vi delar inte dina uppgifter med tredje part och vi för heller inga anteckningar i detta register.
            </p>
            <p>
                Du kan när som helst få information om vilka uppgifter vi sparat och du kan kontakta oss för att få dina uppgifter borttagna.
                Bilder med personer används ENDAST om personen i fråga godkänt det skriftligt.
            </p>
            <p>Mvh Piteå Handel & trädgård</p>
        </div>
    </div>
</div>

<?php get_footer(); ?>