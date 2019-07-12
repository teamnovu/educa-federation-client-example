<?php

require '../vendor/autoload.php';

use  Teamnovu\SamlClient\Saml2AuthFactory;

$config = require 'config.php';
$client = Saml2AuthFactory::forServiceProvider($config);
try {
    $client->acs();
} catch(\Exception $ex) {
    echo $ex->getMessage();
    die();
}

$user = $client->getSaml2User();
$user->getNameId(); // unique identifier for the user
$user->getIntendedUrl(); // url originally passed as resource_name