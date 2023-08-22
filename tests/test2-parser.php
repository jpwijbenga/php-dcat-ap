<?php

use EasyRdf\Graph;
use PHP_DCAT_AP\Parser\RdfParser;

error_reporting(E_ALL ^ E_DEPRECATED);

require(__DIR__ . '/../vendor/autoload.php');

$graph = new Graph();
$graph->parseFile(__DIR__ . '/resources/vlaanderen-example1.rdf');

$parser = new RdfParser();
$arr = $parser->fromGraph($graph);

print_r($arr);
