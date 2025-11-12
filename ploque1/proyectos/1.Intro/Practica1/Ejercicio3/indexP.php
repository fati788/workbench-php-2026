<?php
require("./cabecera.php");
?>



<div class="col-md-8 themed-grid-col">
    <div class="flex-shrink-0 p-3 bg-white">

        <div class="container text-center">
            <div class="row">

                <?php
            echo '<div class="offcanvas offcanvas-start" id="sidebar">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title">Menú</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
                <a href="#" class="d-block mb-2">Inicio</a>
                <a href="#" class="d-block mb-2">Servicios</a>
                <a href="#" class="d-block mb-2">Contacto</a>
            </div>
            </div>' ; 


                $jugadores = array(

                    "jugador1" => array(
                        "nombre" => "Barbaro",
                        "des" => "Un bárbaro es un guerrero fuerte y salvaje, experto en combate cuerpo a cuerpo y caracterizado por su fuerza, furia y poder ofensivo.",
                        "url" => './img/barbaro.png',
                        "habilidades" => array("Golpe salto", "Terremoto", "Furia asesina")
                    ),

                    "jugador2" => array(
                        "nombre" => "Mago",
                        "des" => "Un mago es un maestro de la magia y los hechizos, especializado en ataques a distancia y control de energías místicas. Destaca por su inteligencia y poder mágico, aunque suele tener poca resistencia física.",
                        "url" => './img/mago.png',
                        "habilidades" => array("Relámpago", "Bola de fuego", "Lluvia venenosa")
                    )
                );


                /*foreach ($jugadores as $clave => $valor) {
                    echo '<div class="col">';
                    echo "<h4>" . $valor["nombre"];
                    echo " -> " . $valor["nombre"] . "</h4>";
                    echo "<img src='" . $valor["url"] . "' width='200'>";
                    echo "<ul class='list-group'>";
                    foreach ($valor["habilidades"] as $habilidad) {
                        echo "<li class='list-group-item'>" . $habilidad . "</li>";
                    }
                    echo "</ul>";
                    echo '</div>';
                }*/


                 //ESTILO MEJORADO CON BOOTSTRAP ---------------------------------------------
               /* foreach ($jugadores as $clave => $valor) {
                    echo '<div class="col">';

                    echo '<div class="card" style="width: 18rem;">
                            <img src="' . $valor["url"] . '" class="card-img-top">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                    <h5 class="card-title">' . $valor["nombre"] . '</h5>
                                    <p class="card-text">Vida: ' . $valor["vida"] . '</p>
                                    <a href="#" class="btn btn-primary">Detalle</a>
                                    </div>
                                    <div class="col">
                                      <ul class="list-group">
                                    ';

                    foreach ($valor["habilidades"] as $hab) {
                        echo "<li class='list-group-item'>$hab</li>";
                    }
                    echo '  
                                      </ul>
                                    </div>
                                </div>
                            </div>
                            </div>';
                    echo '</div>';
                }*/
                foreach ($jugadores as $clave => $valor){
                    echo '<div class = "row">
                    <div class = "col">
                        <img src="' . $valor["url"] . '" class="card-img-top">

                   </div>
               
                   <div class="col">
                      <h5 class="card-title">' . $valor["nombre"] . '</h5>
                      <p class="card-text">' . $valor["des"] . '</p>
                   </div>
                       </div> 
                    ';
                    
                    
                }

                ?>

            </div>
        </div>

    </div>
</div>
</div>


<?php
require("./pie.php");
?>