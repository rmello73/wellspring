<?php
require_once __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application();

//$app['debug'] = true;

$app->register(new Silex\Provider\ServiceControllerServiceProvider());
$app->register(new Silex\Provider\TwigServiceProvider(), [
    'twig.path' => __DIR__ . '/../src/Views',
]);

$app['repositories.runs'] = $app->share(function() {
    return new Wellspring\Repositories\Runs;
});
$app['controllers.runs'] = $app->share(function() {
    return new Wellspring\Controllers\ProcessController;
});
$app['controllers.run_data_upload'] = $app->share(function() {
    return new Wellspring\Controllers\DataUploadController;
});
$app['file_upload_name'] = 'processedData';

$app->get('/', function () use ($app) {
    return $app->redirect('/runs');
});
$app->get('/runs', 'Wellspring\\Controllers\\ProcessController::index');
$app->post('/upload', 'Wellspring\\Controllers\\DataUploadController::addFromFile');

$app->run();