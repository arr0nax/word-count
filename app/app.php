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
        $count = new RepeatCounter;
        $word_count = $count->CountRepeats($_POST['sentence'],$_POST['word']);
        return $app["twig"]->render("root.html.twig", ['word_count'=>$word_count,'sentence'=>$count->sentence_array,'target_word'=>$count->word]);
    });

    return $app;
?>
