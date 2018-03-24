<?php

namespace App\Http\Controllers\Admin;

use App\Course;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Qcloud\Cos\Client;

class PageController extends Controller
{

    /**
     * index 页面
     */
    public function index(){
        return view('admin.index');
    }

    /**
     * 登录页面
     */
    public function login(){
        return view('admin.login');
    }

    /**
     * 课程页面
     */
    public function course(){
        return view('admin.course');
    }

    /**
     * 老师页面
     */
    public function teacher(){
        return view('admin.teacher');
    }

    /**
     * 学生页面
     */
    public function student(){
        return view('admin.student');
    }

}
