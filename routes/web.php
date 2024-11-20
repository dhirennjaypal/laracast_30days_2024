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
    $jobs = Job::with("employer")->latest()->paginate(20);
    return view('jobs.index', [
        "jobs" => $jobs
    ]);
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::get('/jobs/{id}', function ($id) {
    return view('jobs.show', [
        "job" => Job::find($id)
    ]);
});


Route::post('/jobs', function () {
    request()->validate([
        "title"     =>	[ "required", "min:3" ],
        "salary"    =>	[ "required" ],
    ]);

    Job::create([
        "title"			=>	request("title"),
        "salary"		=>	request("salary"),
        "employer_id"	=>	1,
	]);

    return redirect("/jobs");
});
