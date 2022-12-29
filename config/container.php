<?php

use Psr\Container\ContainerInterface;
use Slim\App;
use Slim\Factory\AppFactory;
use Slim\Views\PhpRenderer;

return [
	'settings' => function() {
		return require __DIR__ . '/settings.php';
	},

	/*'view' => [
		'template_path' => dirname(__DIR__, 1) . '/src/Views'
	],*/

	'view' => function ($container) {
		/*$view = \Slim\Views\Twig::create(dirname(__DIR__, 1) . '/src/Views', [
			'cache' => 'path/to/cache'
		]);*/

		$view = new PhpRenderer(
			dirname(__DIR__, 1) . '/src/Views'
		);

		// Instantiate and add Slim specific extension
		//$router = $container->get('router');
		//$uri = \Slim\Http\Uri::createFromEnvironment(new \Slim\Http\Environment($_SERVER));
		//$view->addExtension(new \Slim\Views\TwigExtension($router, $uri));

		return $view;
	},

	App::class => function( ContainerInterface $container ) {
		AppFactory::setContainer( $container );

		return AppFactory::create();
	}
];