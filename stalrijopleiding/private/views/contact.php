<?php $this->layout('standard_layout') ?>

<!-- deze file is belangrijk, hier zou ik niks aan veranderen. alleen de email en het telefoon nummer.  -->

<?php $this->start('css') ?>
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo url('/assets/css/contact.css') ?>" />
<?php $this->stop('css') ?>

<?php $this->start('title') ?>
<title>Stal Rijopleiding | Contact</title>
<?php $this->stop('title') ?>

<div class="contactphp">
    <div class="forms1">
        <div class="box">
            <h1>CONTACT ONS</h1>
            <form action="<?php echo url('/contact') ?>" class="whip" method="post">
                <div class="input-container">
                    <input type="text" id="name" name="name" class="input" required>
                    <label class="input_label" for="firstname">Naam</label>
                    <div class="input_underline"></div>
                </div>
                <div class="input-container">
                    <input type="text" name="subject" id="subject" class="input" required>
                    <label class="input_label" for="subject">Onderwerp</label>
                    <div class="input_underline"></div>
                </div>
                <div class="input-container">
                    <input type="text" name="email" id="email" class="input" required>
                    <label class="input_label" for="email">Email</label>
                    <div class="input_underline"></div>
                </div>
                <div class="input-container msg-container">
                    <textarea class="input" type="text" name="message" id="bericht" required></textarea>
                    <label for="bericht" class="input_label">Bericht</label>
                    <div class="input_underline"></div>
                </div>
                <input type="submit" name="submit" class="button " value="VERSTUUR">
            </form>
            <div class="extras">
                <a href="mailto:info@stalrijopleiding.nl">EMAIL</a>
                <a href="tel:+31626881416">TELEFOON</a>
            </div>
        </div>
    </div>
</div>
<script src="assets/js/contact.js"></script>
