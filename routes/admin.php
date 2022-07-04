<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth')->prefix('admin')->group(function () {

        Route::get('/', function () {

//            $post = new \App\Models\Post();
//            $post->title = 'Ҳелло Wорлд';
//            $post->content = 'This is a test post';
//            $post->save();
//            dd($post->getAttributes());

            return view('admin::test');
//            return 'salom';
        });

});
