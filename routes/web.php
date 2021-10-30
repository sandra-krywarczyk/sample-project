<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return '
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

    <h1 style="text-align:center; margin-top:200px; font-family:sans-serif;"  class="animate__animated animate__jackInTheBox">Sandra Krywarczyk to <em>najlepsza</em> programistka</h1>';
});
