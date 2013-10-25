<?php namespace Contentful; // just for ease

// require the lib
require_once dirname (__FILE__) . '/../contentful.php';

// demo token from the official docs
$ACCESS_TOKEN = 'b4c0n73n7fu1';

// instance the client
$client = Client::get ($ACCESS_TOKEN);

// use it for your needs
$space = $client->space ('cfexampleapi');

$contentTypes = $client->contentTypes ('cfexampleapi');
$contentType = $client->contentType ('cat', 'cfexampleapi');

$entries = $client->entries ('cfexampleapi');
$entry = $client->entry ('nyancat', 'cfexampleapi');

$assets = $client->assets ('cfexampleapi');
$asset = $client->asset ('nyancat', 'cfexampleapi');

