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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tags', '\\' . \App\Http\Controllers\Articles\ListTagAction::class)->name('tags.list');
Route::get('/tags/create', '\\' . \App\Http\Controllers\Articles\CreateTagAction::class)->name('tags.create');
Route::post('/tags', '\\' . \App\Http\Controllers\Articles\StoreTagAction::class)->name('tags.store');
Route::get('/tags/{tag}', '\\' . \App\Http\Controllers\Articles\ShowTagAction::class)->name('tags.show');
Route::get('/tags/{tag}/edit', '\\' . \App\Http\Controllers\Articles\EditTagAction::class)->name('tags.edit');
Route::put('/tags/{tag}', '\\' . \App\Http\Controllers\Articles\UpdateTagAction::class)->name('tags.update');
Route::patch('/tags/{tag}', '\\' . \App\Http\Controllers\Articles\UpdateTagAction::class)->name('tags.update');
Route::delete('/tags/{tag}', '\\' . \App\Http\Controllers\Articles\DestroyTagAction::class)->name('tags.destroy');



