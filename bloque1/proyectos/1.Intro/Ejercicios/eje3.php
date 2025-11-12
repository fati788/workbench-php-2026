<?php
//Tenemos el radio de un circulo almacenado en la variable $radio obtenida de
//forma aleatoria, calcular y mostrar por pantalla el volumen de una esfera de ese radio.

 function genererNumeroAleatorio($min , $max){   
    return rand($min,$max);   //genera un numero aleatorio entre el minimo y el maximo
  }
  
  $radio = genererNumeroAleatorio(1,10);
  $volumen = (4/3) * pi() * pow($radio,3);
  echo "<h3> El volumen de una esfera de radio $radio es: $volumen </h3>";




?>