<?php

// deze file is belangrijk. hier zou ik niks aan veranderen.

/**
 * Class linksController
 *
 */
class LinksController {

	function overview(){

		// Haal alle Linksen op uit de "model" laag.
		$links = getLinks();


		$template_engine = get_template_engine();

		echo $template_engine->render('links', [
			'links' => $links
		]);

	}

}
