# CachedEmbed
A package for Laravel 5.5+ and above to cache embed information retrieved using the https://github.com/oscarotero/Embed package.

<div style="max-width: 200px">

[![We offset our carbon footprint via Ecologi](https://toolkit.ecologi.com/badges/cpw/5e3abd8bd52a6300171beadb?black=true&landscape=true)](https://ecologi.com/ademtisoftware?gift-trees)

</div>

If you use this package in production, we ask that you [**buy the world a tree**](https://ecologi.com/ademtisoftware?gift-trees) to thank us for our work. By contributing to our forest you’ll be creating employment for local families and restoring wildlife habitats.

## Installation
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

$data = CachedEmbed::create(
	'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
	[ 'choose_bigger_image' => true ]
);
```

The library also supports setting a specific expiry time for individual embeds via a third parameter:

```php
<?php

use Leewillis77\CachedEmbed\CachedEmbed;

$data = CachedEmbed::create(
	'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
	[ 'choose_bigger_image' => true ],
	30
);
```

# Treeware

You're free to use this package, but if it makes it to your production environment you are required to buy the world a tree.

It’s now common knowledge that one of the best tools to tackle the climate crisis and keep our temperatures from rising above 1.5C is to <a rel="nofollow" href="https://www.bbc.co.uk/news/science-environment-48870920">plant trees</a>. If you support this package and contribute to the Treeware forest you’ll be creating employment for local families and restoring wildlife habitats.

You can buy trees here [offset.earth/ademtisoftware](https://offset.earth/ademtisoftware?gift-trees)

Read more about Treeware at [treeware.earth](http://treeware.earth)
