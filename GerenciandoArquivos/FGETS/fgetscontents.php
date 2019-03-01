<?php

//Abrir arquivo

$filename = "exemplo.pdf";

$base64 = base64_encode(file_get_contents($filename));
echo "$base64<hr>";

$fileinfo = new finfo(FILEINFO_MIME_TYPE);

$mimetype = $fileinfo->file($filename);
echo "$mimetype<hr>";

$base64encode = "data:".$mimetype.";base64,".$base64;
echo "$base64encode<hr>";
 ?>

<a href="<?=$base64encode?>" target="_blank">Link para imagem</a>
<iframe src="<?=$base64encode?>" width="100%" height="780" style="border: none;"></iframe>
