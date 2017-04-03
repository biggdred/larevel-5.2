<?php

namespace App\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     * Это пространство имен применяется к вашим маршрутам контроллера.
     * In addition, it is set as the URL generator's root namespace.
     * Кроме того, он задается как корневое пространство имен генератора URL-адресов
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     * Определите привязки модели маршрута, фильтры шаблонов и т. Д.
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function boot(Router $router)
    {
        //

        parent::boot($router);
    }

    /**
     * Define the routes for the application.
     * Определить маршруты для приложения
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function map(Router $router)
    {
        $this->mapWebRoutes($router);

        //
    }

    /**
     * Define the "web" routes for the application.
     * Определите «web» маршруты для приложения.
     * These routes all receive session state, CSRF protection, etc.
     * Эти маршруты получают состояние сеанса, защиту CSRF и т. Д.
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    protected function mapWebRoutes(Router $router)
    {
        $router->group([
            'namespace' => $this->namespace, 'middleware' => 'web',
        ], function ($router) {
            require app_path('Http/routes.php');//загрущить маршруты
        });
    }
}
