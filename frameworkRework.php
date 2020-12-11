<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';
$config['displayErrorDetails']= true;
$config['addContentLengthHeader']= false;


$app = new \Slim\App(['settings'=>$config]);

$app->get('/ipa', function(Request $request, Response $response) {
    $ipaInfo= [
    'Name' => 'IPA',
    'taste' => 'hoppy',
    'location' => 'England'
    ];
    
    $response->getBody()->write(json_encode($ipaInfo));
    return $response;
});

$app->get('/stout', function(Request $request, Response $response) {
    $stoutInfo= [
    'Name' => 'Stout',
    'taste' => 'dark',
    'location' => 'England'
    ];
    $response->getBody()->write(json_encode($stoutInfo));
    return $response;
});

app->get('/porter', function(Request $request, Response $response) {
    $porterInfo = [
    'Name' => 'Porter',
    'taste' => 'well-hopped',
    'location' => 'England'
    ];
    
    $response->getBody()->write(json_encode($porterInfo));
    return $response;
});

$app->get('/sour', function(Request $request, Response $response) {
    $sourInfo= [
    'Name' => 'Sour',
    'taste' => 'acidic',
    'location' => 'Belgium'
    ];
    
    $response->getBody()->write(json_encode($sourInfo));
    return $response;

$app->get('/ipa/voodoo', function(Request $request, Response $response) {
    $voodooRanger = [
    'Name' => 'Voodoo Ranger',
    'abv' => '7.0',
    'ibu' => '50'
    ];
    
    $response->getBody()->write(json_encode($voodooRanger));
    return $response;
});

$app->get('/ipa/voodoo', function(Request $request, Response $response) {
    $minuteIPA120 = [
    'Name' => '120 Minute IPA',
    'abv' => '20.0',
    'ibu' => '120'
    ];
    
    $response->getBody()->write(json_encode($minuteIPA120));
    return $response;
});

$app->get('/ipa/voodoo', function(Request $request, Response $response) {
    $twoHeartedAle = [
    'Name' => 'Two Hearted Ale',
    'abv' => '7.0',
    'ibu' => '60'
    ];
    
    $response->getBody()->write(json_encode($twoHeartedAle));
    return $response;
});




$app->run();

