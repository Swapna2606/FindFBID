<?php
include 'simple_html_dom.php';

if(isSet($_POST['name']))
{
$userName=$_POST['name'];
$url  = 'http://graph.facebook.com/'.$userName;
$html = file_get_html($url);


$start = strpos($html, '"name":"')+8;
$length = strpos($html, '","u') - $start;
$userName = substr($html, $start, $length);

$start = strpos($html, '"id": "') +7;
$length = strpos($html, '","f') - $start;
$id = substr($html, $start, $length);

echo $userName.'+'.$id;
}


?>