@extends('layouts.app')

@section('script_top')

@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <div class="panel-heading">课程列表</div>

                    <div class="panel-body">

                        <div class="row">
                                @foreach($courses as $course)
                                    <a href="{{ url('/course/'. $course->id) }}">
                                        <div class="col-sm-6 col-md-4">
                                            <div class="thumbnail">
                                                <img src="{{ url('storage').'/'.$course->cover_uri }}"
                                                     alt="...">
                                                <div class="caption">
                                                    <p style=" font-size:30px ;float: left">{{ $course->name }}</p>
                                                    <p style=" color: gray; font-size:10px ;float: right">{{ $course->user->name  }}</p>

                                                    <div style="clear: both"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script_bottom')

@endsection