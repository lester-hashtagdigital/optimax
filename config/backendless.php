<?php

/*
 * This file is part of Laravel Backendless.
 *
 * (c) Naresh Mehta <naresh.mehta@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Backendless App Id
    |--------------------------------------------------------------------------
    |
    | Here you may specify your backendless app id.
    |
    */

    'application_id' => env('BACKENDLESS_APPLICATION_ID'),

    /*
    |--------------------------------------------------------------------------
    | Backendless Rest Key
    |--------------------------------------------------------------------------
    |
    | Here you may specify your backendless rest key.
    |
    */

    'secret_key' => env('BACKENDLESS_SECRET_KEY'),

    /*
    |--------------------------------------------------------------------------
    | Backendless Version Number
    |--------------------------------------------------------------------------
    |
    | Here you may specify your backendless version number.
    |
    */

    'version' =>  env('BACKENDLESS_VERSION'),

];