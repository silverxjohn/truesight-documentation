<?php

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

Route::get('table-of-contents', 'Truesight\Documentation\Controllers\DocumentationController@tableOfContents');

Route::get('getting-started', 'Truesight\Documentation\Controllers\DocumentationController@gettingStarted');
