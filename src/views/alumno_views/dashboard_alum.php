<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <link rel="stylesheet" href="/src/styles/dashboard.css">
    <script src="/src/script/script.js" defer></script>
    <title>Student Dashboard</title>
</head>
<body class="h-screen w-screen">
    <main class="h-full w-full flex flex-row">
        <div class="w-[20%] h-[100%] bg-[#343b40] text-[#959ca2] flex-col">
            <header class="flex items-center h-[8%] pl-3">
                <div class="cont_img"><img src="/src/images/short_logo.JPG" alt="logo" class="imagen""></div>
                <h1 class="pl-2 text-[1.3rem]">Universidad</h1>
            </header>
            <section class="h-[13%] flex flex-col justify-center  border-gray-500 border-t border-b">
                <h1 class="mb-3 text-[1.3rem] pl-3 ">Alumno</h1>
                <h2 class="text-[1.1rem] pl-3">Student name</h2>
            </section>
        
            <section class="flex flex-col items-center h-[20$] justify-evenly">
                <h1 class=" my-5">MENU ALUMNO</h1>
                <div class="flex flex-col w-full pl-3 gap-3">
                    <a href="#">
                        <div class="flex gap-3 ">
                            <div class="contenedor-imagenes ">
                                <img class="imagenes" src="/src/images/task.svg" alt="images">
                            </div>
                            <h3 class="text-[1.1rem]">Ver Calificaciones</h3>
                        </div>
                    </a>
                    <a href="/src/views/alumno_views/alumno_clases.php">
                        <div class="flex gap-3">
                            <div class="contenedor-imagenes ">
                                <img class="imagenes" src="/src/images/empty_dashboard.svg" alt="images">
                            </div>
                            <h3 class="text-[1.1rem]">Administra tus Clases</h3>
                        </div>
                    </a>
                </div>
            </section>
        </div>

        <section class="w-[80%] h-[100%] bg-[#f5f7fb] flex flex-col items-center">
            <header class="w-[98%] h-[8%] border bg-[#ffffff] flex justify-between text-[#cac8c6] shadow-md">
                 <div class="flex items-center">
                    <div><img src="/src/images/menu.svg" alt="menu"></div>
                    <h1>Home</h1>
                </div>
                 <div class="flex items-center pruebaaa">
                    <div class="dropdown ">
                        <button id="dropdownBtn" class="dropdown-button text-[#cac8c6]">student Name
                             <span class="arrow text-[#cac8c6]">&#9660;</span>
                        </button>
                        <div id="dropdownContent" class="dropdown-content">
                            <a href="#">Perfil</a>
                            <a href="#">Log Out</a>
                        </div>
                    </div>
            </header>
            <div class="w-[98%] h-[90%]">
                <section class="w-full h-[11%] flex justify-between items-center">
                    <h1 class=" text-[1.2rem]" >Dashboard</h1>
                    <h2 class=" text-[#cac8c6]"><span class="text-[#97b4e3]">Home</span> / Dashboard</h2>
                </section>
                <section class=" h-[40%] w-full">
                    <div class="w-[50%] h-[20%] border bg-[#ffffff] text-[#868684] flex flex-col shadow-md text-[.8rem] justify-center">
                        <h1 class="text-bold pl-3">Bienvenido</h1>
                        <p class="text-[.6rem] pl-3">Seleciona la accion que quieras realizar en las pestaña del menu de la izquierda</p>
                    </div>
                </section>
            </div>
        </section>
    </main>
</body>
</html>