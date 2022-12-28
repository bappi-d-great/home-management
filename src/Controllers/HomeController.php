<?php

namespace App\Controllers;

use Psr\Container\ContainerInterface as Container;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class HomeController extends BaseController {

	public function __construct( Container $container ) {
		parent::__construct( $container );

		$this->data['title'] = 'Home Page';
	}

	public function index( Request $request, Response $response, $args ) {
		return $this->render( $response, 'home.php' );
	}

}