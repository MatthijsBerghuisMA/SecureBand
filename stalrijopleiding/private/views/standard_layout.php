<!DOCTYPE html>
<html>
<!-- deze file is voor de NAVIGATIE en de FOOTER, hier zou ik niet aankomen  -->
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Welkom op de website van Stal Rijopleiding! Je autorijbewijs halen? Dan ben je bij ons aan het juiste adres. Wij geven les in Zaandam, Koog aan de Zaan, Zaandijk, Westzaan, Assendelft, Wormerveer, Krommenie, maar ook in Wormer, Oostzaan, Landsmeer en Uitgeest. Oftewel, de gehele Zaanstreek en omstreken">
    <meta name="keywords" content="Rijschool, Rijbewijs, Lesauto, Lessen, rijden, Zaandam, Koog aan de Zaan, Zaandijk, Westzaan, Assendelft, Wormerveer, Krommenie, Wormer, Oostzaan, Landsmeer, Uitgeest, Zaanstreek">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Matthijs Berghuis">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="<?php echo url('/assets/images/LOGO_STAL.png') ?>" type="image/icon type">
    <?php echo $this->section('css') ?>
    <?php echo $this->section('title') ?>
</head>

<body>
    <nav>
        <div class="nav-links">
            <a href="<?php echo url('/') ?>"><img clas="stal_logo" src="<?php echo url('/assets/images/LOGO_STAL.png') ?>" alt="logo"></a>
        </div>
        <div class="nav-rechts">
            <input type="checkbox" id="nav-toggle" style="display:none;" />
            <label class="nav-toggle-label" for="nav-toggle">
                <span class="nav-toggle-label-span-1"></span>
                <span class="nav-toggle-label-span-2"></span>
                <span class="nav-toggle-label-span-3"></span>
            </label>
            <div class="nav-links-container">
                <a class="nav-link" id="nav-top-link" href="<?php echo url('/') ?>">HOME</a>
                <a class="nav-link" href="<?php echo url('/opleiding') ?>">DE OPLEIDING</a>
                <a class="nav-link" href="<?php echo url('/pakketten') ?>">TARIEVEN</a>
                <a class="nav-link" href="<?php echo url('/drive') ?>">2TODRIVE</a>
                <a class="nav-link" href="<?php echo url('/links') ?>">LINKS</a>
                <a class="nav-link" href="<?php echo url('/contact') ?>">CONTACT</a>
            </div>
        </div>
    </nav>

    <?php echo $this->section('content') ?>

    <footer>
        <div class="footer">
            <div class="footer_links">
                <h2>SOCIAL MEDIA</h2>
                <a target="_blank" href="https://www.facebook.com/stalrijopleiding/">FACEBOOK</a>
                <a target="_blank" href="https://www.instagram.com/stalrijopleiding/">INSTAGRAM</a>
            </div>
            <div class="footer_midden">
                <h2>CONTACT</h2>
                <a href="mailto:info@stalrijopleiding.nl">EMAIL</a>
                <a href="tel:+31626881416">TELEFOON</a>
                <a target="_blank" href="https://www.kvk.nl/zoeken/?source=all&q=stal%20rijopleiding&start=0&site=kvk2014">KVK</a>
            </div>
            <div class="footer_rechts">
                <h2>EXTERNE INFORMATIE</h2>
                <p>Aanvragen van een proefles ? <br> (gratis en vrijblijvend) Bel of <br> WhatsApp naar <a href="tel:+06-26881416">0626881416</a> of <br> <a href="mailto:info@stalrijopleiding.nl"> info@stalrijopleiding.nl</a></p>
            </div>
        </div>
        <div class="footer_credits">
            <a target="_blank" href="https://www.linkedin.com/in/matthijs-berghuis-9447b617a/">MADE BY MATTHIJS BERGHUIS</a>
        </div>
    </footer>
    <?php echo $this->section('footer-scripts') ?>
</body>

</html>
