<?php

// deze file is belangrijk. hier zou ik niks aan veranderen.

/**
 * Class ContactController
 *
 */
class ContactController {

	function overview() {

		// Haal alle Opleidingen op uit de "model" laag.
		$contact = getContact();

		if (isset($_POST['subject'])) {
			$name = filter_var($_POST['name'] , FILTER_SANITIZE_STRING);
			$subject = filter_var($_POST['subject'] , FILTER_SANITIZE_STRING);
			$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
			$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

			$to = "info@stalrijopleiding.nl";
			//$headers = "From: $email" . "\r\n" .
			"CC: info@stalrijopleiding.nl";
			$txt = $email."\n\nJe hebt een mailtje ontvangen van ".$name.".\n\n".$email.".\n\n".$message;

			mail($to, $subject, $txt);
		}


		$template_engine = get_template_engine();

		echo $template_engine->render('contact', [
			'contact' => $contact
		]);

	}

}
