<?php
$url = $_GET['url'];
file_put_contents('file.zip', file_get_contents($url));
