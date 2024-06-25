# Usage
## Initiate SMS
To use `SMS`, simply include the SMS.php file and create a new instance of the `SMS` class.

```php
<?php

// Import additionnal class into the global namespace
use LaswitchTech\coreSMS\SMS;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Initiate SMS
$SMS = new SMS();
```

### Properties
`SMS` provides the following properties:

- [Configurator](https://github.com/LaswitchTech/coreConfigurator)
- [Logger](https://github.com/LaswitchTech/coreSMS)

### Methods
`SMS` provides the following methods:

- [config()](methods/SMS/config.md)
- [formateToE164()](methods/SMS/formateToE164.md)
- [send()](methods/SMS/send.md)
- [isInstalled()](methods/SMS/isInstalled.md)
- [isReady()](methods/SMS/isReady.md)
- [validate()](methods/SMS/validate.md)

## Initiate Command for coreCLI integration
To use `Command`, simply create `Command/SmsCommand.php` file and extend a new instance of the `Command` class.

```php

// Import Logger class into the global namespace
// These must be at the top of your script, not inside a function
use LaswitchTech\coreSMS\Command;

// Initiate the Command class
class SmsCommand extends Command {}
```

### Methods
`Command` provides the following methods:

- [method()](methods/Command/method.md)

## Initiate Controller for coreAPI and/or coreRouter integration
To use `Controller`, simply create `Controller/SmsController.php` file and extend a new instance of the `Controller` class.

```php

// Import Logger class into the global namespace
// These must be at the top of your script, not inside a function
use LaswitchTech\coreSMS\Controller;

// Initiate the Controller class
class SmsController extends Controller {}
```

### Methods
`Controller` provides the following methods:

- [method()](methods/Controller/method.md)
