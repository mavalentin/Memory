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
	$restart = "Ripeti il gioco";
	$continua = "Continua";
	$message1 = 'inserire codice html messaggio/immagine con link';
	$message2 = 'inserire codice html messaggio/immagine con link';
	$message3 = 'inserire codice html messaggio/immagine con link';
	$message4 = 'inserire codice html messaggio/immagine con link';
	$message5 = 'inserire codice html messaggio/immagine con link';
	$message6 = 'inserire codice html messaggio/immagine con link';
	$messageEND = 'inserire codice html messaggio/immagine con link';
	$titolo1 = 'Titolo1';
	$titolo2 = 'Titolo2';
	$titolo3 = 'Titolo3';
	$titolo4 = 'Titolo4';
	$titolo5 = 'Titolo5';
	$titolo6 = 'Titolo6';
	$titoloEND = 'TitoloEND';
	$sharetext = "Condividi";
	$twitterurl = "http://twitter";
	$fburl = "http://fb";
	$googleurl = "http://google";
?>
	
  <div class="wrap">
<div class="game"></div>
	
	<div class="modal-overlay">
		<div class="modal modal1">
			<h2 class="winner"><?php echo $titolo1; ?></h2>
			<button class="continua"><?php echo $continua; ?></button>
			<p class="message"><?php echo $message1; ?></p>
			<p class="share-text"><?php echo $sharetext; ?></p>
			<ul class="social">
				<li><a target="_blank" class="twitter" href="<?php echo $twitterurl; ?>"><span class="brandico-twitter-bird"></span></a></li>
				<li><a target="_blank" class="facebook" href="<?php echo $fburl; ?>"><span class="brandico-facebook"></span></a></li>
				<li><a target="_blank" class="google" href="<?php echo $googleurl; ?>"><span class="brandico-googleplus-rect"></span></a></li>
			</ul>
		</div>
		
		<div class="modal modal2">
			<h2 class="winner"><?php echo $titolo2; ?></h2>
			<button class="continua"><?php echo $continua; ?></button>
			<p class="message"><?php echo $message2; ?></p>
			<p class="share-text"><?php echo $sharetext; ?></p>
			<ul class="social">
				<li><a target="_blank" class="twitter" href="<?php echo $twitterurl; ?>"><span class="brandico-twitter-bird"></span></a></li>
				<li><a target="_blank" class="facebook" href="<?php echo $fburl; ?>"><span class="brandico-facebook"></span></a></li>
				<li><a target="_blank" class="google" href="<?php echo $googleurl; ?>"><span class="brandico-googleplus-rect"></span></a></li>
			</ul>
		</div>
		<div class="modal modal3">
			<h2 class="winner"><?php echo $titolo3; ?></h2>
			<button class="continua"><?php echo $continua; ?></button>
			<p class="message"><?php echo $message3; ?></p>
			<p class="share-text"><?php echo $sharetext; ?></p>
			<ul class="social">
				<li><a target="_blank" class="twitter" href="<?php echo $twitterurl; ?>"><span class="brandico-twitter-bird"></span></a></li>
				<li><a target="_blank" class="facebook" href="<?php echo $fburl; ?>"><span class="brandico-facebook"></span></a></li>
				<li><a target="_blank" class="google" href="<?php echo $googleurl; ?>"><span class="brandico-googleplus-rect"></span></a></li>
			</ul>
		</div>
		<div class="modal modal4">
			<h2 class="winner"><?php echo $titolo4; ?></h2>
			<button class="continua"><?php echo $continua; ?></button>
			<p class="message"><?php echo $message4; ?></p>
			<p class="share-text"><?php echo $sharetext; ?></p>
			<ul class="social">
				<li><a target="_blank" class="twitter" href="<?php echo $twitterurl; ?>"><span class="brandico-twitter-bird"></span></a></li>
				<li><a target="_blank" class="facebook" href="<?php echo $fburl; ?>"><span class="brandico-facebook"></span></a></li>
				<li><a target="_blank" class="google" href="<?php echo $googleurl; ?>"><span class="brandico-googleplus-rect"></span></a></li>
			</ul>
		</div>
		<div class="modal modal5">
			<h2 class="winner"><?php echo $titolo5; ?></h2>
			<button class="continua"><?php echo $continua; ?></button>
			<p class="message"><?php echo $message5; ?></p>
			<p class="share-text"><?php echo $sharetext; ?></p>
			<ul class="social">
				<li><a target="_blank" class="twitter" href="<?php echo $twitterurl; ?>"><span class="brandico-twitter-bird"></span></a></li>
				<li><a target="_blank" class="facebook" href="<?php echo $fburl; ?>"><span class="brandico-facebook"></span></a></li>
				<li><a target="_blank" class="google" href="<?php echo $googleurl; ?>"><span class="brandico-googleplus-rect"></span></a></li>
			</ul>
		</div>
		<div class="modal modal6">
			<h2 class="winner"><?php echo $titolo6; ?></h2>
			<button class="continua"><?php echo $continua; ?></button>
			<p class="message"><?php echo $message6; ?></p>
			<p class="share-text"><?php echo $sharetext; ?></p>
			<ul class="social">
				<li><a target="_blank" class="twitter" href="<?php echo $twitterurl; ?>"><span class="brandico-twitter-bird"></span></a></li>
				<li><a target="_blank" class="facebook" href="<?php echo $fburl; ?>"><span class="brandico-facebook"></span></a></li>
				<li><a target="_blank" class="google" href="<?php echo $googleurl; ?>"><span class="brandico-googleplus-rect"></span></a></li>
			</ul>
		</div>
		<div class="modal modalEND">
			<h2 class="winner"><?php echo $titoloEND; ?></h2>
			<button class="restart"><?php echo $restart; ?></button>
			<p class="message"><?php echo $messageEND; ?></p>
			<p class="share-text"><?php echo $sharetext; ?></p>
			<ul class="social">
				<li><a target="_blank" class="twitter" href="<?php echo $twitterurl; ?>"><span class="brandico-twitter-bird"></span></a></li>
				<li><a target="_blank" class="facebook" href="<?php echo $fburl; ?>"><span class="brandico-facebook"></span></a></li>
				<li><a target="_blank" class="google" href="<?php echo $googleurl; ?>"><span class="brandico-googleplus-rect"></span></a></li>
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
