<?php

namespace App\Action;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

Final class HomeAction {
	public function __invoke( Request $request, Response $response ): Response {
		$response->getBody()->write( 'Yo Calgary!' );

		return $response;
	}
}