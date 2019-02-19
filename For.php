<?php

echo "<select>";
for ($i=date('Y'); $i >= date('Y')-100; $i--) {

echo '<option value="'.$i.'">'.$i.'</option>';

}

echo "</select><hr>";


///////////////////////////////////////////////////////

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
 ?>
