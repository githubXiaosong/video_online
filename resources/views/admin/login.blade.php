@extends('admin.master')
@section('content')
    <link href="static/h-ui.admin/css/H-ui.login.css" rel="stylesheet" type="text/css"/>
    <input type="hidden" id="TenantId" name="TenantId" value=""/>
    <div>
        <div id="loginform" class="loginBox">
            <form class="form form-horizontal" action="{{ url('admin/api/login') }}" method="post">

                {{ csrf_field() }}
                <div class="row cl">
                    <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60d;</i></label>
                    <div class="formControls col-xs-8">
                        <input id="" name="" type="text" placeholder="账户" class="input-text size-L">
                    </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60e;</i></label>
                    <div class="formControls col-xs-8">
                        <input id="" name="" type="password" placeholder="密码" class="input-text size-L">
                    </div>
                </div>

                <div class="row cl">
                    <div class="formControls col-xs-8 col-xs-offset-3">
                        <label for="online">
                            <input type="checkbox" name="online" id="online" value="">
                            使我保持登录状态</label>
                    </div>
                </div>
                <div class="row cl">
                    <div class="formControls col-xs-8 col-xs-offset-3">
                        <input name="" type="submit" class="btn btn-success radius size-L"
                               value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;">
                        <input name="" type="reset" class="btn btn-default radius size-L"
                               value="&nbsp;取&nbsp;&nbsp;&nbsp;&nbsp;消&nbsp;">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="footer">Copyright 你的公司名称 by H-ui.admin v3.1</div>
    <script type="text/javascript" src="lib/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="static/h-ui/js/H-ui.min.js"></script>

@endsection