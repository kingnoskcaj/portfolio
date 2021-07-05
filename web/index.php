<?php

require('../vendor/autoload.php');

$app = new Silex\Application();
$app['debug'] = true;

// Register the monolog logging service
$app->register(new Silex\Provider\MonologServiceProvider(), array(
  'monolog.logfile' => 'php://stderr',
));

// Register view rendering
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
));

// Our web handlers

$app->get('/', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('index.twig');
});

$app->get('/cv', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('cv.twig');
});

$app->get('/project-creator', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('cv.twig');
});

$app->get('/guessify', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('cv.twig');
});

$app->get('/car-dealer-website', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('cv.twig');
});

$app->get('/portfolio', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('cv.twig');
});

$app->get('/zigzbot', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('cv.twig');
});


$app->run();
