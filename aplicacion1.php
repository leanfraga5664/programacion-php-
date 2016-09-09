<html>

<head>
aplicacion 1
</head>

<body>
     <h1>desarrollo aplicacion 1 </h1>

     <?php

     $numero=0;
     $i=0;

     while($numero >1000)
     {
     $i++;

     $numero+=$i;

     if($numero>1000)
     {
     $numero-=$i;
     $i--;
     break;


     }

     }

     echo "<h4> Numeros sumados:</h4>"

     for($j=1 ; $j<=$i  ; $i++)
     {
     if($j==$i)
	echo "$j";
    else
	echo "$j +";


     } 	
     echo "<h2>La suma dio: $numero</h2>";
     echo "<h3>Se sumaron $i numeros</h3>";






      ?>


</body>

</html>