<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::view('/laravel', "welcome");
Route::view('/', "home");
// Route::resource("jobs", JobController::class);

// Route::resource("jobs", JobController::class, [
// 	"only"	=>	["index"],
// ]);
// Route::get('/laravel', function () {
//     return view('welcome');
// });
// Route::controller(JobController::class)->group(function(){
// 	Route::get('/jobs', "index");
// 	Route::get('/jobs/create', "create");
// 	Route::get('/jobs/{job}', "show");
// 	Route::post('/jobs', "store");
// 	Route::get('/jobs/{job}/edit', "edit");
// 	Route::patch('/jobs/{job}', "update");
// 	Route::delete('/jobs/{job}', "destroy");
// });
// Route::get('/jobs/{job}', [JobController::class, "show"]);
// Route::get('/jobs/{job}', function (Job $job) {
//     return view('jobs.show', [
//         "job" => $job
//     ]);
// });
// Route::get('/jobs/{id}', function ($id) {
//     return view('jobs.show', [
//         "job" => Job::find($id)
//     ]);
// });
