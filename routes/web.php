<?php
Route::get('/', function () { return view('base.landing'); });
Route::get('/rotate', function () { return view('studies.rotate'); });
