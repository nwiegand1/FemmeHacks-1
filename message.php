<?php
// Get the PHP helper library from twilio.com/docs/php/install
require_once '/path/to/vendor/autoload.php'; // Loads the library
use Twilio\Rest\Client;

// Your Account Sid and Auth Token from twilio.com/user/account
$sid = "AC789d4c412fd6578d774753707937db8b";
$token = "b9b64a1dacafd3f1a8b8408ba5513e7f";
$client = new Client($sid, $token);

$client->messages->create(
    "+15558675309",
    array(
        'from' => '+13108803320',
        'body' => "Please take your pills!",
    )
);