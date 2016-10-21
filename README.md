# Silex Uuid Provider

[![Build Status](https://travis-ci.org/SilexFriends/Uuid.svg?branch=master)](https://travis-ci.org/SilexFriends/Uuid)
[![Code Climate](https://codeclimate.com/github/SilexFriends/Uuid/badges/gpa.svg)](https://codeclimate.com/github/SilexFriends/Uuid)
[![Test Coverage](https://codeclimate.com/github/SilexFriends/Uuid/badges/coverage.svg)](https://codeclimate.com/github/SilexFriends/Uuid/coverage)
[![Issue Count](https://codeclimate.com/github/SilexFriends/Uuid/badges/issue_count.svg)](https://codeclimate.com/github/SilexFriends/Uuid)


## Install

```
composer require mrprompt/silex-uuid
```

## Usage
```
use SilexFriends\Uuid\Uuid;

$app = new Application;
$app->register(new Uuid());

$uuid = $app['uuid.generate']();
```

## Tests

```
./vendor/bin/phpunit
```

## License

MIT