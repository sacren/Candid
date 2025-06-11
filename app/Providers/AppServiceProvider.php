<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use App\Fields\Checkbox;
use App\Fields\Field;
use App\Fields\Radio;
use App\Fields\Text;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Route::bind('field', function (string $value): Field {
            return match ($value) {
                'text' => new Text('text'),
                'checkbox' => new Checkbox('checkbox'),
                'radio' => new Radio('radio'),
                default => abort(404),
            };
        });
    }
}
