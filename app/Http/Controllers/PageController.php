<?php

namespace App\Http\Controllers;

use App\Course;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Qcloud\Cos\Client;

class PageController extends Controller
{

    /**
     * 测试页面
     */
    public function test()
    {

        $user = new User();

        $user->name = 'xiaosong';
        $user->email = '1054841161@qq.com';
        $user->password = '21321321312';
        $user->identity = 0;

        $user->save();

    }

    /**
     * 课程列表页面
     */
    public function courseList()
    {
        $courses = Course::with('user')->get();
        return view('course.courselist')->with(["courses" => $courses]);
    }


    /**
     * 播放课程页面
     */
    public function course($id)
    {

        $course = Course::find($id);

        return view('course.course')->with(["course" => $course]);
    }


    /**
     * 老师"我的课程"页面
     */
    public function myCourse($user_id)
    {
        $user = User::find($user_id);
        if ($user->identity != USER_IDENTITY_COMMON_TEACHER)
            return redirect('/home');

        $courses = Course::where('user_id', $user_id)->get();
        return view('course.myCourse')->with(["courses" => $courses]);
    }
}
