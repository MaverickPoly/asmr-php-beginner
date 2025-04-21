<?php
date_default_timezone_set('Asia/Tashkent');
$timezone = date_default_timezone_get();
echo "The current server timezone is: " . $timezone . "<br>";

echo date('m/d/Y h:i:s a', time()) . "<br>";

echo "Time: " . time() . "<br>";
