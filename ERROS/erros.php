<?php

function tratar_erros($code, $message, $file, $line)
{
      echo json_encode(array(
            'code'=>$code,
            'message'=>$message,
            'file'=>$file,
            'line'=>$line

      ));
}

set_error_handler("tratar_erros");

$total = 100/0;
 ?>
