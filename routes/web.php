<?php
use App\Http\Controllers\Index\Index;

Route::get('/{query?}', Index::class);
