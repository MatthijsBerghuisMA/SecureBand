<?php

// deze file is belangrijk. hier zou ik niks aan veranderen.

/**
 * Class BestelController
 *
 */
class BestelController {

	function overview(){


		// Haal alle Opleidingen op uit de "model" laag.
		$bestel = getBestel();


		if (isset($_POST['submit'])) {
			$first_name = filter_var($_POST['first_name'] , FILTER_SANITIZE_STRING);
			$last_name = filter_var($_POST['last_name'] , FILTER_SANITIZE_STRING);
			$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
			$telefoon = filter_var($_POST['telefoon'], FILTER_SANITIZE_STRING);
			$adres = filter_var($_POST['adres'], FILTER_SANITIZE_STRING);
			$leeftijd = filter_var($_POST['Leeftijd'], FILTER_SANITIZE_STRING);
			$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
			$dropdown1 = filter_var($_POST['dropdown'], FILTER_SANITIZE_STRING);

			$to = "info@stalrijopleiding.nl";
			//$headers = "From: $email" . "\r\n" .
			"CC: info@stalrijopleiding.nl";
			$txt = $email."\n\nJe hebt een mailtje ontvangen van ".$first_name." ".$last_name.".\n\n"."Telefoonnummer"." ".$telefoon.".\n\n"."Adres"." ".$adres.".\n\n"."Leeftijd"." ".$leeftijd.".\n\n"."Pakket"." ".$dropdown1.".\n\n".$message;

			mail($to, $dropdown1, $txt);
		}

		$template_engine = get_template_engine();
		echo $template_engine->render('bestel', [
			'bestel' => $bestel
		]);


	}

}
