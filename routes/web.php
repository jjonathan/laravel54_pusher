<?php

use App\Events\HelloPusherEvent;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pusher', function() {
    event(new HelloPusherEvent('Hi there Pusher!'));
    return "Event has been sent!";
});