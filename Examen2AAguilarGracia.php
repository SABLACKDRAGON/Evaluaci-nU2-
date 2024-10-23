<?php
$arrayPrecios = array("500","400","200","700","100");
$arrayIVA = array("");
$arraySubtotal = array("");
$arrayDescuento= array("");
$arrayTotal= array("");
$arrayvaloriva= array("0.16");





echo "Arreglo Precio";
echo "</p>";
for ($i=0; $i <count($arrayPrecios) ; $i++) { 
    echo " $arrayPrecios[$i] ";

    echo "<br>";

  array_push($arrayIVA,$arrayPrecios[$i]);
}

echo "Arreglo IVA";
echo "</p>";


for ($i=0; $i <count($arrayIVA) ; $i++) { 
 $VALOR = $arrayIVA[$i];

    $array1 = $VALOR * 0.16; 
    echo " $arrayl ";

    echo "<br>";
}


  
?>


;)