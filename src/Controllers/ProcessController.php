<?php
namespace Wellspring\Controllers;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Wellspring\Repositories;

class ProcessController
{
    private $runRepository = [];

    public function index(Request $request, Application $app)
    {
        $runs = $app['repositories.runs']->getAll();

        return $app['twig']->render('runs.html.twig', ['runs' => $runs]);
    }
}
