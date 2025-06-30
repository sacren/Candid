<?php

namespace App\Providers;

use App\Billings\Customer;
use App\Billings\Invoice;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class BillingServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(Router $router): void
    {
        // Resolve NamedObject from route parameter
        $router->bind('billing', function ($value) {
            return match ($value) {
                'process' => new Invoice(),
                'customer' => new Customer(),
                default => abort(404),
            };
        });
    }
}
