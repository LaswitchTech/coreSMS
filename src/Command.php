<?php

// Declaring namespace
namespace LaswitchTech\coreSMS;

// Import additionnal class into the global namespace
use LaswitchTech\coreBase\BaseCommand;
use LaswitchTech\coreSMS\SMS;

class Command extends BaseCommand {

    // Properties
    protected $SMS;

    /**
     * Constructor
     * @param object $Auth
     */
	public function __construct($Auth){

        // Namespace: /sms

        // Initialize SMS
        $this->SMS = new SMS();

		// Call the parent constructor
		parent::__construct($Auth);
	}
}
