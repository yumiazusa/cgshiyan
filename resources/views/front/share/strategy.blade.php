<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="src/s8CyrcleInfoBox.css" media="screen" charset="utf-8">
    <link rel="stylesheet" href="/layui/css/layui.css">
    <link rel="stylesheet" type="text/css" href="css/stylestrategy.css" />
    <link rel="stylesheet" href="css/stylecircle.css" media="screen" charset="utf-8">
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/drag1.js"></script>
    <script type="text/javascript" src="js/jquery.flip.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/stylemap.css">
    <link rel="stylesheet" type="text/css" href="https://www.jq22.com/jquery/font-awesome.4.6.0.css">
    <script type="text/javascript" src="js/dragsort.js"></script>
    <title>初创企业</title>
</head>

<body>
    @php
    $user = \Auth::guard('member')->user();
    @endphp

    <button type="button" class="layui-btn layui-btn-danger layui-btn-sm" id="bu1" url="{{url('savestrategy')}}"><i class="layui-icon">保存&nbsp;&#xe621;</i></button>
    <button type="button" class="layui-btn layui-btn-sm  layui-btn-normal" id="bu5" title="重置" url="{{url('restrategy')}}"><i class="layui-icon">&#xe669;</i></button>
    <button type="button" class="layui-btn layui-btn-sm  layui-btn-normal" id="bu6" title="返回首页"><i class="layui-icon">&#xe68e;</i></button>
    <!--  @if ($user->studentid === "20201013")
     <button type="button" class="layui-btn layui-btn-sm  layui-btn-normal" id="bu7" title="刷新卡片" url="{{url('refee')}}"><i class="layui-icon">&#xe68e;</i></button>
     @endif -->
    <table class="layui-table table">
        <tbody>
            <tr>
                <td id="tdms">
                    <table class="layui-table table1">
                        <tbody>
                            <tr>
                                <td id="tdms1">
                                    <!-- effect-7 html -->
                                    <div class="single-member effect-7">
                                        <div class="member-image">
                                            <img src="images/chuchuang.png" alt="Member">
                                        </div>
                                        <div class="more-info">
                                            <table class="infotable">
                                                <tr>
                                                    <td>企业组织形式选择</td>
                                                    <td rowspan="5">
                                                        <div class="layui-progress layui-progress-big" lay-showpercent="true">
                                                            <div class="layui-progress-bar layui-bg-red" lay-percent="100%"></div>
                                                        </div>

                                                        <br>

                                                        <div class="layui-progress layui-progress-big" lay-showpercent="true">
                                                            <div class="layui-progress-bar layui-bg-orange" lay-percent="80%"></div>
                                                        </div>

                                                        <br>

                                                        <div class="layui-progress layui-progress-big" lay-showpercent="true">
                                                            <div class="layui-progress-bar layui-bg-primary" lay-percent="60%"></div>
                                                        </div>

                                                        <br>

                                                        <div class="layui-progress layui-progress-big" lay-showpercent="true">
                                                            <div class="layui-progress-bar layui-bg-blue" lay-percent="20%"></div>
                                                        </div>

                                                        <br>

                                                        <div class="layui-progress layui-progress-big" lay-showpercent="true">
                                                            <div class="layui-progress-bar" lay-percent="5%"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>企业名称核准</td>
                                                </tr>
                                                <tr>
                                                    <td>企业章程制定</td>
                                                </tr>
                                                <tr>
                                                    <td>企业登记注册</td>
                                                </tr>
                                                <tr>
                                                    <td>企业战略规划</td>
                                                </tr>
                            </tr>
                    </table>
                    </div>
                    </div>
                    <!-- effect-7 html end -->
                    <div class="layui-form-item">
                        <select name="enterquiz" id="enterquiz">
                            <option value="">选择适合的企业初创组织形式</option>
                            <optgroup label="独资企业">
                                <option value="guoqi">国有独资企业</option>
                                <option value="geqi">个人独资企业</option>
                                <option value="geti">个体工商户</option>
                            </optgroup>
                            <optgroup label="合伙制企业">
                                <option value="普通">普通合伙制企业</option>
                                <option value="youxian">有限合伙制企业</option>
                            </optgroup>
                            <optgroup label="公司制企业">
                                <option value="ltd">有限责任公司</option>
                                <option value="股份">股份有限公司</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="layui-form-item">
                        <div class="layui-input-block" id="entername">
                            <input type="text" name="entertitle" lay-verify="title" autocomplete="off" placeholder="企业名称(地区+字号+行业+组织形式)" class="layui-input">
                        </div>
                    </div>
                    </div>
                </td>
                <td>
                    <div class="col-sm-4">
                        <div class="circle2">
                            <ul class="circleWrapper wStyle2">
                                <li>
                                    <div class="circleFeature fStyle2" data-cyrcleBox="cf1"><span class="layui-icon layui-icon-share"></span></div>
                                    <div class="circleBox innerStyle2" id="cf1" style="display: flex;">
                                        <div style="margin:auto;"><strong>登记注册流程</strong></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="circleFeature fStyle2" data-cyrcleBox="cf2"><span class="layui-icon layui-icon-table"></span></div>
                                    <div class="circleBox innerStyle2" id="cf2" style="display: flex;">
                                        <div style="margin:auto;"><strong>拟定章程协议</strong></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="circleFeature fStyle2" data-cyrcleBox="cf3"><span class="layui-icon layui-icon-upload-drag"></span></div>
                                    <div class="circleBox innerStyle2" id="cf3" style="display: flex;">
                                        <div style="margin:auto;"><strong>提交审核材料</strong></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="circleFeature fStyle2" data-cyrcleBox="cf4"><span class="layui-icon layui-icon-rmb"></span>
                                    </div>
                                    <div class="circleBox innerStyle2" id="cf4" style="display: flex;">
                                        <div style="margin:auto;"><strong>开办法人账户</strong></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="circleFeature fStyle2" data-cyrcleBox="cf5"><span class="layui-icon layui-icon-chart-screen"></span>
                                    </div>
                                    <div class="circleBox innerStyle2" id="cf5" style="display: flex;">
                                        <div style="margin:auto;"><strong>纳税业务申报</strong></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="circleFeature fStyle2" data-cyrcleBox="cf6"><span class="layui-icon layui-icon-auz"></span></div>
                                    <div class="circleBox innerStyle2" id="cf6" style="display: flex;">
                                        <div style="margin:auto;"><strong>企业名称核准</strong></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </td>

            </tr>

        </tbody>
    </table>
    </td>
    <td id="tdgs" rowspan="2">

    </td>
    </tr>
    <tr>
        <td id="tdlw">
            <table class="layui-table table2">

                <tbody>
                    <tr>
                        <td id="tdms1">
                            <table class="layui-table table4">
                                <tr>
                                    <td>
                                        <span style="float:left; color:#ffffff;position:absolute;top:30%;left:2%">企业章程制定要素</span>
                                        <div class='box box-4'>
                                            <!-- <button class="layui-btn layui-btn-drog layui-btn-sm" onclick="removeData(1)">删除</button> -->
                                            <button class="layui-btn layui-btn-drog layui-btn-sm" onclick="addZ('rights')" style="margin-left: 10px;background: #91c53e;">权利</button>
                                            <button class="layui-btn layui-btn-drog layui-btn-sm" onclick="addZ('duty')" style="margin-right: 10px;background: #1d75bc;">职责</button>
                                            <button class="layui-btn layui-btn-drog layui-btn-sm" onclick="addZ('termlist')" style="margin-right: 10px;background:#a33848;">条款</button>
                                            <button class="layui-btn layui-btn-drog layui-btn-sm" onclick="addZ('num')" style="margin-right: 10px;background: #e18678;">数据</button>
                                            <button class="layui-btn layui-btn-drog layui-btn-sm" onclick="addZ('info')" style="margin-right: 10px;background: #f3b85d;">信息</button>
                                            <!-- <button class="layui-btn layui-btn-drog layui-btn-sm" onclick="addData(1)">添加</button> -->
                                            <!-- <input type="text" id="enterdrog" lay-verify="title" autocomplete="off" placeholder="调研企业章程制定要素" class="layui-input"> -->
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td id="carddrogbox">
                                        <div id="dragBox1"></div>
                                    </td>
                                </tr>

                            </table>
                        </td>
                        <!-- <td>
      <input type="text" id="title" name="title" placeholder="输入共享服务中心名称" autocomplete="off" class="layui-input" value="{{$content['name']}}">
             </td> -->
                    </tr>

                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
    </table>


    </div>
    <script src="https://fast.cgshiyan.com/js/iframe.js" id="fastgpt-iframe" data-src="https://fast.cgshiyan.com/chat/share?shareId=kldi3t1jc19t7z9x9qee85kz" data-color="#4e83fd"></script>
    <script>
        //离开保存
        $('#bu1').click(function() {
            var left = new Array;
            var top = new Array;
            var hightW = window.innerHeight;
            var widthW = window.innerWidth;
            var cid = new Array;
            var kind = new Array;
            var name = new Array;
            var title = $('#title').val();
            var reason = $('#reason').children('textarea').val();
            var saveurl = $(this).attr('url');
            var i = 0;
            $('.box-4 dl').each(function() {
                var offset = $(this).offset();
                left[i] = (parseFloat(offset.left / widthW) * 100).toFixed(2);
                top[i] = (parseFloat(offset.top / hightW) * 100).toFixed(2);
                cid[i] = $(this).attr('cid');
                kind[i] = $(this).attr('kind');
                name[i] = $(this).attr('name');
                i++;
            });
            $.ajax({
                type: "POST",
                dataType: "json",
                url: saveurl,
                data: {
                    'cid': cid,
                    'kind': kind,
                    'name': name,
                    'top': top,
                    'left': left,
                    'title': title,
                    'reason': reason
                },
                beforeSend: function() {
                    layer.load();
                },
                //请求成功
                success: function(result) {
                    layer.close();
                    layer.msg(result.msg, {
                        icon: result.code
                    }, function() {
                        if (result.reload) {
                            location.reload();
                        }
                    });
                },
                //请求失败，包含具体的错误信息
                error: function(e) {
                    layer.msg(e.msg, {
                        icon: e.code
                    }, function() {
                        if (e.reload) {
                            location.reload();
                        }
                    });
                }
            });
        });
        //重置
        $('#bu5').click(function() {
            var reurl = $(this).attr('url');
            $.ajax({
                type: "POST",
                dataType: "json",
                url: reurl,
                data: "username=chen&nickname=alien",
                beforeSend: function() {
                    layer.load();
                },
                //请求成功
                success: function(result) {
                    layer.close();
                    layer.msg(result.msg, {
                        icon: result.code
                    }, function() {
                        if (result.reload) {
                            location.reload();
                        }
                    });
                },
                //请求失败，包含具体的错误信息
                error: function(e) {
                    layer.msg(e.msg, {
                        icon: e.code
                    }, function() {
                        if (e.reload) {
                            location.reload();
                        }
                    });
                }
            });
        });

        //返回首页
        $('#bu6').click(function() {
            window.location.replace("{{url('/')}}");
        });

        $('#bu7').click(function() {
            var reurl = $(this).attr('url');
            $.ajax({
                type: "POST",
                dataType: "json",
                url: reurl,
                data: "username=chen&nickname=alien",
                beforeSend: function() {
                    layer.load();
                },
                //请求成功
                success: function(result) {
                    layer.close();
                    layer.msg(result.msg, {
                        icon: result.code
                    }, function() {
                        if (result.reload) {
                            location.reload();
                        }
                    });
                },
                //请求失败，包含具体的错误信息
                error: function(e) {
                    layer.msg(e.msg, {
                        icon: e.code
                    }, function() {
                        if (e.reload) {
                            location.reload();
                        }
                    });
                }
            });
        });

        let data = [],
            opts1 = {
                itemWidth: 75,
                itemHeight: 75,
                times: 1200,
                showClose: true,
                allowDrag: true,
                // class:'test1',
                idField: "Id",
                textField: "Text",
                iconField: "Icon",
                // onitemclick: "itemclick",
                onitemremove: "removeItem",
                data: []
            }
        let initalData = [
            [`企业名称`, "fa fa-keyboard-o", "info"],
            [`经营场所`, "fa fa-keyboard-o", "info"],
            [`经营年限`, "fa fa-paste", "num"],
            [`经营范围`, "fa fa-list-alt", "termlist"],
            [`法定代表人`, "fa fa-legal", "duty"],
            [`股东权利`, "fa fa-key", "rights"],
            [`股东职责`, "fa fa-legal", "duty"],
            [`股权转让`, "fa fa-key", "rights"],

        ]
        // for (i = 0; i < 8; i++) {
        //     let id = getGuid();
        //     opts1.data.push({
        //         Id: id,
        //         Text: initalData[i][0],
        //         Icon: initalData[i][1],
        //         Class: initalData[i][2],
        //     })
        // }
        //原生js用法


        //引入jquery后可如下
        let sender1 = $("#dragBox1").dragSort(opts1)

        function tileLoaded(e) {

        }

        function itemclick(a, b, c, d) {
            alert("opts-" + b.options.data.length + ":elData-" + b.drag._elData.list.length)
            console.log(a)
            console.log(JSON.stringify(a))
        }

        function removeItem(a, b, c, d) {
            // alert(JSON.stringify(a))
        }

        function getAllData(n) {
            let result = n == 0 ? sender.getData() : sender1.getData();
            alert(`(${result.length})` + JSON.stringify(result))
        }

        function getData(n) {
            let result = n == 0 ? sender.getData() : sender1.getData(),
                index = Math.floor(Math.random() * result.length),
                item = result[index];
            alert(JSON.stringify(item))
        }

        function addData(n, termZ) {
            let id = getGuid(),
                len, item, arr;
            if (n == 0) {
                arr = sender.getData().map(m => m.name.substring(0, m.name.indexOf("_")).trim());
                len = Math.max(...arr) + 1;
                item = {
                    id: id,
                    name: `${len} _ ${id}`,
                    icon: "fa fa-globe"
                };
                sender.addItem(item)
            } else {
                if (termZ) {
                    arr = sender1.getData().map(m => m.Text.substring(0, m.Text.indexOf("_")).trim().substring(4))
                    len = Math.max(...arr) + 1;
                    let ico = '';
                    switch (n) {
                        case 'info':
                            ico = 'fa fa-keyboard-o'
                            break;
                        case 'num':
                            ico = 'fa fa-paste'
                            break;
                        case 'termlist':
                            ico = 'fa fa-list-alt'
                            break;
                        case 'duty':
                            ico = '"fa fa-legal'
                            break;
                        case 'rights':
                            ico = 'fa fa-key'
                            break;
                        default:
                            tit = 'fa fa-keyboard-o'
                            break;
                    }
                    item = {
                        Id: id,
                        Text: termZ,
                        Icon: ico,
                        Class: n
                    }
                } else {
                    arr = sender1.getData().map(m => m.Text.substring(0, m.Text.indexOf("_")).trim().substring(4))
                    len = Math.max(...arr) + 1;
                    item = {
                        Id: id,
                        Text: `321`,
                        Icon: "fa fa-drupal",
                    }
                }
                sender1.addItem(item)
            }
        }

        function removeData(n) {
            let result = n == 0 ? sender.getData() : sender1.getData(),
                index = Math.floor(Math.random() * result.length),
                item = result[index];
            n == 0 ? sender.removeItem(item.id) : sender1.removeItem(item.Id)
        }

        function getGuid() {
            let guid = ""
            for (var i = 1; i <= 32; i++) {
                var n = Math.floor(Math.random() * 16.0).toString(16);
                guid += n;
                if ((i == 8) || (i == 12) || (i == 16) || (i == 20))
                    guid += "-";
            }
            return guid.toUpperCase();
        }

        function addZ(info) {
            let tit = ''
            switch (info) {
                case 'info':
                    tit = '信息类'
                    break;
                case 'num':
                    tit = '数据类'
                    break;
                case 'termlist':
                    tit = '条款类'
                    break;
                case 'duty':
                    tit = '职责类'
                    break;
                case 'duty':
                    tit = '权益类'
                    break;
                default:
                    tit = '元素'
                    break;
            }
            layer.prompt({
                title: '添加' + tit + ',并确认',
                formType: 3
            }, function(text, index) {
                addData(info, text)
                layer.close(index);
            });
        }
    </script>
    <script src="/layui/layui.all.js"></script>
    <script src="src/s8CyrcleInfoBox.js" type="text/javascript"></script>
    <script>
        $(".circle2").s8CircleInfoBox({
            autoSlide: true,
            action: "click",
        })
    </script>
</body>

</html>