
<form method="post">
<input type="search" name="texto" value="">
<button type="submit">enviar</button>
</form>


<?php

if (isset($_POST["texto"])) {
    echo strip_tags($_POST["texto"],"<strong>");//remove scripts e tags e transforma em string
}

 ?>
