<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application for file storage.
    |
    */

    'default' => env('FILESYSTEM_DISK', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Below you may configure as many filesystem disks as necessary, and you
    | may even configure multiple disks for the same driver. Examples for
    | most supported storage drivers are configured here for reference.
    |
    | Supported drivers: "local", "ftp", "sftp", "s3"
    |
    */

    'disks' => [

        'r2' => [
            'driver' => 's3',
            'key' => env('R2_ACCESS_KEY'),
            'secret' => env('R2_SECRET_KEY'),
            'endpoint' => env('R2_ENDPOINT'),
            'region' => env('R2_REGION'),
            'bucket' => env('R2_BUCKET'),
            'url' => env('R2_URL'),
            'visibility' => 'public',
        ],

        // 'drivenow' => [

        // 'driver' => 's3',
        // 'key' => env('LARAVEL_CLOUD_ACCESS_KEY'),
        // 'secret' => env('LARAVEL_CLOUD_SECRET'),
        // 'region' => env('LARAVEL_CLOUD_REGION'),
        // 'bucket' => env('LARAVEL_CLOUD_BUCKET'),
        // 'url' => env('LARAVEL_CLOUD_URL'),
        // 'endpoint' => env('LARAVEL_CLOUD_ENDPOINT'),
        // 'visibility' => 'public',

        // ],


        'local' => [
            'driver' => 'local',
            'root' => storage_path('app/private'),
            'serve' => true,
            'throw' => false,
            'report' => false,
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL') . '/storage',
            'visibility' => 'public',
            'throw' => false,
            'report' => false,
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
            'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
            'throw' => false,
            'report' => false,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Symbolic Links
    |--------------------------------------------------------------------------
    |
    | Here you may configure the symbolic links that will be created when the
    | `storage:link` Artisan command is executed. The array keys should be
    | the locations of the links and the values should be their targets.
    |
    */

    'links' => [
        public_path('storage') => storage_path('app/public'),
    ],

];
