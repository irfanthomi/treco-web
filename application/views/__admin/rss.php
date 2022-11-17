<?php 
header("Content-Type: text/xml");
$str='<?xml version="1.0"encoding="UTF-8"?>';
$str.='<rss version="2.0">';
$str.='<channel>';
foreach($posts as $row):
$str.='<item>';
$str.='<title>'.$row->judul.'</title>';
$str.='<description>'.$row->tanggal.'</description>';
$str.='</item>';
endforeach;
echo $str;

