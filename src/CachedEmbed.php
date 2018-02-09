<?php

namespace Leewillis77\CachedEmbed;

use Embed\Embed;
use Illuminate\Support\Facades\Cache;

class CachedEmbed
{
    public static function create($url, $args = [], $expiry = null)
    {
        $store = config('cachedembed.store', '');
        $expiry = $expiry ?? config('cachedembed.expiry', 43200);
        if (!empty($store)) {
            return Cache::store($store)->remember($url, $expiry, function () use ($url, $args) {
                // Grab the embed data.
                $data = Embed::create($url, $args);
                // Pre-load image attribute in the object to save work later.
                // Otherwise we have to redo the image extraction every time, rather than just once before caching.
                $data->image;
                return $data;
            });
        } else {
            return Cache::remember($url, $expiry, function () use ($url, $args) {
                // Grab the embed data.
                $data = Embed::create($url, $args);
                // Pre-load image attribute in the object to save work later.
                // Otherwise we have to redo the image extraction every time, rather than just once before caching.
                $data->image;
                return $data;
            });
        }
    }
}
