<?php
$homepage = file_get_contents('http://www.4shared.com/v0/files.json?oauth_consumer_key=928ed13c2f7dd9b531a181341f5a6a4e&query=sky&category=1');
echo "<pre>";
print_r(json_decode($homepage));
?>