# config(string $option, string $value)
This method is used to set the configuration options for the module.

```php
$SMS->config('option', 'value');
```

## Available Options
- provider: The provider to use for sending the email. The default provider is `twilio`.
- token: The token to use for sending the email.
- phone: The phone number to use for sending the email.
- sid: The sid to use for sending the email.
