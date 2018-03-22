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

                        <div class="row">
                            <a>
                                <div class="col-sm-6 col-md-4">
                                    <div class="thumbnail">
                                        <img src="http://test-1252595848.cosbj.myqcloud.com/test1.jpg?sign=oljl0ZtMh0dY4N7XiiEMwaiSKwNhPTEyNTI1OTU4NDgmaz1BS0lETzk1cnUzcUc3eGNSRUNUcVpQTE5Wc1Ezc3N5NmhuSHMmZT0xNTI0MjEzODc4JnQ9MTUyMTYyMTg3OCZyPTM0MDg4MTYyNiZmPS90ZXN0MS5qcGcmYj10ZXN0"
                                             alt="...">
                                        <div class="caption">
                                            <h3>Thumbnail label</h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

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
            video: 'http://test-1252595848.cosbj.myqcloud.com/video.mp4?sign=ytKjI+QKgIDnBBqPo/0N4PtFdOFhPTEyNTI1OTU4NDgmaz1BS0lETzk1cnUzcUc3eGNSRUNUcVpQTE5Wc1Ezc3N5NmhuSHMmZT0xNTI0MjEzMzUwJnQ9MTUyMTYyMTM1MCZyPTUwMTc3NzU2MSZmPS92aWRlby5tcDQmYj10ZXN0'//视频地址
        };

        var player = new ckplayer(videoObject);
    </script>
@endsection