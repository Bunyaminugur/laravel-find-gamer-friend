<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// All listings
Route::get('/', [ListingController::class, 'index']);

// Show Create form
Route::get('/listings/create', [ListingController::class, 'create']);

// Store listing data
Route::post('/listings' , [ListingController::class, 'store']);

// Single listing
Route::get('/listings/{listing}' , [ListingController::class, 'show']);

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing