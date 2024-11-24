<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Jobs\TestLogJob;
use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::view('/laravel', "welcome");
Route::view('/', "home");

Route::get("/test", function(){
	TestLogJob::dispatch(Job::first());
	return "done";
});

Route::get("/jobs", [JobController::class, "index"]);
Route::get("/jobs/create", [JobController::class, "create"]);
Route::post("/jobs", [JobController::class, "store"])->middleware("auth");
Route::get("/jobs/{job}", [JobController::class, "show"]);
// Route::get("/jobs/{job}/edit", [JobController::class, "edit"])->middleware(["auth", "can:edit-job,job"]);
// Route::get("/jobs/{job}/edit", [JobController::class, "edit"])->middleware("auth")->can("edit-job", "job");
Route::get("/jobs/{job}/edit", [JobController::class, "edit"])->middleware("auth")->can("update", "job");
Route::patch("/jobs/{job}", [JobController::class, "update"])->middleware("auth")->can("update", "job");
Route::delete("/jobs/{job}", [JobController::class, "destroy"])->middleware("auth")->can("update", "job");


Route::get("/register", [RegisteredUserController::class, "create"]);
Route::post("/register", [RegisteredUserController::class, "store"]);

Route::get("/login", [SessionController::class, "create"])->name("login");
Route::post("/login", [SessionController::class, "store"]);
Route::post("/logout", [SessionController::class, "destroy"]);
