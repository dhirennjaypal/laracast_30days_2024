<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});

// Index
Route::get('/jobs', function () {
    $jobs = Job::with("employer")->latest()->paginate(20);
    return view('jobs.index', [
        "jobs" => $jobs
    ]);
});

// Create
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

// Show
Route::get('/jobs/{id}', function ($id) {
    return view('jobs.show', [
        "job" => Job::find($id)
    ]);
});

// Store
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

// Edit
Route::get('/jobs/{id}/edit', function ($id) {
    return view('jobs.edit', [
        "job" => Job::find($id)
    ]);
});

// Update
Route::patch('/jobs/{id}', function ($id) {
    request()->validate([
        "title"     =>	[ "required", "min:3" ],
        "salary"    =>	[ "required" ],
    ]);

	$job			=	Job::findOrFail($id);
	$job->update([
		"title"		=>	request("title"),
		"salary"	=>	request("salary"),
	]);

	return redirect("/jobs/{$job->id}");
});

// Delete
Route::delete('/jobs/{id}', function ($id) {
	Job::findOrFail($id)->delete();
	return redirect("/jobs");
});
