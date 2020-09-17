<?php
// github.com/pajaar

$file = "list.txt";
$savefile = "saved.txt";

$before = "https://";
$after = "/wp-login.php";

$lol = explode("\r\n",file_get_contents($file));

foreach($lol as $res){
$result = $before.$res.$after."\n";
file_put_contents($savefile, $result, FILE_APPEND);
}
?>
