<?php
session_start();
require_once 'vendor/autoload.php';
var_dump(1); die();
$clientID = 'Y955877358352-b323hcj6lidedf3nlk11u1d7ch7fqed9.apps.googleusercontent.com';
$clientSecret = 'YGOCSPX-7KEmquwl9iOUXC90eE8olvKXdodB';
$redirectUri = 'http://localhost/demoProject/lgin/index.php'; 

$client = new Google\Client();
$client->setClientId($clientID);

$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope('email');
$client->addScope('profile');

if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token);

    $service = new Google\Service\Oauth2($client);
    $userInfo = $service->userinfo->get();

  
    $googleUserId = $userInfo->id;
    $googleEmail = $userInfo->email;
    $googleName = $userInfo->name;
    
} else {
    $authUrl = $client->createAuthUrl();
    header("Location: $authUrl");
    exit();
}
