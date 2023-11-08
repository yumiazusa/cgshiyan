<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <script type="text/javascript" src="js/echarts.min.js"></script>
<style>
    body{overflow:hildden;overflow-y:auto;overflow-x: auto;}
</style>

    <title>能力评价</title>
</head>

<body>
<div id="main3" style="position:absolute;top:0%;left:0%;width:400px;height:255px;"></div>
<div style="display:flex;">
<div id="main" style="margin:60px auto;width:500px;height:720px;;"></div>
</div>
<div id="main2" style="position:absolute;top:37%;left:23%;width:210px;height:300px;transform: rotate(38deg);"></div>
<script type="text/javascript">
  var myChart = echarts.init(document.getElementById('main'));
</script>




<script>
var chartDom = document.getElementById('main');
var myChart = echarts.init(chartDom);
var option;

option = {
  tooltip: {
    trigger: 'item'
  },
  series: [
    {
      name: 'Access From',
      type: 'pie',
      radius: ['50%', '70%'],
      avoidLabelOverlap: false,
      label: {
        show: false,
        position: 'center'
      },
      emphasis: {
        label: {
          show: true,
          fontSize: 30,
          fontWeight: 'bold',
        }
      },
      labelLine: {
        show: false
      },
      data: [
        { value: 65000, name: '知识运用' },
        { value: 36000, name: '技能操作' },
        { value: 30000, name: '思考空间' },
        { value: 38000, name: '创新思维' },
        { value: 52000, name: '团队合作' },
        { value: 25000, name: '个性展现' },
      ]
    }
  ]
};

option && myChart.setOption(option);


var chartDom = document.getElementById('main2');
var myChart = echarts.init(chartDom);
var option;

option = {

  radar: {
    shape: 'circle',
    indicator: [
      { name: '知识运用', max: 65000 },
      { name: '技能操作', max: 36000 },
      { name: '思考空间', max: 30000 },
      { name: '创新思维', max: 38000 },
      { name: '团队合作', max: 52000 },
      { name: '个性展现', max: 25000 }
    ]
  },
  series: [
    {
      name: 'Budget vs spending',
      type: 'radar',
      data: [
        {
          value: [42000, 30000, 20000, 35000, 50000, 18000],
          name: 'Allocated Budget'
        }
      ]
    }
  ]
};

option && myChart.setOption(option);

var chartDom = document.getElementById('main3');
var myChart = echarts.init(chartDom);
var option;

option = {
 
  tooltip: {
    trigger: 'axis',
    axisPointer: {
      type: 'shadow'
    }
  },
//   legend: {},
  grid: {
    left: '3%',
    right: '4%',
    bottom: '3%',
    containLabel: true
  },
  xAxis: {
    type: 'value',
    boundaryGap: [0, 0.01]
  },
  yAxis: {
    type: 'category',
    data: ['Brazil', 'Indonesia', 'USA', 'India', 'China', 'World']
  },
  series: [
    {
      name: '2011',
      type: 'bar',
      data: [18203, 23489, 29034, 104970, 131744, 630230]
    },
    {
      name: '2012',
      type: 'bar',
      data: [19325, 23438, 31000, 121594, 134141, 681807]
    }
  ]
};

option && myChart.setOption(option);
document.documentElement.addEventListener('touchstart', function (event) {
  if (event.touches.length > 1) {
    event.preventDefault();
  }
}, false);


var lastTouchEnd = 0;
document.documentElement.addEventListener('touchend', function (event) {
  var now = Date.now();
  if (now - lastTouchEnd <= 300) {
    event.preventDefault();
  }
  lastTouchEnd = now;
}, false);


</script>



</body>

</html>