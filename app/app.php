<?php
  // link to autoload and CONTACT CLASS
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Contact.php";

    // needed to start the session
    session_start();
    // load list of contacts
    if (empty($_SESSION['list_of_contacts'])) {
        $_SESSION['list_of_contacts'] = array();
    }

    //load silex and turn on debug
    $app = new Silex\Application();
    $app['debug'] = true;

    // needed for twig 
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));


?>
