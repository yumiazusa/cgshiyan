<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <link rel="stylesheet" href="/layui/css/layui.css">
        <link rel="stylesheet" type="text/css" href="css/stylestrategy.css" />
        <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="js/drag.js"></script>
        <script type="text/javascript" src="js/jquery.flip.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui.min.js"></script>

        <title>战略规划沙盘</title>

        <!-- Styles -->
    </head>
    <body>
    @php
        $user = \Auth::guard('member')->user();
    @endphp
<div class='box box-4'>
  <button type="button" class="layui-btn layui-btn-danger layui-btn-sm" id="bu1" url="{{url('savestrategy')}}"><i class="layui-icon">保存&nbsp;&#xe621;</i></button>
<button type="button" class="layui-btn layui-btn-sm  layui-btn-normal" id="bu5" title="重置" url="{{url('restrategy')}}"><i class="layui-icon">&#xe669;</i></button>
<button type="button" class="layui-btn layui-btn-sm  layui-btn-normal" id="bu6" title="返回首页"><i class="layui-icon">&#xe68e;</i></button>
  <table class="layui-table table" >
  <tbody>
     <tr>
      <td id="tdms">
        <table class="layui-table table1">
          <tbody>
          <tr>
            <td id="tdms1">FSSC名称</td>
             <td>
      <input type="text" id="title" name="title" placeholder="输入共享服务中心名称" autocomplete="off" class="layui-input" value="{{$content['name']}}">
             </td>
              <td rowspan="3">服务中心<br>建设模式</td>
          </tr>
           <tr>
            <td id="tdms2">服务对象</td>
             <td>共享服务中心服务对象</td>
          </tr>
          <tr>
            <td id="tdms3">服务内容</td>
             <td>共享服务中心服务内容</td>
          </tr>
        </tbody>
        </table>
      </td>
      <td id="tdgs" rowspan="2">
        <div class="m_map">
        </div>
        <div id="reason"><textarea name="reason" maxlength="60" placeholder="选址依据(60字以内)" class="layui-textarea">{{$content['reason']}}</textarea></div>
      </td>
     </tr>
     <tr >
      <td id="tdlw">
        <div id='location'>战略定位</div>
        <table class="layui-table table4">
          <tbody>
          <tr>
            <td>降低财务成本</td>
            <td>加强集团管控</td>
          </tr>
           <tr>
            <td>促进财务转型</td>
            <td>支持企业发展</td>
          </tr>
        </tbody>
        </table>
      </td>
     </tr>
  </tbody>
</table>
 @foreach($data as $k=>$v)
 <dl class="dl {{$data[$k]['kind']}}" id="dll" leftno="{{$data[$k]['left']}}" topno="{{$data[$k]['top']}}" cid="{{$data[$k]['cid']}}" kind="{{$data[$k]['kind']}}" name="{{$data[$k]['name']}}">
  <div class="card1">
  </div>
  <p>{{$data[$k]['name']}}</p>
</dl>
@endforeach

    </div>
<script>

         $(function(){
            $('.box-4 dl').each(function(){
                var left = $(this).attr('leftno');
                var top = $(this).attr('topno');
                $(this).dragging({
                    move : 'both',
                    randomPosition :false,
                    left : left,
                    top: top
                });
            });
        });

        //离开保存
        $('#bu1').click(function(){
          var left =new Array;
          var top =new Array;
          var cid =new Array;
          var kind =new Array;
          var name =new Array;
          var title = $('#title').val();
          var reason = $('#reason').children('textarea').val();
          var saveurl = $(this).attr('url');
          var i = 0;
            $('.box-4 dl').each(function(){
            var offset = $(this).offset();
            left[i] = offset.left;
            top[i] = offset.top;
            cid[i] = $(this).attr('cid');
            kind[i] = $(this).attr('kind');
            name[i] = $(this).attr('name');
            i++;
        });
            $.ajax({
            type : "POST",
            dataType:"json",
            url : saveurl,
            data: {'cid':cid,'kind':kind,'name':name,'top':top,'left':left,'title':title,'reason':reason},
            beforeSend: function(){
                  layer.load();
                },
            //请求成功
            success : function(result) {
                layer.close();
                layer.msg(result.msg, {icon: result.code}, function () {
                        if (result.reload) {
                            location.reload();
                        }
                    });
            },
            //请求失败，包含具体的错误信息
            error : function(e){
                layer.msg(e.msg, {icon: e.code}, function () {
                        if (e.reload) {
                            location.reload();
                        }
                    });
            }
        });
        });
        //重置
        $('#bu5').click(function(){
            var reurl = $(this).attr('url');
            $.ajax({
            type : "POST",
            dataType:"json",
            url : reurl,
            data: "username=chen&nickname=alien",
            beforeSend: function(){
                  layer.load();
                },
            //请求成功
            success : function(result) {
                layer.close();
                layer.msg(result.msg, {icon: result.code}, function () {
                        if (result.reload) {
                            location.reload();
                        }
                    });
            },
            //请求失败，包含具体的错误信息
            error : function(e){
                layer.msg(e.msg, {icon: e.code}, function () {
                        if (e.reload) {
                            location.reload();
                        }
                    });
            }
        });
        });

        //返回首页
          $('#bu6').click(function(){
            window.location.replace('{{url('/')}}');
        });

    </script>
    <script src="/layui/layui.all.js"></script>
    </body>
</html>
