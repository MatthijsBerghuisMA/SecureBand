<?php

require '../private/includes/AltoRouter.php';

$CONFIG = require '../private/includes/config.php';
require '../private/includes/init.php';

$router = new AltoRouter();

// $router->setBasePath($CONFIG['BASE_URL']);



$router->map( 'GET', '/', 'HomeController#homepage', 'home' );
$router->map( 'GET', '/opleiding', 'OpleidingController#overview', 'opleiding-overzicht' );
$router->map( 'GET', '/pakketten', 'PackageController#overview', 'pakketten-overzicht' );
$router->map( 'GET', '/drive', 'DriveController#overview', 'drive-overzicht' );
$router->map( 'GET', '/links', 'LinksController#overview', 'links-overzicht' );
$router->map( 'GET|POST', '/contact', 'ContactController#overview', 'contact-overzicht' );
$router->map( 'GET|POST', '/bestel', 'BestelController#overview', 'bestel-overzicht' );

$match = $router->match();


if ( is_array( $match ) && is_callable( $match['target'] ) ) {
	call_user_func_array( $match['target'], $match['params'] );

} else if ( $match !== false ) {
	list( $controller_name, $method ) = explode( '#', $match['target'] );

	try {
		$controller = new $controller_name;

		call_user_func_array( [ $controller, $method ], $match['params'] );

	} catch ( \Exception $e ) {
		echo $e->getMessage();
		exit;
	}
} else {
	
	header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found' );
	echo '404: Onbekende pagina';
}