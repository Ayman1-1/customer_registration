<?php

require_once 'vendor/autoload.php';


$clientID = '354040768414-ce0u6md8cmj0honbkurto30ok4de9315.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'http://localhost/User_reg/welcome.php';


// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");

//connect to database

$hostname = "localhost";
$username = "root";
$password = "";
$database = "user_reg";

$conn = mysqli_connect($hostname, $username, $password, $database);
