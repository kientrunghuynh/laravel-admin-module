<?php

namespace App\Modules\Admin\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller {

    /**
     * Display admin dashboard
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request)
    {
        return view("Admin::layouts.index");
    }

}