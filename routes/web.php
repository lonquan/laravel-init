<?php

use App\Http\Controllers\Index\IndexController;

Route::get('/{query?}', IndexController::class);
