<?php $this->layout( 'standard_layout' ) ?>
<!-- deze file is voor de prijzen en de pakketten  -->
<?php include '../includes/functions,php'; ?>

<?php $this->start('css')?>
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo url('/assets/css/tarieven.css')?>" />
<?php $this->stop('css')?>

<?php $this->start('title')?>
<title>Stal Rijopleiding | Pakketten</title>
<?php $this->stop('title')?>

<div class="PenP">
        <h1>PAKKETTEN EN PRIJZEN</h1>
        <h3>TARIEVEN</h3>
        <div class="tarieven">


            <div class="pakketen">
                <p>Proefles (45 minuten).</p>
                <p>Les (60 minuten).</p>
                <p>5 lessen van 60 minuten.</p>
                <p>10 lessen van 60 minuten.</p>
                <p>Pakket 25 lessen incl. 1 praktijkexamen en gratis Itheorie of theorieboekpakket.</p>
                <p>Pakket 35 lessen incl. 1 praktijkexamen en gratis Itheorie of theorieboekpakket.</p>
                <p>Pakket 35 lessen incl. CBR tussentijdse toets, 1 praktijkexamen en gratis Itheorie of theorieboekpakket.</p>
                <p>CBR tussentijdse toets.</p>
                <p>Praktijkexamen.</p>
                <p>Herexamen.</p>
                <p>Theorieboekenpakket zelfstudie ( theorieboek,10 uren oefenexamens).</p>
                <p>Itheorie, een complete theoriecursus via internet inclusief praktijkfilmpjes, deeltoetsen en heel veel oefenexamens.</p>
                <p>Theorie spoedcurses (via onze partner) met aansluitend theorie examen bij CBR.</p>
                <p>Traffic manual passenger car (theorieboek Engelstalig).</p>
                <p>Pre-exam test passenger car (oefenexamens Engelstalig).</p>
                <p>Opfriscursus: Op aanvraag!</p>
                <form action="bestel">
                    <input class="button" type="submit" value="SELECTEER EEN PAKKET"/>
                </form>
            </div>

            <div class="prijzen">
                    <p>€0.00</p>
                    <p>€45.00</p>
                    <p>€222.50</p>
                    <p>€440.00</p>
                    <p>€1310.00</p>
                    <p>€1750.00</p>
                    <p>€1925.00</p>
                    <p>€198.00</p>
                    <p>€220.00</p>
                    <p>€205.00</p>
                    <p>€30.00</p>
                    <p>€30.00</p>
                    <p>€135.00</p>
                    <p>€25.00</p>
                    <p>€25.00</p>
            </div>

            <div class="pakkettenmo">
                <p>Proefles (45 minuten). <b>€0</b></p>
                <p>Les (60 minuten). <b>€45,00</b></p>
                <p>5 lessen van 60 minuten. <b>€222,50</b></p>
                <p>10 lessen van 60 minuten. <b>€440,00</b></p>
                <p>Pakket 25 lessen incl. 1 praktijkexamen en gratis Itheorie of theorieboekpakket. <b>€1310,00</b></p>
                <p>Pakket 35 lessen incl. 1 praktijkexamen en gratis Itheorie of theorieboekpakket. <b>€1750,00</b></p>
                <p>Pakket 35 lessen incl. CBR tussentijdse toets, 1 praktijkexamen en gratis Itheorie of theorieboekpakket. <b>€1925,00</b></p>
                <p>CBR tussentijdse toets. <b>€198,00</b></p>
                <p>Praktijkexamen. <b>€220,00</b></p>
                <p>Herexamen. <b>€205,00</b></p>
                <p>Theorieboekenpakket zelfstudie ( theorieboek,10 uren oefenexamens).<b>€30,00</b></p>
                <p>Itheorie, een complete theoriecursus via internet inclusief praktijkfilmpjes, deeltoetsen en heel veel oefenexamens.<b>€30,00</b></p>
                <p>Theoriespoedcursus (via onze partner) met aansluitend  theorie examen bij CBR.<b>€135,00</b></p>
                <p>Traffic manual passenger car (theorieboek Engelstalig).</p>
                <p>Pre-exam test passenger car (oefenexamens Engelstalig).<b>€20,00</b></p>
                <p>Opfriscursus: Op aanvraag!</p>
                <a class="button" href="<?php echo url('/bestel')?>">SELECTEER EEN PAKKET</a>
            </div>
        </div>
    </div>
