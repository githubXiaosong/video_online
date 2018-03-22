<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Qcloud\Cos\Client;

class ServiceController extends Controller
{
    /**
     * 上传课程接口
     */
    public function uploadCourse(Request $request)
    {

        $validator = Validator::make(
            rq(),
            [
                'name' => 'required|max:20',
                'cover' => 'required|image|dimensions:min_width=800,min_height=500,max_width=800,max_height=500',
                'course' => 'required|mimetypes:video/avi,video/mp4',
            ],
            [
                'name.required' => '请输入文件名',
                'name.max' => '文件名最大不能超过20个字符',
                'cover.required' => '请选择图片',
                'cover.image' => '封面文件类型必须是500 X 800的图片',
                'cover.dimensions' => '封面文件类型必须是500 X 800的图片',
                'course.required' => '请选择课程',
                'course.mimetypes' => '课程类型必须是AVI或MP4',
            ]
        );
        if ($validator->fails())
            return back()->with(['err_msg' => $validator->messages()]);

//        rq('cover') == null
//        dd($request->course);

        $user = Auth::user();
        $video_path = $request->course->store('videos', 'public');
        $cover_path = $request->cover->store('images', 'public');

        $course = new Course();
        $course->name = rq('name');
        $course->uri = $video_path;
        $course->cover_uri = $cover_path;
        $course->user_id = $user->id;

        $course->save();

        return back()->with('suc_msg', 'upload success');

    }

    /**
     * 删除课程接口
     */
    public function deleteCourse()
    {

        $validator = Validator::make(
            rq(),
            [
                'course_id' => 'required|exists:courses,id',

            ],
            [
                'course_id.required' => 'course_id 不存在',
                'course_id.exists' => 'course_id 不属于数据库',
            ]
        );
        if ($validator->fails())
            return back()->with(['err_msg' => $validator->messages()]);

        Course::find(rq('course_id'))->delete();

        return back()->with('suc_msg', 'delete success');

    }

}
