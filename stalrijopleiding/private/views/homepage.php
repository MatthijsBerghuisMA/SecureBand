<?php $this->layout('standard_layout') ?>

<!-- deze file is voor de homepagina, hier kan je de texten bij veranderen   -->

<?php $this->start('footer-scripts') ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="assets/js/instafeed-min.js"></script>
<script src="assets/js/custom.js"></script>
<?php $this->stop('footer-scripts') ?>

<?php $this->start('title') ?>
<title>Stal Rijopleiding</title>
<?php $this->stop('title') ?>

<div class="welkom">
    <span>STAL RIJOPLEIDING</span>
    <span>DE SLEUTEL NAAR VEILIG EN ZELFSTANDIG AUTORIJDEN!</span>
</div>

<div class="background-foto">
<div class="uitleg">
    <h1>Welkom op de website van Stal Rijopleiding!</h1> <br>
    <p>Je autorijbewijs halen? Dan ben je bij ons aan het juiste adres. <br>
        Wij geven les in <i>Zaandam, Koog aan de Zaan, Zaandijk, Westzaan, Assendelft, Wormerveer, Krommenie,</i> <br>
        maar ook in <i>Wormer, Oostzaan, Landsmeer en Uitgeest</i>. Oftewel, de gehele Zaanstreek en omstreken!</p><br>
    <br>
    <p>Wij leiden je op tot een <b>veilig</b> en <b>zelfstandig</b> automobilist. De cursus verloopt volgens een gestructureerde <br>
        opbouw van makkelijk naar moeilijk. <br>
        Jouw leervorderingen houden we bij op een instructiekaart. Na afloop van de les bespreken we het onderwerp <br>
        van de volgende rijles, zodat jij je alvast goed kan voorbereiden!</p> <br>
    <p>Heb je last van <b><i>faalangst?</i></b> Dan zul je je zeker prettig voelen bij onze lesaanpak. <br>
        We hebben tevens een ruime ervaring in het lesgeven <br>
        aan mensen met een vorm van <b><i>autisme</i></b>.</p> <br>
    <p><i>Een proefles aanvragen?</i></p> <br>
    <a class="uitleg_button" href="<?php echo url('/bestel') ?>">KLIK DAN HIER</a>
</div>
<div class="meerinfo">
    <div class="blok">
        <span>DE OPLEIDING</span>
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 24 24">
            <defs>
                <path id="a" d="M0 0h24v24H0V0z" />
            </defs>
            <clipPath id="b">
                <use xlink:href="#a" overflow="visible" />
            </clipPath>
            <path clip-path="url(#b)" d="M21 5c-1.11-.35-2.33-.5-3.5-.5-1.95 0-4.05.4-5.5 1.5-1.45-1.1-3.55-1.5-5.5-1.5S2.45 4.9 1 6v14.65c0 .25.25.5.5.5.1 0 .15-.05.25-.05C3.1 20.45 5.05 20 6.5 20c1.95 0 4.05.4 5.5 1.5 1.35-.85 3.8-1.5 5.5-1.5 1.65 0 3.35.3 4.75 1.05.1.05.15.05.25.05.25 0 .5-.25.5-.5V6c-.6-.45-1.25-.75-2-1zm0 13.5c-1.1-.35-2.3-.5-3.5-.5-1.7 0-4.15.65-5.5 1.5V8c1.35-.85 3.8-1.5 5.5-1.5 1.2 0 2.4.15 3.5.5v11.5z" />
        </svg>
        <a class="info_button" href="<?php echo url('/opleiding') ?>">MEER INFORMATIE</a>
    </div>

    <div class="blok">
        <span>2 TO DRIVE</span>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path d="M18.92 6.01C18.72 5.42 18.16 5 17.5 5h-11c-.66 0-1.21.42-1.42 1.01L3 12v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-8l-2.08-5.99zM6.5 16c-.83 0-1.5-.67-1.5-1.5S5.67 13 6.5 13s1.5.67 1.5 1.5S7.33 16 6.5 16zm11 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM5 11l1.5-4.5h11L19 11H5z" />
            <path d="M0 0h24v24H0z" fill="none" /></svg>
        <form action="http://">
            <a class="info_button" href="<?php echo url('/drive') ?>">MEER INFORMATIE</a>
    </div>

    <div class="blok" id="blok">
        <span>TARIEVEN</span>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path d="M15 18.5c-2.51 0-4.68-1.42-5.76-3.5H15v-2H8.58c-.05-.33-.08-.66-.08-1s.03-.67.08-1H15V9H9.24C10.32 6.92 12.5 5.5 15 5.5c1.61 0 3.09.59 4.23 1.57L21 5.3C19.41 3.87 17.3 3 15 3c-3.92 0-7.24 2.51-8.48 6H3v2h3.06c-.04.33-.06.66-.06 1 0 .34.02.67.06 1H3v2h3.52c1.24 3.49 4.56 6 8.48 6 2.31 0 4.41-.87 6-2.3l-1.78-1.77c-1.13.98-2.6 1.57-4.22 1.57z" />
            <path fill="none" d="M0 0h24v24H0z" /></svg>
        <form action="http://">
            <a class="info_button" href="<?php echo url('/pakketten') ?>">MEER INFORMATIE</a>
    </div>
</div>
<div class="extra-info">
    <div class="info_blok">
        <span>ENGLISH DRIVING LESSONS</span>
        <p> We also provide English driving lessons. These will be given by Vincent. <br>
            A lesson package will include not only the lessons in English language, <br>
            but also the theory book will be in English, and on the exam Vincent will be the translator. <br>
            Dont hesitate to call Vincent on 0634069716 for more information about English lessons <br>
            from start to finish, Or advice if you had a license in a foreign country and <br>
            are planning to get a Dutch driving license.</p>
    </div>

    <div class="info_blok">
        <span>VERDER NOG WAT PLUSPUNTEN OP EEN RIJTJE</span>
        <ul>
            <li>Theorie spoedcursus mogelijk met aansluitend theorie examen bij het CBR.</li>
            <li>De rijschool is prima verzekerd en maakt gebruikt van goed onderhouden, veilige en moderne lesauto's.</li>
            <li>Al jaren een bovengemiddeld slagingspercentage.</li>
            <li>Lessen 7 dagen per week van 8:00 - 21:00 (op vrijdag t/m zondag afwijkende tijden).</li>
            <li>Ook voor opfrislessen of 2todrive begeleiders.</li>
            <li>Ben je tevreden, vertel het anderen. Ben je niet tevreden, vertel het ons!</li>
            <li>Wij gaan zorgvuldig om met jouw persoonsgegevens.</li>
        </ul>
    </div>

    <div class="info_blok">
        <span>CONTACT</span>
        <p>Vragen of meer informatie? Bel of mail ons (bij geen gehoor a.u.b. voicemail inspreken)</p>
        <ul>
            <li>Krommenie</li>
            <li>06 - 26881416</li>
            <li>Info@stalrijopleiding.nl</li>
            <li>KvK-nummer: 54198437</li>
        </ul>
    </div>
</div>
<div class="wrapperinsta">
    <div class="slider-frame">
        <div id="instafeed"></div>
    </div>
</div>
</div>
