<?php
require("./cabecera.php");
?>
<div class="w-100 p-3" style="background-color: #2b0000;"> <!-- o el color que quieras -->


        <div class="container text-center">
            <div class="row">
             
                <?php
           
                 $jugadores = array(

                    "jugador1" => array(
                        "nombre" => "BÁRBARO",
                        "des" => " El Bárbaro es un guerrero imponente y muy bien armado, un nómada de una tribu que alguna vez vigiló el sagrado Monte Arreat.",
                        "url" => './img/barbarro.png',
                        "habilidades" => array("Lucha salvajemente con armas melé.", "Emplea fuerza bruta para blandir enormes armas a dos manos, un arma en cada mano o un arma y un escudo.", "Acumula Furia al causar o recibir daño y luego la descarga a través de ataques devastadores."),
                         "vedio" => './vedios/vedio.webm',
                          "hab" => array('./img/hab1.png' , './img/hab2.png' , './img/hab3.png' ,'./img/hab4.png')
                    ),

                    "jugador2" => array(
                        "nombre" => "GUERRERO DIVINO",
                        "des" => "El Guerrero Divino es un campeón de la justicia, ataviado en armadura metálica y poder fulgurante. Cuando el mal emerge de su cubil para corromper y destruir a la humanidad, el Guerrero Divino carga.",
                        "url" => './img/divino.png',
                        "habilidades" => array("Emite su veredicto con brutales manguales e imponentes escudos. Éste último tanto arma como protección.", "Obliga a las huestes del mal a luchar cuerpo a cuerpo o a distancia media con una miríada de habilidades. Asimismo, pronuncia leyes para incrementar la capacidad de combate de todos aquellos que se oponen a la oscuridad.", "Hierve de Ira, un fervor que aumenta de manera constante, para descargar ataques aún más devastadores."),
                        "vedio" => './vedios/vedio.webm',
                          "hab" => array('./img/hab1.png' , './img/hab2.png' , './img/hab3.png' ,'./img/hab4.png')
                    )
                );

                 foreach ($jugadores as $clave => $valor){
                    echo '  <div class="row mb-5 align-items-center">
                     <div class="col-md-4 text-center">
                        <img src="' . $valor["url"] . '" class="card-img-top">

                   </div>
               
                   <div class="col-md-8">
                      <h3 class="card-title">' . $valor["nombre"] . '</h3>
                      <br>
                    
                      <p class="card-text">' . $valor["des"] . '</p>
                   
                      <ul class="barbaro-list"> 
                    ';

                    foreach ($valor["habilidades"] as $hab) {
                        echo '<li>' . $hab . '</li>';
                        echo"<br>";
                    }
                    echo '  
                              </ul>
                             <div class="row mt-4">
                              <div class="col-md-6 text-center">
                              <video width="100%" height="auto" controls>
                                    <source src="' . $valor["vedio"] . '" type="video/mp4">
                                </video>
                                <p>Video de generalidades de las clases</p>
                              </div>
                               <div class="col-md-6 text-center">';
                       $cont = 0;
                    foreach ($valor["hab"] as $habb) {
                        $cont ++ ;
                        if($cont == 2){
                        echo '<img src="' . $habb . '" class="imgHab m-2" width="80" height="80">';
                        echo "<br>";
                        }else{
                             echo '<img src="' . $habb . '" class="imgHab m-2" width="80" height="80">';
                        }
                    }
                           echo ' <p>Habilidades</p>
                           </div>
                         </div>       
                     </div>
                </div>
                            ';
            
                    
                    
                }

                ?>

            </div>
      

    </div>
</div>
</div>


<?php
require("./pie.php");
?>