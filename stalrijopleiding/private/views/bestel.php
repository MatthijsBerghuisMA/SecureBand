<?php $this->layout('standard_layout') ?>

<!-- deze file is belangrijk, hier zou ik niks aan veranderen.  -->

<?php $this->start('css') ?>
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo url('/assets/css/bestel.css') ?>" />
<?php $this->stop('css') ?>

<?php $this->start('title') ?>
<title>Stal Rijopleiding | Bestel</title>
<?php $this->stop('title') ?>

<div class="bestel">
    <h1>BESTELLEN VAN EEN PAKKET</h1>
    <form action="<?php echo url('/bestel') ?>" class="whip" method="post">
        <div class="input--container">
            <div class="input_left">

                <div class="input-container">
                    <input type="text" id="firstname" name="first_name" class="input left" required>
                    <label class="input_label" for="firstname">Voornaam</label>
                    <div class="input_underline"></div>
                </div>
                <div class="input-container">
                    <input type="text" name="last_name" id="last_name" class="input left" required>
                    <label class="input_label" for="last_name">Achternaam</label>
                    <div class="input_underline"></div>
                </div>
                <div class="input-container">
                    <input type="text" name="email" id="email" class="input left" required>
                    <label class="input_label" for="email">Email</label>
                    <div class="input_underline"></div>
                </div>
            </div>
            <div class="input-right">
                <div class="input-container">
                    <input type="text" name="telefoon" id="telefoon" class="input" required>
                    <label class="input_label" for="telefoon">Telefoon Nummer</label>
                    <div class="input_underline"></div>
                </div>
                <div class="input-container">
                    <input type="text" name="adres" id="adres" class="input" required>
                    <label class="input_label" for="adres">Adres</label>
                    <div class="input_underline"></div>
                </div>
                <div class="input-container">
                    <input type="text" name="Leeftijd" id="leeftijd" class="input" required>
                    <label class="input_label" for="leeftijd">Leeftijd</label>
                    <div class="input_underline"></div>
                </div>
                <select class="dropdown2" name="dropdown" require>
                    <option value="Proefles (45 minuten).">Proefles (45 minuten).</option>
                    <option value="Les (60 minuten).">Les (60 minuten).</option>
                    <option value="5 lessen van 60 minuten.">5 lessen van 60 minuten.</option>
                    <option value="10 lessen van 60 minuten.">10 lessen van 60 minuten.</option>
                    <option value="Pakket 35 lessen">Pakket 35 lessen.</option>
                    <option value="Pakket 35 lessen incl.">Pakket 35 lessen incl.</option>
                    <option value="CBR tussentijdse toets.">CBR tussentijdse toets.</option>
                    <option value="Praktijkexamen.">Praktijkexamen.</option>
                    <option value="Herexamen.">Herexamen.</option>
                    <option value="Theorieboekenpakket zelfstudie">Theorieboekenpakket zelfstudie.</option>
                    <option value="Itheorie, een complete theoriecursus">Itheorie, een complete theoriecursus.</option>
                    <option value="Theoriespoedcursus">Theoriespoedcursus.</option>
                    <option value="Traffic manual passenger car">Traffic manual passenger car.</option>
                    <option value="Pre-exam test passenger car.">Pre-exam test passenger car.</option>
                    <option value="Opfriscursus: Op aanvraag!">Opfriscursus: Op aanvraag!</option>
                </select>
            </div>
            <div class="input-text">
                <div class="msg-container">
                    <textarea class="input" type="text" name="message" id="bericht"></textarea>
                    <label for="bericht" class="input_label">Bericht</label>
                    <div class="input_underline"></div>
                </div>
                <input type="submit" name="submit" class="button " value="VERSTUUR">
            </div>
        </div>
</div>
</form>
</div>
<script src="assets/js/contact.js"></script>
