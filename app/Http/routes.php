<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
/*
 * "Route :: ' -обращение к фасаду Route - предоставляет
 * упрощенный доступ к другому классу
 * (фасад спец класс предоставляющий доступ к
 * определенному элементу фрм Laravel)
 * Параметры маршрута всегда заключаются в фигурные скобки. Параметры будут переданы в замыкание вашего маршрута при выполнении маршрута
 * get - метод
 */
//rout page 
Route::get('/page', function () {
    echo '<pre>';
    //print_r($_ENV);
    //echo config('app.locale');
    //echo config::set('app.locale','ru');
    //echo config::get('app.locale');
    //echo env('APP_ENV');


    echo '</pre>';


    //return view('page');//'1 параметр  -/page' -шабдлн
    //2 параметр = arrai or function
    //3 controller andd his method
});

Route::post('' , Function(){

});


