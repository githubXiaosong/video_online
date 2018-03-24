<?php

namespace App\Http\Controllers\Admin;

use App\Course;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Qcloud\Cos\Client;

class ServiceController extends Controller
{


    /**
     * 管理员登录
     */
    public function login(){
        return redirect('admin/index');
    }

}
