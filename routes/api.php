<?php

Route::get('stats', function () {
    return [
        'series'  => 200,
        'lessons' => 1300,
    ];
});
