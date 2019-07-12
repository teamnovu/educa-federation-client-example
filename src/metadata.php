<?php

require '../vendor/autoload.php';

use  Teamnovu\SamlClient\Saml2AuthFactory;

$config = require 'config.php';
$client = Saml2AuthFactory::forServiceProvider($config);
$metadata = $client->getMetadata();

header('content-type: text/xml');
echo $metadata;