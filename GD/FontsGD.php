<?php

$img = imagecreatefromjpeg("certificado.jpg");

putenv('GDFONTPATH=' . realpath('.'));

$titleColor = imagecolorallocate($img, 0, 0, 0);
$gray =  imagecolorallocate($img, 100, 100, 100);
$font =

imagettftext($img, 32, 0, 320, 250, $titleColor,"fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.TTF", "CERTIFICADO");
imagettftext($img, 32, 0, 375, 350, $titleColor,"fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.TTF", "Rutemberg Barbosa");
imagestring($img, 3, 440, 370, utf8_decode("Concluído em: "). date("d/m/Y"), $titleColor);

header("Content-type: image/jpg");
imagejpeg($img);
imagedestroy($img);

 ?>
