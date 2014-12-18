<?php
$user = 'test'; 
$mvp = 'novice'; 
$img2 = new Imagick( "Circle_small.png" );
  ini_set('display_errors', 1);
  error_reporting(E_ALL);


/* Create some objects */
if($mvp == 'novice') {
	$img2 = new Imagick( "Circle_small.png" );
}
if($mvp == 'mage') {
	$img2 = new Imagick( "image2.png" );
}


$image = new Imagick('map.jpg');
$draw = new ImagickDraw();
$pixel = new ImagickPixel( 'gray' );



/* Black text */
$draw->setFillColor('black');

/* Font properties */
$draw->setFont('Bookman-DemiItalic');
$draw->setFontSize( 30 );

/* Create text */
$image->annotateImage($draw, 220, 85, 0, $user);
$image->compositeImage( $img2, imagick::COMPOSITE_OVER, 0, 0 );
/* Give image a format */
$image->setImageFormat('png');

/* Output the image with headers */
header('Content-type: image/png');
echo $image;
?>