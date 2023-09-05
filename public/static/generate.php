<?php

// ## ENABLE PHP GD EXTENTION IN php.ini by uncommenting ;



$user = $_GET['user'];
$location = $_GET['location'];
$event_name = $_GET['ename'];
$date = $_GET['date'];
$verify = $_GET['verify'];




// Load the certificate image
$image = imagecreatefrompng('cert.png');

// Set the text colors, 000 black
$black = imagecolorallocate($image, 0, 0, 0);





// Draw the text on the given image
// imagettftext( $img_resource , $size, $angle, $x, $y, $color, $fontfile, $text)
imagettftext($image, 16, 0, 140, 328, $black, 'Arial.ttf', $user);

imagettftext($image, 16, 0, 435, 385, $black, 'Arial.ttf', $event_name);

imagettftext($image, 16, 0, 290, 443, $black, 'Arial.ttf', $location);

imagettftext($image, 16, 0, 840, 443, $black, 'Arial.ttf', $date);

imagettftext($image, 16, 0, 695, 690, $black, 'Arial.ttf', $verify);







// Output the image to the browser
// Otherwise image binary data will printed
header('Content-type: image/png');
imagepng($image);






// Free the image resources
// Otherwise new image will not generate and current image will always shown.
// Clears cached image
imagedestroy($image);

?>