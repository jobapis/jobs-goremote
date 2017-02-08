# GoRemote RSS Feed Client

[![Latest Version](https://img.shields.io/github/release/jobapis/jobs-goremote.svg?style=flat-square)](https://github.com/jobapis/jobs-goremote/releases)
[![Software License](https://img.shields.io/badge/license-APACHE%202.0-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/jobapis/jobs-goremote/master.svg?style=flat-square&1)](https://travis-ci.org/jobapis/jobs-goremote)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/jobapis/jobs-goremote.svg?style=flat-square)](https://scrutinizer-ci.com/g/jobapis/jobs-goremote/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/jobapis/jobs-goremote.svg?style=flat-square)](https://scrutinizer-ci.com/g/jobapis/jobs-goremote)
[![Total Downloads](https://img.shields.io/packagist/dt/jobapis/jobs-goremote.svg?style=flat-square)](https://packagist.org/packages/jobapis/jobs-goremote)

This package provides [GoRemote.io](https://goremote.io/) RSS feed support for [Jobs Common](https://github.com/jobapis/jobs-common).

![](https://i.imgur.com/BCoU0OM.png)

## Installation

To install, use composer:

```
composer require jobapis/jobs-goremote
```

## Usage
GoRemote provides no search parameters, just a feed of all their latest jobs via RSS.

In order to grab jobs, first create a query object:
 
```php
// Instantiate the query object
$query = new JobApis\Jobs\Client\Queries\GoRemoteQuery();
```

Then inject the query object into the provider.

```php
// Instantiating a provider with a query object
$client = new JobApis\Jobs\Client\Provider\GoRemoteProvider($query);
```

And call the "getJobs" method to retrieve results.

```php
// Get a Collection of Jobs
$jobs = $client->getJobs();
```

The `getJobs` method will return a [Collection](https://github.com/jobapis/jobs-common/blob/master/src/Collection.php) of [Job](https://github.com/jobapis/jobs-common/blob/master/src/Job.php) objects.

## Testing

``` bash
$ ./vendor/bin/phpunit
```

## Contributing

Please see [CONTRIBUTING](https://github.com/jobapis/jobs-goremote/blob/master/CONTRIBUTING.md) for details.


## Credits

- [Karl Hughes](https://github.com/karllhughes)
- [All Contributors](https://github.com/jobapis/jobs-goremote/contributors)


## License

The Apache 2.0. Please see [License File](https://github.com/jobapis/jobs-goremote/blob/master/LICENSE) for more information.
