<?php

echo session_save_path()."<br>";

switch (session_status()) {
    case PHP_SESSION_DISABLED:
    echo "Sessões desabilitadas";
        break;

    case PHP_SESSION_NONE:
    echo "Sessões habilitadas mas nenhuma existe";
        break;

    case PHP_SESSION_ACTIVE:
    echo "Sessões habilitadas e uma existir ";
        break;
}
 ?>
