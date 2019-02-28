<?php


$images = scandir("images");
$data = array();

foreach ($images as $img) {
    if (!in_array($img, array(".", ".."))) {
        $file_name = "images" . DIRECTORY_SEPARATOR . "$img";
        $info = pathinfo($file_name);
        $info["size"] = filesize($file_name);
        $info["modified"] = date("d/m/Y H:i:s", filemtime($file_name));
        $info["url"] = "http://localhost/aulasUdemy/DIR/".str_replace("\\","/", $file_name);
        array_push($data, $info);
    }
}

echo json_encode($data);

 ?>
