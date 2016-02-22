<?php

return [

    /*
    |--------------------------------------------------------------------------
    | File paths
    |--------------------------------------------------------------------------
    |
    | 'path' => ['/images/event/']
    |
    | Gets file from '/storage/image/event/' directory.
    |
    */

    'path' => ['/images/event/'],

    'default_thumbs' => ['S' => '96x96', 'M' => '256x256', 'L' => '480x480'],

    /*
    |--------------------------------------------------------------------------
    | Enable Api upload
    |--------------------------------------------------------------------------
    |
    | Set to true to upload files via this route :
    |
    | POST /upload/images/event/the-file-name
    |
    */

    'enable_api_upload' => false,

    'middlewares' => [], // middlewares that wrap the api upload route

];
