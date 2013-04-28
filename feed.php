<?php

$json = file_get_contents('http://search.twitter.com/search.json?q=from:DMZLive');

$rows = json_decode($json, true);

foreach ($rows['results'] as $row) {
	echo "<div class='tweet'>" . $row['text'] . "</div>";
}

?>