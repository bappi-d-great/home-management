<?php

namespace App\Controllers;

use Psr\Container\ContainerInterface as Container;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class HomeController extends BaseController {

	public function __construct( Container $container ) {
		parent::__construct( $container );
	}

	public function index( Request $request, Response $response, $args ) {
		$v = $this->container->get('view');
		//print_r($v);
		return $this->render( $response, 'home.php' );
	}

}