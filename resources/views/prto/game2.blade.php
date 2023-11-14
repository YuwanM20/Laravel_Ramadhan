<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Yuwan - Tower Blocks</title>
  <link rel="stylesheet" href="{{asset('depan')}}/game1/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<meta name="viewport" content="width=device-width,user-scalable=no">

<div id="container">
	<div id="game"></div>
	<div id="score">0</div>
	<div id="instructions">Klik (atau tekan bilah spasi) untuk menempatkan blok</div>
	<div class="game-over">
		<h2>Yah Kaka</h2>
		<p>semangat kaka</p>
		<p>Main lagi?</p>
	</div>
	<div class="game-ready">
		<div id="start-button">Mulai</div>
		<div></div>
	</div>
</div>
<!-- partial -->
 
<script src='https://cdnjs.cloudflare.com/ajax/libs/three.js/r83/three.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js'></script>
<script  src="{{asset('depan')}}/game1/script.js"></script>

</body>
</html>
