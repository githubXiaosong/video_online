@extends('layouts.app')

@section('script_top')
    <script src="/js/ckplayer.js"/>
@endsection

@section('content')
    <div class="container">


        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <div id="video" style="width:100%;height: 500px"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script_bottom')
    <script>
        var videoObject = {
            container: '#video',//“#”代表容器的ID，“.”或“”代表容器的class
            variable: 'player',//该属性必需设置，值等于下面的new chplayer()的对象
            video: "{{ url('storage') .'/'. $course->uri }}"//视频地址
        };
        var player = new ckplayer(videoObject);
    </script>
@endsection