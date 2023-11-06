<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/public/css/layui.css">
        <title>财务管理综合实验</title>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #636b6f;
                background:url(../images/111.gif);background-size:cover;
                background-position:center center;
                color: #000;
                font-family: 'Raleway', sans-serif;
                font-weight: 300;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 64px;
                text-shadow: 2px 2px white;
                font-weight: 400;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            th{
                text-align: center;
            }
            .my-skin .layui-layer-btn a {
            background-color: #ff5722;
            border: 1px solid #ff5722;
            color: #FFF;
            }
            .my-skin .layui-layer-title{
            background-color: #ff5722;
            border: 1px solid #ff5722;
            color: #FFF;
            }
        </style>
    </head>
    <body>
    @php
        $user = \Auth::guard('member')->user();
    @endphp
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                   财务管理综合实验
                   @if($user)
                   @else
                   <br>在线实验平台
                   @endif
                </div>
                <!-- <div class="m-b-md">
                    @foreach($entities as $entity)
                        <a target="_blank" href="{{ route('web::entity.content.list', ['entityId' => $entity->id]) }}">{{ $entity->name }}</a><hr>
                    @endforeach
                </div> -->
                <div class="m-b-md">
                    @if($user)
                    <table class="layui-table">
                <thead>
                <tr>
                <th rowspan="2" style="text-align: center;">学号:{{ $user->studentid }}</th>



                @foreach($res as $k=>$v)
                <th style="text-align: center;"><a class="layui-btn layui-btn-warm layui-btn-sm" style="text-decoration:none;" 
                    @if ($res[$k]->status === 1)
                    href='<?php echo $res[$k]->url; ?>'
                    @elseif ($res[$k]->status === 0)
                    href="javascript:void(0)" onclick="noright()"
                    name="noright"
                    @endif
                    >{{$res[$k]->title}}</a></th>
                    @endforeach
           <!--      <th style="text-align: center;"><a class="layui-btn layui-btn-fluid layui-btn-normal" style="text-decoration:none;" href='{{ url('strategy',) }}'>共享战略规划</a></th>
                <th style="text-align: center;"><a class="layui-btn layui-btn-fluid layui-btn-normal" style="text-decoration:none;" href='{{ url('plan',) }}'>共享组织规划</a></th>
                 <th style="text-align: center;"><a class="layui-btn layui-btn-fluid layui-btn-normal" style="text-decoration:none;" href='{{ url('feenav',) }}'>费用共享</a></th>
                <th style="text-align: center;"><a class="layui-btn layui-btn-fluid layui-btn-normal" style="text-decoration:none;" href='{{ url('salenav',) }}'>销售共享</a></th>
                <th style="text-align: center;"><a class="layui-btn layui-btn-fluid layui-btn-normal" style="text-decoration:none;" href='{{ url('purchasenav',) }}'>采购共享</a></th>
                <th style="text-align: center;"><a class="layui-btn layui-btn-fluid layui-btn-normal" style="text-decoration:none;" href='javascript:void(0);'>费用共享</a></th>
                <th style="text-align: center;"><a class="layui-btn layui-btn-fluid layui-btn-normal" style="text-decoration:none;" href='javascript:void(0);'>销售共享</a></th>
                <th style="text-align: center;"><a class="layui-btn layui-btn-fluid layui-btn-normal" style="text-decoration:none;" href='javascript:void(0);'>采购共享</a></th> -->
                 </tr>
                </thead>
                <tr><td  colspan="6"><a href="{{ route('member::logout') }}">退出登录</a></td></tr>
                </table>
                    @else
                        <a class="layui-btn layui-btn-fluid layui-btn-warm" style="text-decoration:none; width:50%;" href="{{ route('member::login.show') }}">登录</a>
                        <!-- <a href="{{ route('admin::login.show') }}">后台登录</a> -->
                    @endif
                </div>
                <div class="m-b-md" style="position:fixed; bottom:5px;right:0;left:0;margin:0 auto;">
                   <p>本在线实验系统仅供经管院财务管理综合实验教学使用，咨询Email：yumiazusa@hotmail.com</p>
                   <p>版权所有：yumiazusa；&nbsp;备案号：<a style="color:#666" target="_blank" rel="noopener" href="http://beian.miit.gov.cn/">滇ICP备2021003909号-1；</a>
		 		<a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=53011402000635" ><img src="/images/beian.png">&nbsp;滇公网安备：53011402000635号；</a>
		 	建议您使用谷歌Chrome、Firefox浏览器浏览本网站
                </p>
                </div>
            </div>
        </div>
    <script>
       function noright(){
	    layer.alert('暂未获取本实验权限', {
        title: '检查权限',
        icon: 4,
        skin: 'my-skin'
        })
    }

    </script>
     <script src="/layui/layui.all.js"></script>
    </body>
</html>
