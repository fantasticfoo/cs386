<?php

$url = getenv('mysql://rz3g4npuxheqkm4q:w16mgna61998973p@bqmayq5x95g1sgr9.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/v3631j1wxf69fwg6');
$dbparts = parse_url($url);

$hostname = $dbparts['bqmayq5x95g1sgr9.cbetxkdyhwsb.us-east-1.rds.amazonaws.com	'];
$username = $dbparts['rz3g4npuxheqkm4q']
$password = $dbparts['w16mgna61998973p']

$link = mysql_connect($hostname, $username, $password);

if (!$link)
   {
    die('Could not connect:' . mysql_error());
   }
echo 'Connected successfully';
mysql_close($link);
?>