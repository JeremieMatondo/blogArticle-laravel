<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/pays', function () {
    $pays = [
        ["nom" => "RDC", "capitale" => "kinshasa"],
        ["nom" => "FRANCE", "capitale" => "paris"],
        ["nom" => "BELGIQUE", "capitale" => "bruxelles"],
        ["nom" => "ANGOLA", "capitale" => "luanda"]
    ];
    return $pays;
});