<?php

// deze file is belangrijk. hier zou ik niks aan veranderen.

/**
 * Class OpleidingController
 *
 */
class OpleidingController {

	function overview(){

		// Haal alle Opleidingen op uit de "model" laag.
		$opleiding = getOpleiding();


		$template_engine = get_template_engine();

		echo $template_engine->render('opleiding', [
			'opleiding' => $opleiding
		]);

	}

}
