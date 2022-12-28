<?php

namespace App\Controllers;

use Psr\Container\ContainerInterface as Container;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class BaseController {
	protected $data = [];

	protected $container;

	protected $view;

	public function __construct( Container $container ) {
		$this->container = $container;
		$this->view = $this->container->get('view');
	}

	protected function render( Response $response, $file ) {
		return $this->view->render( $response, $file );
	}
}