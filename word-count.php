<?php
 
$my_file = file_get_contents('alice.txt');
$results = array(explode(" ", $my_file));

$res = array(1);
	foreach ($results as $words) {  // changed $word to $words
	    foreach ($words as $word) { // this foreach added
	        if (isset($res[$word])) {
	            $res[$word] += 1;
	        } else {
	            $res[$word] = 1;
	        }
	    } // end of nested foreach which was added
	}
	var_dump($res);
	foreach ($res as $word => $count) {
		$word = preg_replace('/[^a-z]+/i', '', $word);
	    echo $word . '(' . $count . ')' . "\n";
	}

?>