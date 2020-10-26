Need to setup queue server.

Add token in .env

```
LOG_TOKEN="12976903nasdjohynaddfhjl$1289"
LOG_ADDRESS="127.0.0.1:8000"
```

**LOG_ADDRESS** will check with `request()->getHttpHost()`. If it's same, will allow to add the address.

Log server is only do for the local network and not to use for the public network.

Send the **POST** request to `/log`

```
{
	"token" : "12976903nasdjohynaddfhjl$1289",
	"channel" : "payment",
	"type" : "info",
	"text" : "why why tell me please aaa"
}
```


For the client side

Please add following code in logging.php

```php
'custom' => [
            'driver' => 'custom',
            'via' => App\Logging\SampleLogger::class,
            'channel' => 'mylog',
            'with' => [
                'address' => 'http://127.0.0.1:8000/log',
                'token' => env('LOG_TOKEN')
            ]
        ],
```

And use the custom in .env like `LOG_CHANNEL=custom`.

Copy Logging folder to app\Logging folder of your project.

