<?php

namespace App\Providers;

use Exception;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider;

class ResponseServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Response::macro('success', function ($data = [], $status = 200) {
            return Response::json(array_merge([
                'success' => true,
                'data'    => null,
                'message' => null,
            ], $data), $status, [], JSON_UNESCAPED_UNICODE);
        });

        Response::macro('error', function ($message = null, $errorCode = null, $errors = [], $status = 200) {
            if ($message instanceof Exception) {
                $response = [
                    'success'    => false,
                    'message'    => $message->getMessage(),
                    'error_code' => $message->getCode(),
                ];
            } else {
                $response = [
                    'success'    => false,
                    'message'    => $message,
                    'error_code' => $errorCode,
                ];
            }

            if ($errors) {
                $response['errors'] = $errors;
            }

            return Response::json($response, $status, [], JSON_UNESCAPED_UNICODE);
        });
    }
}
