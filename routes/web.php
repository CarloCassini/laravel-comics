<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $links = config('db_links.links');
    $sites = config('db_sites.sites');
    $dcs = config('db_DCS.dcs');
    $shops = config('db_shops.shops');

    $comics = config('db_comics');



    return view('jumbo', compact('links', 'sites', 'dcs', 'shops', 'comics'));
})->name('jumbo');