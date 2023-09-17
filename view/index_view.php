<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/estilo.css">
    <title>VetPet</title>
</head>
<body>
     <header>
  
         <nav>
            <ul class="sidebar"> <!-- Menú responsive-->
                <li onclick="hideSidebar()"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Productos</a></li>
                <li><a href="#">Acerca</a></li>
            </ul>
            <!-- Menú oficial-->
            <ul>
                <li ><a href="#">VetPet</a></li>
                <li class="hideOnMobile"><a href="#">Inicio</a></li>
                <li class="hideOnMobile"><a href="#">Servicios</a></li>
                <li class="hideOnMobile"><a href="#">Productos</a></li>
                <li class="hideOnMobile"><a href="#">Acerca</a></li>
                
                <li class="menu-button" onclick=showSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
            </ul>
         </nav>
     </header>
     
     <script src="../js/menu.js"></script>
</body>
</html>