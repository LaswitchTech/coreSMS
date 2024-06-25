<?php

// Import additionnal class into the global namespace
use LaswitchTech\coreSMS\SMS;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Initiate SMS
$SMS = new SMS();

// Send SMS
var_dump($SMS->send('+1234567890','Hello from Twilio using coreSMS!'));
