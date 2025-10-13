<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mi Juego</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <style>
    body{
         background-color:  rgb(33, 5, 5);
         color: white;
           font-family: "Georgia", serif;
    }
        .barbaro-list {
            list-style: none;
            padding-left: 0;
            margin-top: 20px;
        }
        .barbaro-list li {
            position: relative;
            padding-left: 25px;  
            margin-bottom: 12px;
            text-align: left;    
        }
        .barbaro-list li::before {
            content: "✦";
            position: absolute;
            left: 0;
            top: 0;
            color: #4a483fff; 
            font-size: 20px;
        }
        .imgHab {
  border: 2px solid #444;
  background-color: #1a1a1a;
        }

   </style>
</head>

<body>

<div class="container-fluid">
    <div class="row min-vh-100"> <!-- Toda la altura de la pantalla -->
      
      <!--  Barra lateral -->
      <nav class="col-12 col-md-3 col-lg-2 text-white d-flex flex-column p-3" style="background-color: #2b0000;">
        <h4 class="text-center mb-4">ASPECTOS DEL JUEGO</h4>
        <ul class="nav flex-column">
          <li class="nav-item"><a href="#" class="nav-link text-white">Fundamentos</a></li>
          <li class="nav-item"><a href="#" class="nav-link text-white">Combate y Habilidades</a></li>
          <li class="nav-item"><a href="#" class="nav-link text-white">El Mundo</a></li>
          <li class="nav-item"><a href="#" class="nav-link text-white">Elementos Interactivos</a></li>
          <li class="nav-item"><a href="#" class="nav-link text-white">Seguidore</a></li>
          <li class="nav-item"><a href="#" class="nav-link text-white">Dificultad del Juego</a></li>
          <li class="nav-item"><a href="#" class="nav-link text-white">Juego con Amigod</a></li>
          <li class="nav-item"><a href="#" class="nav-link text-white">Jugador contra Jugador</a></li>
          <li class="nav-item"><a href="#" class="nav-link text-white">Temporadas</a></li>
          <li class="nav-item"><a href="#" class="nav-link text-white">Modos de partida</a></li>

        </ul>
         
         <h4 class="text-center mb-4">OBJETOS</h4>
        <ul class="nav flex-column">
          <li class="nav-item"><a href="#" class="nav-link text-white">Objetos y Armamento</a></li>
          <li class="nav-item"><a href="#" class="nav-link text-white">Inventario</a></li>
          <li class="nav-item"><a href="#" class="nav-link text-white"> Oficios y Artesanos</a></li>
          <li class="nav-item"><a href="#" class="nav-link text-white">Cubo de Kanai</a></li>

        </ul>
      </nav>

      <!-- Contenido principal -->
      <main class="col-md-9 col-lg-10 p-4">
    <div class="container">