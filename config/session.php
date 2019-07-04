<?php
return [
    'driver' => 'redis',

    'lifetime' => 120,

    'expire_on_close' => false,

    'encrypt' => false,

    'files' => storage_path('framework/sessions'),

    'connection' => 'session',

    'lottery' => [2, 100],

    'cookie' => 'h_c_s',

    'path' => '/',

    'domain' => env('SESSION_DOMAIN', null),

    'secure' => false,

    'http_only' => false,

    'same_site' => null,

];
