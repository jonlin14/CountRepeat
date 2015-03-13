<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path'=>__DIR__."/../views"
    ));

    $app->get("/", function() use($app) {
        return $app['twig']->render("home.twig");
    });

    $app->get("results", function() use($app) {
        $countClass = new RepeatCounter;
        $results = $countClass->countRepeats($_GET["input_word"], $_GET["input_sentence"]);
        return $app['twig']->render("results.twig", array('result1' => $results));
    });
    return $app;
