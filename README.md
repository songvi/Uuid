# Silex Uuid Provider

[![Build Status](https://travis-ci.org/mrprompt/silex-uuid.svg?branch=master)](https://travis-ci.org/mrprompt/silex-uuid)


```
use SilexFriends\Uuid\Uuid;

...

$app = new Application;
$app->register(new Uuid());

$uuid = $app['uuid.generate']();

...
```

:D