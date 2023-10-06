<?php

error_reporting(E_ALL ^ E_DEPRECATED);

require(__DIR__ . '/../vendor/autoload.php');

use PHP_DCAT_AP\DCAT\Agent;
use PHP_DCAT_AP\DCAT\Catalogue;
use PHP_DCAT_AP\DCAT\Dataset;
use PHP_DCAT_AP\DCAT\Literal;
use PHP_DCAT_AP\Serializer\RdfSerializer;

// Method 1 (complete object)
$cat = new Catalogue(
    'test/cat/1',
    [
        'title' => [new Literal('Smart Connected Supplier Network Vocabulary Hub ', 'nl')],
        'description' => [new Literal('Test here', 'en'), new Literal('Hier NL', 'nl')],
        'dataset' => [new Dataset()],
        'publisher' => new Agent(),
    ]
);

// Method 2 (building step by step)
$cat2 = new Catalogue();


$serializer = new RdfSerializer();
$serializer->checkRequiredProperties = false;

$serializer->addSubject($cat);
$serializer->addSubject($cat2);

$output = $serializer->graph->serialise('ttl');

print($output);
