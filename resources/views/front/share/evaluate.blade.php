<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <script type="text/javascript" src="js/Chart.js"></script>

<style>

    body{
        width: 100%;
        padding: 0;

        margin: 0;

    }

    #canvas-holder{

        width:100%;

    }

</style>
   
    <title>能力评价</title>
</head>

<body>
<div id="canvas-holder">

			<canvas id="chart-area" width="100%" height="100%"/>

		</div>





	<script>

	             window.onload = function() {

                 var ctx = document.getElementById("canvas").getContext("2d");

                 ctx.fillRect(10, 10, 20, 20);

             };



		var doughnutData = [

				{

					value: 300,

					color:"#F7464A",

					highlight: "#FF5A5E",

					label: "Red"

				},

				{

					value: 50,

					color: "#46BFBD",

					highlight: "#5AD3D1",

					label: "Green"

				},

				{

					value: 100,

					color: "#FDB45C",

					highlight: "#FFC870",

					label: "Yellow"

				},

				{

					value: 40,

					color: "#949FB1",

					highlight: "#A8B3C5",

					label: "Grey"

				},

				{

					value: 120,

					color: "#4D5360",

					highlight: "#616774",

					label: "Dark Grey"

				}



			];



			window.onload = function(){

				var ctx = document.getElementById("chart-area").getContext("2d");

				window.myDoughnut = new Chart(ctx).Doughnut(doughnutData, {responsive : true});

			};







	</script>


  
</body>

</html>