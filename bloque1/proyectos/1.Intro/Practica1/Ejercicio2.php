<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <style>
        img{
            width: 200px;
            height: 250px;
        }
        body{
            background-color: pink;
        }
        h3{
            color: blue;
        }
        td{
            border : 2px solid black;
            text-align: center;
            padding: 20px;
             background-color: white;

        }
        p{
            color: red;
        }
        th{
            text-align : start;
            color : blue;
        }
        table{
        
          border-spacing: 20px 0px;
        }
        .red{
            color: red;
        }

    </style>
</head>
<body>
   <?php
   echo "<h1> Librería Jaroso   </h1>";
   $librosHistoricos = array(
    array("ISBN" => "9788413842321", "titulo" => "Sapiens De animales a dioses", "descripcion" => "Yuval Noah Harari explora cómo la humanidad evolucionó desde la prehistoria hasta la era moderna.", "categoria" => "historia", "editorial" => "Debate", "foto" => "imgs/9788413842321.png", "precio" => 22.90),
    array("ISBN" => "9788418363332", "titulo" => "Una historia del mundo", "descripcion" => "Andrew Marr resume la historia mundial desde los orígenes hasta la actualidad.", "categoria" => "historia", "editorial" => "Planeta", "foto" => "imgs/9788418363332.png", "precio" => 19.95),
    array("ISBN" => "9788408172173", "titulo" => "La historia del arte", "descripcion" => "E.H. Gombrich ofrece una introducción clásica a la historia del arte universal.", "categoria" => "historia", "editorial" => "Debolsillo", "foto" => "imgs/9788408172173.png", "precio" => 17.90),
    array("ISBN" => "9788413145810", "titulo" => "Los romanos", "descripcion" => "Mary Beard revisa la historia y legado del Imperio Romano desde una mirada contemporánea.", "categoria" => "historia", "editorial" => "Crítica", "foto" => "imgs/9788413145810.png", "precio" => 21.50),
    array("ISBN" => "9788413841477", "titulo" => "La Segunda Guerra Mundial", "descripcion" => "Antony Beevor relata con rigor y detalle el mayor conflicto bélico del siglo XX.", "categoria" => "historia", "editorial" => "Crítica", "foto" => "imgs/9788413841477.png", "precio" => 24.95)

  
   );
   $librosNegra = array(

    array("ISBN" => "9788420469286", "titulo" => "La chica del tren", "descripcion" => "Paula Hawkins teje un thriller psicológico sobre la obsesión y la percepción distorsionada.", "categoria" => "negra", "editorial" => "Planeta", "foto" => "imgs/9788420469286.png", "precio" => 10.95),
    array("ISBN" => "9788497930049", "titulo" => "Los hombres que no amaban a las mujeres", "descripcion" => "Primera entrega de la trilogía Millennium, un thriller de misterio e investigación periodística.", "categoria" => "negra", "editorial" => "Destino", "foto" => "imgs/9788497930049.png", "precio" => 12.90),
    array("ISBN" => "9788466343079", "titulo" => "El silencio de los corderos", "descripcion" => "Thomas Harris presenta al icónico Hannibal Lecter en este clásico del suspense.", "categoria" => "negra", "editorial" => "Debolsillo", "foto" => "imgs/9788466343079.png", "precio" => 11.95),
    array("ISBN" => "9788490623870", "titulo" => "El guardián invisible", "descripcion" => "Primera novela de la trilogía del Baztán, mezcla de misterio, mitología y crímenes en Navarra.", "categoria" => "negra", "editorial" => "Destino", "foto" => "imgs/9788490623870.png", "precio" => 14.95),
    array("ISBN" => "9788423350291", "titulo" => "Asesinato en el Orient Express", "descripcion" => "Hércules Poirot investiga un asesinato en el lujoso tren de Estambul a París.", "categoria" => "negra", "editorial" => "Espasa", "foto" => "imgs/9788423350291.png", "precio" => 9.95)

    );
     
         $librosCiencias = array(
    array("ISBN"=>"9788408223059","titulo"=>"Breves respuestas a las grandes preguntas","descripcion"=>"Reflexiones sobre el futuro de la humanidad, el universo y la ciencia.","categoria"=>"ciencias","editorial"=>"Crítica","foto"=>"imgs/9788408223059.png","precio"=>18.90),
    array("ISBN"=>"9788420674209","titulo"=>"El gen egoísta","descripcion"=>"Introducción a la biología evolutiva desde el punto de vista del gen.","categoria"=>"ciencias","editorial"=>"Alianza Editorial","foto"=>"imgs/9788420674209.png","precio"=>16.95),
    array("ISBN"=>"9788432312285","titulo"=>"Cosmos","descripcion"=>"Viaje por el universo, la historia de la ciencia y la humanidad.","categoria"=>"ciencias","editorial"=>"Planeta","foto"=>"imgs/9788432312285.png","precio"=>24.90),
    array("ISBN"=>"9788408227811","titulo"=>"Una breve historia de casi todo","descripcion"=>"Exploración divertida y accesible de los grandes descubrimientos científicos.","categoria"=>"ciencias","editorial"=>"RBA","foto"=>"imgs/9788408227811.png","precio"=>21.50),
    array("ISBN"=>"9788449335603","titulo"=>"El orden del tiempo","descripcion"=>"Reflexión filosófica y física sobre la naturaleza del tiempo.","categoria"=>"ciencias","editorial"=>"Paidós","foto"=>"imgs/9788449335603.png","precio"=>17.95),
         );
   
     $librosCocina = array(
    array("ISBN"=>"9788491048824","titulo"=>"1080 recetas de cocina","descripcion"=>"Clásico de la cocina española con recetas tradicionales.","categoria"=>"cocina","editorial"=>"Alianza","foto"=>"imgs/9788491048824.png","precio"=>36.00),
    array("ISBN"=>"9788417752824","titulo"=>"La cocina de tu vida","descripcion"=>"Recetas sencillas y equilibradas para el día a día.","categoria"=>"cocina","editorial"=>"Planeta","foto"=>"imgs/9788417752824.png","precio"=>22.90),
    array("ISBN"=>"9788408205536","titulo"=>"Cocina en casa con los hermanos Torres","descripcion"=>"Técnicas y recetas creativas de los chefs Torres.","categoria"=>"cocina","editorial"=>"Planeta","foto"=>"imgs/9788408205536.png","precio"=>24.95),
    array("ISBN"=>"9788425345463","titulo"=>"Cocina sana para disfrutar","descripcion"=>"Recetario saludable con consejos de nutrición.","categoria"=>"cocina","editorial"=>"Grijalbo","foto"=>"imgs/9788425345463.png","precio"=>19.90),
    array("ISBN"=>"9788427048966","titulo"=>"Las recetas de la felicidad","descripcion"=>"Recetas creativas con un toque divertido y visual.","categoria"=>"cocina","editorial"=>"Espasa","foto"=>"imgs/9788427048966.png","precio"=>18.50),
     );
    
     $librosDeporte = array(
    array("ISBN"=>"9788408237056","titulo"=>"Nadal: Mi historia","descripcion"=>"Autobiografía del tenista español Rafael Nadal.","categoria"=>"deporte","editorial"=>"Planeta","foto"=>"imgs/9788408237056.png","precio"=>19.90),
    array("ISBN"=>"9788466358394","titulo"=>"Open: Memorias","descripcion"=>"Historia personal y profesional del tenista André Agassi.","categoria"=>"deporte","editorial"=>"Debolsillo","foto"=>"imgs/9788466358394.png","precio"=>13.95),
    array("ISBN"=>"9788490068328","titulo"=>"Relentless","descripcion"=>"Mentalidad y entrenamiento de atletas de élite.","categoria"=>"deporte","editorial"=>"Urano","foto"=>"imgs/9788490068328.png","precio"=>17.90),
    array("ISBN"=>"9788413842314","titulo"=>"La fórmula 1 moderna","descripcion"=>"Guía sobre la tecnología y estrategia en la Fórmula 1.","categoria"=>"deporte","editorial"=>"Libros Cúpula","foto"=>"imgs/9788413842314.png","precio"=>26.50),
    array("ISBN"=>"9788416676121","titulo"=>"Mamba Mentality","descripcion"=>"Filosofía y visión del legendario jugador de la NBA Kobe Bryant.","categoria"=>"deporte","editorial"=>"Plaza & Janés","foto"=>"imgs/9788416676121.png","precio"=>29.95),
     );
   
     $librosNovela = array(
    array("ISBN"=>"9788420471839","titulo"=>"Cien años de soledad","descripcion"=>"Saga familiar de los Buendía en el mítico pueblo de Macondo.","categoria"=>"novela","editorial"=>"Alfaguara","foto"=>"imgs/9788420471839.png","precio"=>18.90),
    array("ISBN"=>"9788497592208","titulo"=>"La sombra del viento","descripcion"=>"Misterio literario ambientado en la Barcelona de posguerra.","categoria"=>"novela","editorial"=>"Planeta","foto"=>"imgs/9788497592208.png","precio"=>21.00),
    array("ISBN"=>"9788416261138","titulo"=>"Patria","descripcion"=>"Dos familias vascas enfrentadas por el terrorismo de ETA.","categoria"=>"novela","editorial"=>"Tusquets","foto"=>"imgs/9788416261138.png","precio"=>22.90),
    array("ISBN"=>"9788466342782","titulo"=>"Los pilares de la tierra","descripcion"=>"Intrigas y construcción de una catedral en la Edad Media.","categoria"=>"novela","editorial"=>"Debolsillo","foto"=>"imgs/9788466342782.png","precio"=>16.95),
    array("ISBN"=>"9788498387544","titulo"=>"El niño con el pijama de rayas","descripcion"=>"Amistad inocente en medio del Holocausto.","categoria"=>"novela","editorial"=>"Salamandra","foto"=>"imgs/9788498387544.png","precio"=>12.50),
     );
    
     $librosScifi = array(
    array("ISBN"=>"9788416220065","titulo"=>"Dune","descripcion"=>"Clásico de ciencia ficción sobre política, religión y poder en el planeta Arrakis.","categoria"=>"scifi","editorial"=>"Debolsillo","foto"=>"imgs/9788416220065.png","precio"=>19.95),
    array("ISBN"=>"9788408177222","titulo"=>"Fundación","descripcion"=>"Saga que relata el auge y caída de un vasto imperio galáctico.","categoria"=>"scifi","editorial"=>"Debolsillo","foto"=>"imgs/9788408177222.png","precio"=>17.90),
    array("ISBN"=>"9788499890940","titulo"=>"Neuromante","descripcion"=>"Novela ciberpunk que marcó un antes y un después en la ciencia ficción.","categoria"=>"scifi","editorial"=>"Nova","foto"=>"imgs/9788499890940.png","precio"=>15.95),
    array("ISBN"=>"9788497591966","titulo"=>"El juego de Ender","descripcion"=>"Novela de estrategia y conflicto intergaláctico centrada en Ender Wiggin.","categoria"=>"scifi","editorial"=>"Ediciones B","foto"=>"imgs/9788497591966.png","precio"=>14.95),
    array("ISBN"=>"9788499189035","titulo"=>"La guía del autoestopista galáctico","descripcion"=>"Comedia de ciencia ficción con aventuras absurdas en el espacio.","categoria"=>"scifi","editorial"=>"Booket","foto"=>"imgs/9788499189035.png","precio"=>12.90),
     );
   
     $librosRomantica = array(
    array("ISBN"=>"9788499088627","titulo"=>"Bajo la misma estrella","descripcion"=>"Historia de amor entre dos jóvenes que enfrentan una enfermedad terminal.","categoria"=>"romántica","editorial"=>"Nube de Tinta","foto"=>"imgs/9788499088627.png","precio"=>13.95),
    array("ISBN"=>"9788498387575","titulo"=>"El cuaderno de Noah","descripcion"=>"Novela romántica que narra un amor imposible a lo largo de los años.","categoria"=>"romántica","editorial"=>"Salamandra","foto"=>"imgs/9788498387575.png","precio"=>12.50),
    array("ISBN"=>"9788408163409","titulo"=>"Orgullo y prejuicio","descripcion"=>"Clásico del romance entre Elizabeth Bennet y el Sr. Darcy.","categoria"=>"romántica","editorial"=>"Debolsillo","foto"=>"imgs/9788408163409.png","precio"=>14.90),
    array("ISBN"=>"9788408243871","titulo"=>"Cumbres Borrascosas","descripcion"=>"Historia de amor y venganza en los páramos ingleses.","categoria"=>"romántica","editorial"=>"Alianza","foto"=>"imgs/9788408243871.png","precio"=>16.50),
    array("ISBN"=>"9788415678901","titulo"=>"El amor en los tiempos del cólera","descripcion"=>"El amor eterno de Florentino Ariza y Fermina Daza a lo largo de décadas.","categoria"=>"romántica","editorial"=>"Debate","foto"=>"imgs/9788415678901.png","precio"=>18.90)
     );

      function mostrarCategoria($titulo, $libros){
            echo '<tr>
                  <th><h2>'. $titulo .'</h2><th><br>
            </tr>
             <tr>';
        for($i = 0 ; $i < 4 ; $i++){
            echo '<td>
             <img src="' . $libros[$i]["foto"] . '" alt=" "><br>
             '.$libros[$i]["descripcion"].'<br>
             <strong>' . $libros[$i]["titulo"] . '</strong> <br>
             <h4 class="red" >'. $libros[$i]["precio"] .'€</h4>
             </td> ';
         }
            echo "</tr>";
         }

         echo "<table ";
               mostrarCategoria("Novela Histórica", $librosHistoricos);
               mostrarCategoria("Novela Negra", $librosNegra);
               mostrarCategoria("Novela Ciencias", $librosCiencias);
               mostrarCategoria("Novela Cocina", $librosCocina);
               mostrarCategoria("Novela Deporte", $librosDeporte);
               mostrarCategoria("Novela Novela", $librosNovela);
               mostrarCategoria("Novela Romantica", $librosRomantica);
               mostrarCategoria("Novela Scifi", $librosScifi);
         echo "</table>";  
   ?>
</body>
</html>