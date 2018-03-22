@extends('layouts.app')

@section('script_top')

@endsection

@section('content')
    <div class="container">

        @if (session('err_msg'))
            <div class="alert alert-danger">
                {{ session('err_msg') }}
            </div>
        @endif

        @if (session('suc_msg'))
            <div class="alert alert-success">
                {{ session('suc_msg') }}
            </div>
        @endif

        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <div class="panel-heading">我的课程</div>

                    <div class="panel-body">

                        <div class="row">
                            @foreach($courses as $course)

                                <div class="col-sm-6 col-md-4">
                                    <div class="thumbnail">
                                        <a href="{{ url('/course/'. $course->id) }}">
                                            <img src="{{ url('storage').'/'.$course->cover_uri }}"
                                                 alt="...">
                                        </a>
                                        <div class="caption">
                                            <p style=" font-size:20px ;float: left">{{ $course->name }}</p>
                                            <a   onclick="submit_as_form('{{url('api/deleteCourse')}}','course_id',{{ $course->id }})"><p  style=" cursor: pointer;  color: red;font-size:10px;float: right;">删除</p></a>
                                            <div style="clear: both"></div>
                                        </div>

                                    </div>
                                </div>

                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">上传课程</div>

                    <div class="panel-body">

                        <div class="row">
                            <form class="form-horizontal" action="{{ url('api/uploadCourse') }}" method="post"
                                  enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">课程名</label>
                                    <div class="col-sm-6">
                                        <input name="name" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">封面图片</label>
                                    <div class="col-sm-6">
                                        <input name="cover" type="file" class="form-control"
                                               placeholder="请上传？？X ？？大小的图片">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">视频</label>
                                    <div class="col-sm-6">
                                        <input name="course" type="file" class="form-control" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-default">确定上传</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script_bottom')

@endsection