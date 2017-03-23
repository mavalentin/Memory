<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Memory Game</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Anton'>

      <link rel="stylesheet " href="css/style.css">

  
</head>

<body>
	<div id="dataid"></div>
<?php
	$winner = "winner";
	$restart = "continua";
	$message = "message";
	$sharetext = "share";
?>
	
  <div class="wrap">
<div class="game"></div>
	
	<div class="modal-overlay">
		<div class="modal modal1">
			<h2 class="winner">1</h2>
			<button class="restart"><?php echo $restart; ?></button>
			<p class="message"><?php echo $message; ?></p>
			<p class="share-text"><?php echo $sharetext; ?></p>
			<ul class="social">
				<li><a target="_blank" class="twitter" href="http://twitter.com/share?url=http://codepen.io/natewiley/pen/HBrbL"><span class="brandico-twitter-bird"></span></a></li>
				<li><a target="_blank" class="facebook" href="http://www.facebook.com/sharer.php?u=http://codepen.io/natewiley/pen/HBrbL"><span class="brandico-facebook"></span></a></li>
				<li><a target="_blank" class="google" href="https://plus.google.com/share?url=http://codepen.io/natewiley/pen/HBrbL"><span class="brandico-googleplus-rect"></span></a></li>
			</ul>
		</div>
		
		<div class="modal modal2">
			<h2 class="winner">2</h2>
			<button class="restart"><?php echo $restart; ?></button>
			<p class="message"><?php echo $message; ?></p>
			<p class="share-text"><?php echo $sharetext; ?></p>
			<ul class="social">
				<li><a target="_blank" class="twitter" href="http://twitter.com/share?url=http://codepen.io/natewiley/pen/HBrbL"><span class="brandico-twitter-bird"></span></a></li>
				<li><a target="_blank" class="facebook" href="http://www.facebook.com/sharer.php?u=http://codepen.io/natewiley/pen/HBrbL"><span class="brandico-facebook"></span></a></li>
				<li><a target="_blank" class="google" href="https://plus.google.com/share?url=http://codepen.io/natewiley/pen/HBrbL"><span class="brandico-googleplus-rect"></span></a></li>
			</ul>
		</div>
		<div class="modal modal3">
			<h2 class="winner">3</h2>
			<button class="restart"><?php echo $restart; ?></button>
			<p class="message"><?php echo $message; ?></p>
			<p class="share-text"><?php echo $sharetext; ?></p>
			<ul class="social">
				<li><a target="_blank" class="twitter" href="http://twitter.com/share?url=http://codepen.io/natewiley/pen/HBrbL"><span class="brandico-twitter-bird"></span></a></li>
				<li><a target="_blank" class="facebook" href="http://www.facebook.com/sharer.php?u=http://codepen.io/natewiley/pen/HBrbL"><span class="brandico-facebook"></span></a></li>
				<li><a target="_blank" class="google" href="https://plus.google.com/share?url=http://codepen.io/natewiley/pen/HBrbL"><span class="brandico-googleplus-rect"></span></a></li>
			</ul>
		</div>
		<div class="modal modal4">
			<h2 class="winner">4</h2>
			<button class="restart"><?php echo $restart; ?></button>
			<p class="message"><?php echo $message; ?></p>
			<p class="share-text"><?php echo $sharetext; ?></p>
			<ul class="social">
				<li><a target="_blank" class="twitter" href="http://twitter.com/share?url=http://codepen.io/natewiley/pen/HBrbL"><span class="brandico-twitter-bird"></span></a></li>
				<li><a target="_blank" class="facebook" href="http://www.facebook.com/sharer.php?u=http://codepen.io/natewiley/pen/HBrbL"><span class="brandico-facebook"></span></a></li>
				<li><a target="_blank" class="google" href="https://plus.google.com/share?url=http://codepen.io/natewiley/pen/HBrbL"><span class="brandico-googleplus-rect"></span></a></li>
			</ul>
		</div>
		<div class="modal modal5">
			<h2 class="winner">5</h2>
			<button class="restart"><?php echo $restart; ?></button>
			<p class="message"><?php echo $message; ?></p>
			<p class="share-text"><?php echo $sharetext; ?></p>
			<ul class="social">
				<li><a target="_blank" class="twitter" href="http://twitter.com/share?url=http://codepen.io/natewiley/pen/HBrbL"><span class="brandico-twitter-bird"></span></a></li>
				<li><a target="_blank" class="facebook" href="http://www.facebook.com/sharer.php?u=http://codepen.io/natewiley/pen/HBrbL"><span class="brandico-facebook"></span></a></li>
				<li><a target="_blank" class="google" href="https://plus.google.com/share?url=http://codepen.io/natewiley/pen/HBrbL"><span class="brandico-googleplus-rect"></span></a></li>
			</ul>
		</div>
		<div class="modal modal6">
			<h2 class="winner">6</h2>
			<button class="restart"><?php echo $restart; ?></button>
			<p class="message"><?php echo $message; ?></p>
			<p class="share-text"><?php echo $sharetext; ?></p>
			<ul class="social">
				<li><a target="_blank" class="twitter" href="http://twitter.com/share?url=http://codepen.io/natewiley/pen/HBrbL"><span class="brandico-twitter-bird"></span></a></li>
				<li><a target="_blank" class="facebook" href="http://www.facebook.com/sharer.php?u=http://codepen.io/natewiley/pen/HBrbL"><span class="brandico-facebook"></span></a></li>
				<li><a target="_blank" class="google" href="https://plus.google.com/share?url=http://codepen.io/natewiley/pen/HBrbL"><span class="brandico-googleplus-rect"></span></a></li>
			</ul>
		</div>
	</div>
  <footer>
		<p class="disclaimer"></p>
	</footer>
  </div><!-- End Wrap -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
