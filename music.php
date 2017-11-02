<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Music Library</title>
		<meta charset="utf-8" />
		<link href="http://selab.hanyang.ac.kr/courses/cse326/2017/labs/images/5/music.jpg" type="image/jpeg" rel="shortcut icon" />
		<link href="http://selab.hanyang.ac.kr/courses/cse326/2017/labs/labResources/music.css" type="text/css" rel="stylesheet" />
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
                <?php $news_pages = 8;
                for ($i = 0; $i<$news_pages; $i++){ ?>
                <li><a href="http://music.yahoo.com/news/archive/?page=<?= $i +1 ?>">Page <?= $i +1 ?></a></li>
                <?php } ?>
		    </ol>
		</div>

		<!-- Ex 5: Favorite Artists from a File (Files) -->
		<div class="section">
			<h2>My Favorite Artists</h2>
		    <!-- Ex 4: Favorite Artists (Arrays)
			<ol>
			    <?php $artists = array("Guns N' Roses", "Green Day", "Blink182", "Ariana Grande"); 
                for ($i = 0; $i < count($artists); $i++) { ?>
			        <li><?= $artists[$i] ?></li>
				<?php } ?>
			</ol> -->
			<ol>
                <?php $favorite = file("favorite.txt"); 
                    $fav_links = str_replace(" ", "_", $favorite);
                    for ($i=0; $i < count($favorite); $i++) { ?>
                    <li><a href="http://en.wikipedia.org/wiki/<?=$fav_links[$i]?>"><?=$favorite[$i]?></a></li>
                <?php } ?>
            </ol>
		</div>
		
		<!-- Ex 6: Music (Multiple Files) -->
		<!-- Ex 7: MP3 Formatting -->
		<div class="section">
			<h2>My Music and Playlists</h2>
			
			<ul id="musiclist">
                <?php $mp3list = glob("lab5/musicPHP/songs/*.mp3");
                    for ($i=0; $i < count($mp3list); $i++) { ?>
                    <li class="mp3item"><a href="<?=$mp3list[$i]?>"><?=basename($mp3list[$i])?></a> (<?=(int)((filesize($mp3list[$i]))/1024)?> KB)</li>
                <?php } ?>

				<!-- Exercise 8: Playlists (Files) -->
				<!-- <li class="playlistitem">326-13f-mix.m3u:
					<ul>
						<li>Basket Case.mp3</li>
						<li>All the Small Things.mp3</li>
						<li>Just the Way You Are.mp3</li>
						<li>Pradise City.mp3</li>
						<li>Dreams.mp3</li>
					</ul> -->
			</ul>
		</div>

		<div>
			<a href="http://validator.w3.org/check/referer">
				<img src="http://selab.hanyang.ac.kr/courses/cse326/2017/labs/images/w3c-html.png" alt="Valid HTML5" />
			</a>
			<a href="http://jigsaw.w3.org/css-validator/check/referer">
				<img src="http://selab.hanyang.ac.kr/courses/cse326/2017/labs/images/w3c-css.png" alt="Valid CSS" />
			</a>
		</div>
	</body>
</html>
