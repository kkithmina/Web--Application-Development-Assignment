<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Waist Hip Ratio Calculator </title>
	</head>
	<style media="screen">
		body{
			margin: 0;
			padding: 0;
			text-align: center;
			font-family: sans-serif;
			background-image: linear-gradient(to bottom, #66ccff 0%, #000066 100%);
			min-height: 100vh;
		}
		div{
			width: 500px;
			position: absolute;
			top: 50%;
			left: 50%;
			background-color: #fff;
			transform: translate(-50%, -50%);
			padding: 20px;
			border-radius: 10px;
			box-shadow: 1px 1px 20px #000066;
		}
		h2{
			font-size: 30px;
			font-weight: 600;
		}
		.text{
			text-align: left;
			margin-left: 150px;
		}
		#w, #h{
			color: #222f3e;
			text-align: left;
			font-size: 20px;
			font-weight: 200;
			outline: none;
			border: none;
			background: none;
			border-bottom: 1px solid #341f97;
			width: 200px;
		}
			#w:focus, #h:focus{
				border-bottom: 2px solid #341f97;
				width: 300px;
				transition: 0.5s;
			}
			#result{
				color: #341f97;
			}
			#btn{
				font-family: inherit;
				margin-top: 10px;
				border: none;
				color: #fff;
				background-image: linear-gradient(to bottom, #66ccff 0%, #000066 100%);
				width: 150px;
				padding: 10px;
				border-radius: 30px;
				outline: none;
				cursor: pointer;
			}
			#btn:hover{
				box-shadow: 1px 1px 10px #66ccff;
			}
			#info{
				font-size: 12px;
				font-family: inherit;
			}
</style>
	<script type="text/javascript">
		function WHR() {
			var h=document.getElementById('h').value;
			var w=document.getElementById('w').value;
			var whr=w/h;
			var whro=(whr.toFixed(2));

			document.getElementById("result").innerHTML="Your Ratio is " + whro;
		}
	</script>
	<body>
		<div>
			<h2> Waist Hip Ratio Calculator</h2>
			<p class="text">Waist</p>
			<input type="text" id="h">
			<p class="text">Hips</p>
			<input type="text" id="w">
			<p id="result"></p>
			<button id="btn" onClick="WHR()">Calculate</button>
			<p id="info">Please enter Waist [cm] and hips [cm]</p>
		</div>
	</body>
</html>