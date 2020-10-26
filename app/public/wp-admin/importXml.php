<?php
// The functions which is going to do the job

	// Download and parse the xml
	$xml = simplexml_load_file('https://www.kunstmin.nl/feed') or die("Not Connected to Link");
	?> <pre> <?php print_r($xml); ?> </pre>
	<?php

	foreach ($xml->channel->item as $item) {
		print_r($item->title);
	}



?>