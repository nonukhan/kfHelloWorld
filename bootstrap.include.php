<?php

use thirdParty\HelloWorld\Control\Sample06;
use thirdParty\HelloWorld\Control\Sample07;
use thirdParty\HelloWorld\Control\Sample08;

// scan the /Locale directory and add all available languages
$app['utils']->addLanguageFiles(THIRDPARTY_PATH.'/HelloWorld/Data/Locale');


/**
 * Example 1
 *
 * "Hello World" as kitCommand at any content of the CMS
 *
 */
$app->get('/command/helloworld/{parameters}', function ()
{
    return 'Hello World!';
});

/**
 * Example 2
 *
 * "Hello World" directly from kitFramework
 */
$app->get('/helloworld', function ()
{
    return 'Hello World!';
});

/**
 * Example 3: "Hello USER"
 */
$app->get('/helloworld/{name}', function ($name)
{
    return "Hello $name!";
});

/**
 * Example 4
 *
 * Show the automated generated parameter string
 */
$app->get('/command/sample04/{parameters}', function ($parameters)
{
    return "Parameters: $parameters";
});

/**
 * Example 5
 *
 * Show the parameters as associated array
 *
 */
$app->get('/command/sample05/{parameters}', function ($parameters) {
    $params = json_decode(base64_decode($parameters), true);
    ob_start();
    echo "<pre>";
    print_r($params);
    echo "</pre>";
    return ob_get_clean();
});

/**
 * Example 6
 *
 * Use Class phpManufaktur\Basic\Control\kitCommand\Basic for the handling
 */
$app->get('/command/sample06/{parameters}', function ($parameters) use($app) {
    $Sample = new Sample06();
    return $Sample->sayHello();
});

/**
 * Example 7a
 *
 * Use Class kitCommand\Basic and the template engine Twig to display some
 * information about the used content management system
 */
$app->get('/command/sample07a/{parameters}', function ($parameters) use ($app) {
    $Sample = new Sample07($app, $parameters);
    return $Sample->Sample07a();
});

/**
 * Example 7b
 *
 * Use class kitCommand\Basic, Twig, Translator and the Form factory to create
 * and display a form to type in some data and give a response
 */
$app->match('/command/sample07b/{parameters}', function ($parameters) use ($app) {
    $Sample = new Sample07($app, $parameters);
    return $Sample->Sample07b();
});


/**
 * Sample 8: Start
 *
 * Use the function createIFrame() of class kitCommand\Basic to create a iframe
 * which will contain the response of the kitCommand. The iframe source point to
 * a route of the kitFramework.
 */
$app->match('/command/sample08/{parameters}', function ($parameters) use ($app) {
    $Sample = new Sample08($app, $parameters);
    // the source of the iframe points to a route of the kitFramework (see below)
    $source = FRAMEWORK_URL.'/helloworld/sample08/start/'.$parameters;
    return $Sample->createIFrame($source);
});

/**
 * Sample 8: Route to start (default)
 *
 * Respond with a full rendered HTML5 page which is independend from any settings
 * of the Content Management System
 */
$app->match('/helloworld/sample08/start/{parameters}', function ($parameters) use ($app) {
    $Sample = new Sample08($app, $parameters);
    return $Sample->start();
});

$app->match('/helloworld/sample08/step02/{parameters}', function ($parameters) use ($app) {
    $Sample = new Sample08($app, $parameters);
    return $Sample->step02();
});

$app->match('/helloworld/sample08/step03/{parameters}', function ($parameters) use ($app) {
    $Sample = new Sample08($app, $parameters);
    return $Sample->step03();
});

$app->match('/helloworld/sample08/step04/{id}/{parameters}', function ($id, $parameters) use ($app) {
    $Sample = new Sample08($app, $parameters);
    return $Sample->step04($id);
});