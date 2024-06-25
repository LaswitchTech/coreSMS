# send(string $number, string $body)
This method is used to send an SMS. The method requires the phone number and the body of the SMS to be sent. The method will return `true` if the SMS is sent successfully, otherwise it will return `false`.

```php
$SMS->send('08012345678', 'Hello, World!');
```
