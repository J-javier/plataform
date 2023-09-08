<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <link rel="stylesheet" href="/src/styles/styles_admin/edit_maestro_style.css">
   
    <title>Student Clases</title>
</head>
<body class="h-screen w-screen">
    <main class="h-full w-full flex flex-row">
        <div class="w-[20%] h-[100%] bg-[#343b40] text-[#959ca2] flex-col">
            <header class="flex items-center h-[8%] pl-3">
                <div class="cont_img"><img src="/src/images/short_logo.JPG" alt="logo" class="imagen"></div>
                <h1 class="pl-2 text-[1.3rem]">Universidad</h1>
            </header>
            <section class="h-[13%] flex flex-col justify-center  border-gray-500 border-t border-b">
                <a href="/src/views/alumno_views/dashboard_alum.php "><h1 class="mb-3 text-[1.3rem] pl-3 ">Alumno</h1></a>
                <h2 class="text-[1.1rem] pl-3">Student Name</h2>
            </section>
        
            <section class="flex flex-col items-center h-[20$] justify-evenly">
                <h1 class=" my-5">MENU ADMINISTRACION</h1>
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
                    <a href="/src/views/admin_views/dashboard_admin.php"><div><img src="/src/images/menu.svg" alt="menu"></div></a>
                    <h1>Home</h1>
                </div>
                 <div class="flex items-center">
                    <div class="dropdown ">
                        <button id="dropdownBtn" class="dropdown-button text-[#cac8c6]">Student name
                             <span class="arrow text-[#cac8c6]">&#9660;</span>
                        </button>
                        <div id="dropdownContent" class="dropdown-content">
                            <a href="#">Perfil</a>
                            <a href="#">Log Out</a>
                        </div>
                    </div>
            </header>
            <div class="w-[98%] h-[90%]">
                <section class="w-full h-[9%] flex justify-between items-center">
                    <h1 class=" text-[1.2rem]" >Esquema de Clases</h1>
                    <h2 class=" text-[#cac8c6]"><span class="text-[#97b4e3]">Home</span> / Clases</h2>
                </section>
                <section class=" h-[40%] w-full">
                    <div class="w-full h-[15%] border bg-[#ffffff] text-[#868684] flex text-[.8rem] justify-between items-center">
                        <h1 class="text-bold pl-3">Tus Materias Inscritas</h1>
                    </div>
                    <div class="border h-full w-full flex flex-row">
                        <table class="w-[60%]">
                            <thead class="border border-slate-300">
                                    <th>#</th>
                                    <th class="border border-slate-300">Clase</th>
                                    <th class="border border-slate-300">Acciones</th>
                            </thead>
                            <tbody >
                                <tr class="border border-slate-300 bg-[#f2f2f2] text-[.7rem] h-[5%]">
                                    <td> 1</td>
                                    <td class="border border-slate-300">Matematicas</td>
                                    <td class="border border-slate-300">
                                        <div class="w-full flex justify-center gap-2">
                                            <img src="/src/images/journal-x.svg" alt="trash">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- Second table with the courses -->
                        <div class="p-4">
                            <h2 class="text-lg font-bold">Opciones:</h2>
                            <form action="#" method="post">
                                <fieldset class="border rounded p-4">
                                    <legend class="text-gray-700 font-semibold">Selecciona las clases usa la tecla ctrl:</legend>
                                    <div class="mb-2 ">
                                        <input type="radio" name="opcion" id="opcion1" value="opcion1" class="sr-only">
                                        <label for="opcion1" class="cursor-pointer px-4 py-2 border border-gray-300 rounded hover:bg-blue-300 hover:text-white">Ciencias Naturales </label>
                                    </div>
                                    <div class="mb-2">
                                        <input type="radio" name="opcion" id="opcion2" value="opcion2" class="sr-only">
                                        <label for="opcion2" class="cursor-pointer px-4 py-2 border border-gray-300 rounded hover:bg-blue-300 hover:text-white">ProgramacionII</label>
                                    </div>
                                    <div class="mb-2">
                                        <input type="radio" name="opcion" id="opcion3" value="opcion3" class="sr-only">
                                        <label for="opcion3" class="cursor-pointer px-4 py-2 border border-gray-300 rounded hover:bg-blue-300 hover:text-white">Algoritmos</label>
                                    </div>
                                </fieldset>
                                <div class="w-full flex justify-end">
                                    <button class="mt-4 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700 cursor-pointer">Inscribir</button> 
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </main>





</body>
</html>