<?php

Route::get("/", function() {
    return response()->json(["message" => "Hello world"], 200);
});

Route::get("/users", "UserController@index");

Route::post("/users/create", "UserController@store");

Route::get("/users/{id}", "UserController@show");

Route::post("/users/{id}/update", "UserController@update");

Route::get("/users/{id}/delete", "UserController@destroy");