<?php

/**
 * kfHelloWorld
 *
 * @author Team phpManufaktur <team@phpmanufaktur.de>
 * @link https://addons.phpmanufaktur.de/extendedWYSIWYG
 * @copyright 2012 Ralf Hertsch <ralf.hertsch@phpmanufaktur.de>
 * @license MIT License (MIT) http://www.opensource.org/licenses/MIT
 */

if ('á' != "\xc3\xa1") {
    // the language files must be saved as UTF-8 (without BOM)
    throw new \Exception('The language file ' . __FILE__ . ' is damaged, it must be saved UTF-8 encoded!');
}

return array(
    'Birthday'
        => 'Geburtstag',
    'First name'
        => 'Vorname',
    'Hello %title% %name%'
        => 'Hallo %title% %name%',
    '<p>Hello %name%, nice to meet you!</p>'
        => '<p>Hallo %name%, schön dich hier zu treffen!</p>',
    'Hello World Sample %number%'
        => '"Hello World" Beispiel %number%',
    'Lady'
        => 'Frau',
    'Last name'
        => 'Nachname',
    'Mister'
        => 'Herr',
    'Next action'
        => 'Nächste Aktion',
    'Please click <a href="%link%">here</a> to load the next step.'
        => 'Bitte klicken Sie <a href="%link%">hier</a> um den nächsten Schritt zu laden.',
    'Please type in your name'
        => 'Bitte geben Sie Ihren Namen an',
    'Send me a confirmation to %email%'
        => 'Schicken Sie mir eine Bestätigung an %email%',
    'Submit'
        => 'Übermitteln',
    'Submit again a form'
        => 'Erneut ein Formular übermitteln',
    'thank you for submitting us the following contact data:'
        => 'vielen Dank für die Übermittlung der folgenden Kontaktdaten:',
    'Thank you, %title% %name%, for submitting your contact data'
        => 'Vielen Dank, %title% %name%, für die Übermittlung Ihrer Kontaktdaten.',
    '<p>The submitted form is not valid, please try again.</p>'
        => '<p>Die übermittelten Formulardaten sind ungültig, bitte versuchen Sie es erneut.</p>',
    'Title'
        => 'Anrede',
    'We have send you a confirmation to <b>%email%</b>, please check your inbox.'
        => 'Wir haben Ihnen eine Bestätigung an die Adresse <b>%email%</b> gesendet, bitte überprüfen Sie Ihr Postfach.'
);