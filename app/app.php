<?php
    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/src.php";

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), ["twig.path" => __DIR__."/../views"]);

    $app->get('/', function() use($app) {
        return $app["twig"]->render("root.html.twig");
    });

    $app->post('/count', function() use($app) {
        $count = new Count;
        $count->parse_sentence($_POST['sentence']);
        $word_count = $count->count_words($_POST['word']);
        return $app["twig"]->render("count.html.twig", ['word_count'=>$word_count]);
    });

    return $app;
?>
