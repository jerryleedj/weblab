<!DOCTYPE html>
<html lang="en">

<head>
	<title>Music Library</title>
	<meta charset="utf-8" />
	<link href="images/music.jpg" type="image/jpeg" rel="shortcut icon" />
	<link href="music.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1>My Music Page</h1>

	<!-- Ex 1: Number of Songs (Variables) -->
	<p>
		<?php
                $song_count = 2345;
                $total_hours = $song_count/10;
                $total_hours = (int)$total_hours;
                echo "I love music. I have $song_count total songs, which is over $total_hours hours of music!";
            ?>
	</p>

	<!-- Ex 2: Top Music News (Loops) -->
	<!-- Ex 3: Query Variable -->
	<div class="section">
		<h2>Yahoo! Top Music News</h2>

		<ol>
			<?php 
                if (!isset($_GET["newspages"])) {
                    $pages = 7;
                }
                for ($i = 1; $i <= $pages; $i++){ ?>
			<li><a href="http://music.yahoo.com/news/archive/?page=<?=$i?>">Page <?=$i?></a></li>
			<?php } ?>
		</ol>
	</div>

	<!-- Ex 5: Favorite Artists from a File (Files) -->
	<div class="section">
		<h2>My Favorite Artists</h2>
		<!-- Ex 4: Favorite Artists (Arrays)-->
		<!-- <ol>
			    <?php $artists = array("Guns N' Roses", "Green Day", "Blink182", "Ariana Grande"); 
                for ($i = 0; $i < count($artists); $i++) { ?>
			        <li><?= $artists[$i] ?></li>
				<?php } ?>
			</ol> -->
		<ol>
			<?php $favorites = file("favorite.txt"); 
                    foreach ($favorites as $favorite) { ?>
			<li>
				<a href="http://en.wikipedia.org/wiki/<?=str_replace(" ", "_ ", $favorite)?>">
					<?=$favorite?>
				</a>
			</li>
			<?php } ?>
		</ol>
	</div>

	<!-- Ex 6: Music (Multiple Files) -->
	<!-- Ex 7: MP3 Formatting -->
	<div class="section">
		<h2>My Music and Playlists</h2>

		<ul id="musiclist">
			<?php $globlist = glob("lab5/musicPHP/songs/*.mp3");
                    foreach ($globlist as $mp3list) { ?>
			<li class="mp3item">
				<a href="<?=$mp3list?>">
					<?=basename($mp3list)?>
				</a> (
				<?=(int)((filesize($mp3list))/1024)?> KB)</li>
			<?php } ?>

			<!-- Exercise 8: Playlists (Files) -->
			<?php
                    $playlists = glob("lab5/musicPHP/songs/*.m3u");
                    foreach ($playlists as $playlist) {
                ?>
				<li class="playlistitem">
					<?=basename($playlist)?>:
						<!-- m3u filename-->
						<ul>
							<?php #inner m3u file
                        $m3ufiles = file($playlist);
                        foreach($m3ufiles as $m3ufile){
                            if ($m3ufile[0] != "#"){ ?>
							<li>
								<?=$m3ufile?>
							</li>
							<?php
                            }
                        }
                        ?>
						</ul>
						<?php
                        }
                        ?>
				</li>
		</ul>
	</div>

	<div>
		<a href="http://validator.w3.org/check/referer">
				<img src="images/w3c-html.png" alt="Valid HTML5" />
			</a>
		<a href="http://jigsaw.w3.org/css-validator/check/referer">
				<img src="images/w3c-css.png" alt="Valid CSS" />
			</a>
	</div>
</body>

</html>
