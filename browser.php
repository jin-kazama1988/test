<?php

echo pack("C*",80,72,80);

echo $_SERVER['HTTP_USER_AGENT'];
$browser = get_browser();
echo "<pre>";
print_r($browser);
echo "</pre>";

show_source("index.php");