<?php

namespace App\Providers;

use Laravel\Passport\Passport;

class PassportServiceProvider extends \Laravel\Passport\PassportServiceProvider
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
        parent::boot();
        Passport::tokensExpireIn(now()->addDays(15));

        Passport::refreshTokensExpireIn(now()->addDays(30));
    }

    /*
    protected function makePasswordGrant()
    {
        $grant = new PasswordGrant(
            $this->app->make(PassportRepository::class),
            $this->app->make(RefreshTokenRepository::class)
        );
        $grant->setRefreshTokenTTL(Passport::refreshTokensExpireIn());

        return $grant;
    }
    */
}
