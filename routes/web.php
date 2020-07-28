<?php

use Illuminate\Support\Facades\Route;

Route::get('storage/{folder}/{filename}', function ($folder,$filename){
    $path = storage_path('app/public/' . $folder . '/' . $filename);
    if (!File::exists($path)) {
        abort(404);
    }
    $file = File::get($path);
    $type = File::mimeType($path);
    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);
    return $response;
});

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::group(['middleware' => 'auth'], function(){
    Route::livewire('/admin','admin.dashboard')->layout('layouts.admin')->name('admin');
    Route::livewire('/admin/list-club','admin.club-list-index')->layout('layouts.admin')->name('admin.list-club');
    Route::livewire('/admin/list-club-create','admin.club-list-create')->layout('layouts.admin')->name('admin.list-club-create');
    Route::livewire('/admin/list-club-edit/{id}','admin.club-list-update')->layout('layouts.admin')->name('admin.list-club-edit');

    Route::livewire('/admin/players','admin.players')->layout('layouts.admin')->name('admin.players');
    Route::livewire('/admin/player-create','admin.player-create')->layout('layouts.admin')->name('admin.player-create');
    Route::livewire('/admin/player-edit/{id}','admin.player-update')->layout('layouts.admin')->name('admin.player-edit');
    Route::livewire('/admin/player-detail/{id}','admin.player-detail')->layout('layouts.admin')->name('admin.player-detail');

    Route::livewire('/admin/page/{slug}','admin.page-index')->layout('layouts.admin')->name('admin.page-index');

    Route::livewire('/admin/article','admin.article')->layout('layouts.admin')->name('admin.article');
    Route::livewire('/admin/article-create','admin.article-create')->layout('layouts.admin')->name('admin.article-create');
    Route::livewire('/admin/article-edit/{id}','admin.article-edit')->layout('layouts.admin')->name('admin.article-edit');

    Route::livewire('/admin/category','admin.category')->layout('layouts.admin')->name('admin.category');
});

Route::livewire('/','frontend.index')->layout('layouts.main')->name('index');
Route::livewire('/tentang-kami','frontend.about')->layout('layouts.main')->name('about');
Route::livewire('/blog','frontend.blog')->layout('layouts.main')->name('blog');
Route::livewire('/video','frontend.video')->layout('layouts.main')->name('video');
Route::livewire('/galeri','frontend.galeri')->layout('layouts.main')->name('galeri');
Route::livewire('/club','frontend.club')->layout('layouts.main')->name('club');
Route::livewire('/cup','frontend.cup')->layout('layouts.main')->name('cup');
Route::livewire('/league','frontend.league')->layout('layouts.main')->name('league');
Route::livewire('/hubungi-kami','frontend.contact')->layout('layouts.main')->name('contact');
