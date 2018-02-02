<?php

return [

    /**
     * The default time to store a cached embed for (in minutes).
     *
     * 43200 = 30 days.
     */
    'default_expiry' => 43200,

    /**
     * The cache store to use when storing embed data.
     */
    'cache_store' => 'oembed',
];
