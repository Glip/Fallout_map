<?php 
$image=imageCreateFromJpeg("map.jpg"); 

imageString($image, 3, 810, 550, "Uranium", 0x00FF00); 
imageString($image, 3, 770, 863, "GunRunners", 0x00FF00); 
imageString($image, 3, 935, 688, "Canadian partisan", 0x00FF00); 
imageString($image, 3, 768, 648, "Bar", 0x00FF00); 

//РІС‹РІРѕРґ РїРѕР»СѓС‡РёРІС€РµР№СЃСЏ РєР°СЂС‚РёРЅРєРё 
header('Content-type: image/png'); 
imagepng($image); 
imagedestroy($image); 
?>