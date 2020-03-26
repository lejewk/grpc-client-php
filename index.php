<?php
require dirname(__FILE__).'/vendor/autoload.php';

@include_once dirname(__FILE__).'/src/GPBMetadata/Config.php';
@include_once dirname(__FILE__).'/src/Config/ConfigStoreClient.php';
@include_once dirname(__FILE__).'/src/Config/ConfigResponse.php';
@include_once dirname(__FILE__).'/src/Config/ConfigRequest.php';


$client = new Config\ConfigStoreClient('localhost:50051', [
    'credentials' => Grpc\ChannelCredentials::createInsecure(),
]);
$request = new \Config\ConfigRequest();
$request->setProfile("prod");
list($response, $status) = $client->Get($request)->wait();

$message = $response->getJsonConfig();

var_dump($message);

