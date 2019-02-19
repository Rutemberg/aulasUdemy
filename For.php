<?php

/*
    echo "<select>";
    for ($i=date('Y'); $i >= date('Y')-100; $i--) {

    echo '<option value="'.$i.'">'.$i.'</option>';

    }
    echo "</select><hr>";
*/

///////////////////////////////////////////////////////

/*
  $meses = array(
        "janeiro", "Fevereiro", "março",
        "abril", "maio", "junho",
        "julho", "agosto", "setembro",
        "outubro", "novembro", "dezembro",
  );

  foreach ($meses as $index => $mes) {
    echo $index."<br>";
    echo $mes."<br><br>";
  }
  */

 ?>

 <form>
   <input type="text" name="nome">
   <input type="date" name="datanascimento">
   <input type="submit" value="ok">

 </form>

 <?php

foreach ($_GET as $key => $value) {
  echo "Campo: {$key}<br>";
  echo "Valor: {$value}<hr>";

}



  ?>
