<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <!<!-- comenzamos el ejercicio 1 -->
        
   <div class="nivel1">
       <h2> Ejercicio Nivel 1</h2>
        <div>
            <h4>Ejercicio 1</h4>
            <p>Funcion resta</p>
                <?php
                function resta ($x, $y) {
                    return $x-$y;
                }
                echo "El resultado de la resta es=". resta(6, 4);
                ?>
        </div>
       <div>
           <h4>Ejercicio 2</h4>
           <p>Lógica para saber si es par o impart</p>
           <?php
           $numero = 44;
          if ($numero%2==0){
                 echo "El $numero es par";
          }
          else{
                 echo "El $numero es impar";
          }
           ?> 
       </div>
       <div>
           <h4>Ejercicio 3</h4>
           <p>Función part o impart</p>
           <?php
           function par_impar($numero){
           if ($numero%2==0){
                 echo "El $numero es par";
          }
          else{
                 echo "El $numero es impar";
          }
           }
           par_impar(44);
           ?>
       </div>
       <div>
           <h4>Ejercicio 4</h4>
           <p>Programación de un bucle</p>
           <?php
           $num1 = 1;
           while ($num1 <=10){
               echo ($num1);
               echo "<br>";
               $num1++;
           }
           ?>
       </div>
    </div>
        
        <!<!-- comenzamo el ejercicio numero 2 -->
        
        <div class="nivel2">
            <h2> Ejercicio Nivel 2</h2>
            <div>
             <h4>Ejercicio 1</h4>   
             <p>Amagatall</p>
             <?php
             function sumados ($numdoble){
                 if ($numdoble<=10) {
                     echo "$numdoble\n"."<br>";
                     sumados ($numdoble + 2);
                 }
             }
             echo sumados (0);
             ?> 
            </div>
            <div>
                <h4>Ejercicio 2</h4>  
                <p></p>
                 <?php
                    function contar ($numprinc, $numfinal){
                        for ($numprinc; $numprinc<=$numfinal; $numprinc+=1){
                            echo $numprinc.'<br>';
                        }
                 }
                 echo contar(20,30);
                 ?>
            </div>   
              <div>
                <h4>Ejercicio 3</h4>  
                <p></p>
                 <?php
                  function parametro ($numprinc, $numfinal=10){
                        for ($numprinc; $numprinc<=$numfinal; $numprinc+=1){
                            echo $numprinc.'<br>';
                        }
                 }
                 echo parametro(0);
                 
                 
                 ?>
                
            </div> 
       </div>
            <!-- comienza el ejercicio 3 -->
            
            <div class="nivel3">
                <h2>Nivell 3</h2>
                <div>
                    <h4>Ejercicio 1</h4>
                <p>Años Olimpicos desde 1960 hasta 2016</p>
              <?php
               $olimpiadas = 1960;
               do {
               echo "Las Olimpiadas se realizaron:".  ($olimpiadas);
               echo "<br>";
               $olimpiadas+=4;
               }
               while ($olimpiadas<=2016);
                ?>             
                </div>
                <div>
                    <h4>Ejercicio 2</h4> 
                    <p>Tienda</p>
                    <?php
                    function total_xocolata($preu_xocolata, $compra_xocolata){
                        return $preu_xocolata * $compra_xocolata;
                    }
                    echo "Total de xocolata es=". total_xocolata(1, 2);
                    echo "<br>";
                    function total_xiclets($preu_xiclets, $compra_xiclets){
                        return $preu_xiclets * $compra_xiclets;
                    }
                    echo "Total de xicles es=". total_xiclets(1, 0.5);
                    echo "<br>";
                    function total_caramels($preu_caramels, $compra_caramels){
                        return $preu_caramels * $compra_caramels;
                    }
                    echo "Total de caramels es=". total_caramels (1, 1.50);
                    echo "<br>";
                    echo "Total de venta=". total_xocolata(1, 2)+ total_xiclets(1, 0.5)+ total_caramels(1, 1.50);
                    ?>                    
                </div>
                <div>
                    <h4>Ejercicio 3</h4>
                    <p>Criba d'Eratóstenes</p>
                    <?php
                    $limite=20;
                    for($i=2;$i<$limite;$i++)
                    {
                    $numeros[$i]=true;
                    }
                    $numeros[2]=true;
                    for ($n=2;$n<$limite;$n++)
                    {                   
                    if ($numeros[$n])
                    {
                    for ($i=$n*$n;$i<$limite;$i+=$n)
                    {
                    $numeros[$i] = false;
                    }
                     }
                    } 
                    echo "Primos: ";
                    for ($n = 2; $n < $limite; $n++)
                    {
                    if ($numeros[$n])
                    {
                    echo $n." ";
                    }
                    }
                    ?>
                </div>
            </div>

     
    </body>
</html>
