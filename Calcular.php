<?php
   $tValor = floatval ($_GET ['txtValor']);
   $tQuantidade= floatval ($_GET ['txtQuantidade']);
   $tGraficacao = floatval ($_GET ['txtGraficacao']);
   $r1=$tQuantidade *$tValor ;
   $r2 = $r1 + $tGraficacao ;
   echo"O Resultado é: <br>" . $r2. "</b>";
echo " O funcionario ganha este salario ";
echo "Hello World";
  
?>
