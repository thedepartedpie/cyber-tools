<?php

use App\Http\Controllers\InstallerController;
use App\Http\Controllers\MainController;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
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

if( File::exists( storage_path('bitflan/installed.stp') ) ) {
    
    if( File::exists( storage_path( 'bitflan/lock.stp' ) ) ) {

        Route::any('/',      [ InstallerController::class, 'lock' ])->name('lock');
        Route::any('/{any}', [ InstallerController::class, 'lock' ])->name('lock-any');

    } else {

        Route::get('/',                 [ MainController::class, 'index'    ] )->name('homepage');

        Route::get('/blog',             [ MainController::class, 'blog'     ] )->name('blog');
        Route::get('/blog/{post}',      [ MainController::class, 'blogPost' ] )->name('blog-post');

        Route::get('/page/{page}',      [ MainController::class, 'page'     ] )->name('page');
        Route::get('/contact',          [ MainController::class, 'contact'  ] )->name('contact');
        Route::any('/tool/{slug}',      [ MainController::class, 'tool'     ] )->name('tool');
        Route::get('/language/{code}',  [ MainController::class, 'language' ] )->name('set-language');
        Route::get('/theme/{theme}',    [ MainController::class, 'theme'    ] )->name('set-theme');
        
        if(!function_exists('symlink')) {
            Route::get('/storage/{file}', function(Response $response, $file) {
                return $response->file(storage_path('app/public/' . $file));
            });
        }
    }

} else {
    Route::get('/', function() {
        return redirect(route('installer'));
    });

    Route::get('/install', [ InstallerController::class, 'index' ])->name('installer');
}