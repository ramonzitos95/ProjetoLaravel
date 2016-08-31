<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::group(['middleware' => ['web']], function (){
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('foo/bar', function (){
        Return view("foo.bar", ['foo' => 'asdf', 'bar' => 'edfg']);
    });

    Route::get('foo/baz', function(){
        Return view("foo.baz");
    });

//    Route::match(['post','get'], 'foo', function(){
//        Return "Olá";
//    });
//
//
//    Route::any('Qualquer', function(){
//        Return "Este método é quanlquer requisição";
//    });
//
//    Route::group(['prefix' => 'user'], function (){
//
//        Route::get('/', function(){
//            return 'Lista de usuários';
//        });
//
//        Route::get('{id}/edit', function($id){
//            return 'este é o usuario'.$id;
//        });
//
//        Route::get('add', function(){
//            return 'Add usuários';
//        });
//    });


});
