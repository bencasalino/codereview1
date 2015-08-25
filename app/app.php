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




    // used to link to home page
    $app->get('/', function() use ($app) {

        // get all conacts via twig
        return $app['twig']->render('contacts.html.twig', array('contacts' => Contact::getAll()));

    });
    //post a new contact
    $app->post('/create_contact', function() use ($app) {

        $contact = new Contact($_POST['name'], $_POST['phone'], $_POST['address']);
        $contact->save();
        return $app['twig']->render('create_contact.html.twig', array('newcontact' => $contact));

    });

    // delte a contact 
    $app->post('/delete_contacts', function() use($app) {

        Contact::deleteALL();
        return $app['twig']->render('delete_contacts.html.twig');

    });

    return $app;


?>
