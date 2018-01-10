<?php
 
$my_file = file_get_contents('alice.txt');
$line = explode("\n", $my_file);
var_dump($line);

foreach ($line as $line) {
	$results = array(explode(" ", $line));

$res = array();
foreach ($results as $words) {  // changed $word to $words
    foreach ($words as $word) { // this foreach added
        if (isset($res[$word])) {
            $res[$word] += 1;
        } else {
            $res[$word] = 1;
        }
    } // end of nested foreach which was added
}

foreach ($res as $word => $count) {
	$word = preg_replace('/[^a-z]+/i', ' ', $word);
    echo $word . ' (' . $count . ') ';
}

}



