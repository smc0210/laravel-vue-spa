<?php

Route::get('stats', function () {
    return [
        'series'  => 200,
        'lessons' => 1300,
    ];
});

Route::get('achievements', function () {
    return request()->user()->achievements();
})->middleware('auth:api');
