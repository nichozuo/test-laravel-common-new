<?php

use Illuminate\Support\Facades\Route;
use LaravelCommonNew\RouterTools\RouterToolsServices;

Route::name('api.')->group(function ($router) {
    RouterToolsServices::AutoGenRouters($router);
});
