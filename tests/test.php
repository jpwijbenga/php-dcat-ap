<?php

error_reporting(E_ALL ^ E_DEPRECATED);

require(__DIR__ . '/../vendor/autoload.php');

use PHP_DCAT_AP\DCAT\Catalogue;
use PHP_DCAT_AP\DCAT\Literal;
use PHP_DCAT_AP\Serializer\RdfSerializer;

$cat = new Catalogue('test/cat/1');

$cat->title[] = new Literal('Title', 'nl');
$cat->description = [new Literal('Test here', 'en'), new Literal('Hier NL', 'nl')];

$serializer = new RdfSerializer();

$serializer->addSubject($cat);

$output = $serializer->graph->serialise('ttl');

print($output);
