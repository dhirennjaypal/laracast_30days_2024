<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    $jobs = Job::with("employer")->paginate(3);
    return view('jobs', [
        "jobs" => $jobs
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    return view('job', [
        "job" => Job::find($id)
    ]);
});
