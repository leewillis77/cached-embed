# CachedEmbed

Laravel 5.5 package to cache embed information retrieved using the https://github.com/oscarotero/Embed package.

## Installation

Add the package to your Laravel project using composer:

```bash
$ composer require leewillis77/cached-embed
```

## Configuration
You can publish the configuration file using the following artisan command:

```bash
$ php artisan vendor:publish --provider="Leewillis77\CachedEmbed\CachedEmbedServiceProvider" --tag="config"  
```

You can change the following values in the configuration file (`config/cachedembed.php`):

* `expiry`  The default expiry time of cached embed data (in minutes).
* `store`   The name of cache store to use to store embed data. This must be a valid cache store as defined in `config/cache.php`

## Usage

Simply use `CachedEmbed::create` instead of `Embed::create`, e.g

```php

<?php

use Leewillis77\CachedEmbed\CachedEmbed;

$data = CachedEmbed::create('https://www.youtube.com/watch?v=dQw4w9WgXcQ');
```

As with the underlying embed library, you can pass arguments as the second variable, e.g.

```php

<?php

use Leewillis77\CachedEmbed\CachedEmbed;

$data = CachedEmbed::create('https://www.youtube.com/watch?v=dQw4w9WgXcQ', [ 'choose_bigger_image' => true ]);
```

The library also supports setting a specific expiry time for individual embeds via a third parameter:

```php

<?php

use Leewillis77\CachedEmbed\CachedEmbed;

$data = CachedEmbed::create('https://www.youtube.com/watch?v=dQw4w9WgXcQ', [ 'choose_bigger_image' => true ], 30);
```
