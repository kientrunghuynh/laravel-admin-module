<?php

use App\Task;
use Illuminate\Http\Request;

Route::group(['middleware'=> 'auth', 'module'=>'Admin','namespace' => 'App\Modules\Admin\Controllers'], function() {
    Route::get('admin/dashboard',function(){
        return view("Admin::layouts.index");
    });
});