<?php

namespace App\Providers;

use App\Classes\CreditCardPayment;
use App\Classes\PaymentGateway;
use App\Interfaces\PaymentGatewayContract;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->singleton(PaymentGateway::class,function($app){
        //     return new PaymentGateway(500);
        // });


        $this->app->singleton(PaymentGatewayContract::class,function($app){
            if(request()->has(key: 'credit')){
                return new CreditCardPayment(500);
            }else{
                return new PaymentGateway(500);
            }
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
