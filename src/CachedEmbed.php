<?php

namespace Leewillis77\CachedEmbed;;

use Embed\Embed;
use Illuminate\Support\Facades\Cache;

class CachedEmbed
{
    public static function create($url, $args)
    {
        return Cache::store('oembed')->remember($url, 43200, function () use ($url, $args) {
            // Grab the embed data.
            $data = Embed::create($url, $args);
            // Pre-load image attribute in the object to save work later.
            // Otherwise we end up doing 200ms work to retrieve the image URL *after* retrieving from the cache.
            $data->image;
            return $data;
        });
    }
}
