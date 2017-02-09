# [![JobApis.com](https://i.imgur.com/9VOAkrZ.png)](https://www.jobapis.com) GoRemote RSS Feed Client

[![Twitter URL](https://img.shields.io/twitter/url/https/twitter.com/jobapis.svg?style=social&label=Follow%20%40jobapis)](https://twitter.com/jobapis)
[![Latest Version](https://img.shields.io/github/release/jobapis/jobs-goremote.svg?style=flat-square)](https://github.com/jobapis/jobs-goremote/releases)
[![Software License](https://img.shields.io/badge/license-APACHE%202.0-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/jobapis/jobs-goremote/master.svg?style=flat-square&1)](https://travis-ci.org/jobapis/jobs-goremote)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/jobapis/jobs-goremote.svg?style=flat-square)](https://scrutinizer-ci.com/g/jobapis/jobs-goremote/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/jobapis/jobs-goremote.svg?style=flat-square)](https://scrutinizer-ci.com/g/jobapis/jobs-goremote)
[![Total Downloads](https://img.shields.io/packagist/dt/jobapis/jobs-goremote.svg?style=flat-square)](https://packagist.org/packages/jobapis/jobs-goremote)

## About

This package helps PHP developers connect with the [GoRemote.io](https://goremote.io/) job board's RSS feed. In just a couple lines of code, you can grab job listings from GoRemote's feed.

### Example

```php
$client = new GoRemoteProvider(new GoRemoteQuery());
$jobs = $client->getJobs();
```

See [Usage](#usage) section below for more detailed examples.

### Mission

[JobApis](https://www.jobapis.com) makes job board and company data more accessible through open source software. To learn more, visit [JobApis.com](https://www.jobapis.com), or contact us at [admin@jobapis.com](mailto:admin@jobapis.com).


## Requirements
- [PHP 5.5+](http://www.php.net/)
- [Composer](https://getcomposer.org/)


## Installation

You can install this package using Composer. From the command line, run:

```bash
$ composer require jobapis/jobs-goremote
```


## Usage

GoRemote provides no search parameters, just a feed of all their latest jobs via RSS. In order to get the latest job listings, first create a query object.
 
```php
$query = new JobApis\Jobs\Client\Queries\GoRemoteQuery();
```

Then inject the query object into the provider.

```php
$client = new JobApis\Jobs\Client\Providers\GoRemoteProvider($query);
```

And call the "getJobs" method to retrieve results.

```php
$jobs = $client->getJobs();
```

The `getJobs()` method will return a [Collection](https://github.com/jobapis/jobs-common/blob/master/src/Collection.php) of [Job](https://github.com/jobapis/jobs-common/blob/master/src/Job.php) objects based on Schema.org's [JobPosting](https://schema.org/JobPosting) specification.


## Testing

1. Clone this repository from Github.
2. Install the dependencies with Composer: `$ composer install`.
3. Run the test suite: `$ ./vendor/bin/phpunit`.
4. (Optional) Run the test suite with real HTTP calls to the API: `$ REAL_CALL=1 ./vendor/bin/phpunit`.

A code coverage report will be generated in the `build/` directory at the root of the project.


## Contributing

Please see [JobApis' contribution guidelines](https://www.jobapis.com/contributing/) for details.

## Legal

### Disclaimer

This package is not affiliated with or supported by GoRemote and we are not responsible for any use or misuse of this software.

### License

This package uses the Apache 2.0 license. Please see the [License File](https://www.jobapis.com/license/) for more information.

### Copyright

Copyright 2017, [Karl Hughes](https://github.com/karllhughes).
