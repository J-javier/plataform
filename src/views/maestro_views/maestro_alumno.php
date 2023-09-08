<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <link rel="stylesheet" href="/src/styles/styles_admin/edit_maestro_style.css">
    <script src="/src/script/admin_maestro/script.js" defer ></script>
    <title>Admin Dashboard</title>
</head>
<body class="h-screen w-screen">
    <main class="h-full w-full flex flex-row">
        <div class="w-[20%] h-[100%] bg-[#343b40] text-[#959ca2] flex-col">
            <header class="flex items-center h-[8%] pl-3">
                <div class="cont_img"><img src="/src/images/short_logo.JPG" alt="logo" class="imagen"></div>
                <h1 class="pl-2 text-[1.3rem]">Universidad</h1>
            </header>
            <section class="h-[13%] flex flex-col justify-center  border-gray-500 border-t border-b">
                <a href="/src/views/maestro_views/dashboard_maestro.php"><h1 class="mb-3 text-[1.3rem] pl-3 ">Maestro</h1></a>
                <h2 class="text-[1.1rem] pl-3">Maestro_Maestro</h2>
            </section>
        
            <section class="flex flex-col items-center h-[20$] justify-evenly">
                <h1 class=" my-5">MENU ADMINISTRACION</h1>
                <div class="flex flex-col w-full pl-3 gap-3">
                    <a href="/src/views/maestro_views/maestro_alumno.php">
                        <div class="flex gap-3 ">
                            <div class="contenedor-imagenes ">
                                <img class="imagenes" src="/src/images/school.svg" alt="images">
                            </div>
                            <h3 class="text-[1.1rem]">Alumnos</h3>
                        </div>
                    </a>
                </div>
            </section>
        </div>

        <section class="w-[80%] h-[100%] bg-[#f5f7fb] flex flex-col items-center">
            <header class="w-[98%] h-[8%] border bg-[#ffffff] flex justify-between text-[#cac8c6] shadow-md">
                 <div class="flex items-center">
                    <a href="/src/views/maestro_views/dashboard_maestro.php"><div><img src="/src/images/menu.svg" alt="menu"></div></a>
                    <h1>Home</h1>
                </div>
                 <div class="flex items-center">
                    <h1>Maestro</h1>
                    <div><img src="/src/images/expand_more.svg" alt="expand"></div>
                 </div>
            </header>
            <div class="w-[98%] h-[90%]">
                <section class="w-full h-[9%] flex justify-between items-center">
                    <h1 class=" text-[1.2rem]" >Alumnos clase de:</h1>
                    <h2 class=" text-[#cac8c6]"><span class="text-[#97b4e3]">Home</span> / Maestro</h2>
                </section>
                <section class=" h-[40%] w-full">
                    <div class="w-full h-[15%] border bg-[#ffffff] text-[#868684] flex text-[.8rem] justify-between items-center">
                        <h1 class="text-bold pl-3">Alumnos clase de:</h1>
                    </div>
                    <div class="border h-full w-full ">
                        <table class="w-full">
                            <thead class="border border-slate-300">
                                    <th>#</th>
                                    <th>Nombre de Alumno</th>
                                    <th class="border border-slate-300">Calificacion</th>
                                    <th>Mensaje</th>
                                    <th class="border border-slate-300">Acciones</th>
                            </thead>
                            <tbody>
                                <tr class="border border-slate-300 bg-[#f2f2f2] text-[.7rem]">
                                    <td> 1</td>
                                    <td class="border border-slate-300">Pedro escamoso</td>
                                    <td class="border border-slate-300 pl-2 " >80</td>
                                    <td><span class="border-none text-[white] bg-[#239fad]  px-1 py-1 rounded-lg">No hay mensaje</span></td>
                                    <td class="border border-slate-300">
                                        <div class="w-full flex justify-center gap-2">
                                            <img src="/src/images/journal-plus.svg" alt="img" id="showModalButton">
                                            <img src="/src/images/send-plus.svg" alt="trash">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </section>
    </main>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <span id="closeModal" class="close">&times;</span>
            <h2 class="text-[2rem]">Editar Alumno</h2>
            <form action="/tu_script_de_php.php" method="POST">
                <div class="form-group">
                    <label class="font-bold " for="dni2">DNI</label>
                    <input type="text" name="dni2" id="dni2" class="input-field">
                </div>
                <div class="form-group">
                    <label class="font-bold " for="correo2">Correo Electronico</label>
                    <input type="email" name="correo2" id="correo2" class="input-field" readonly>
                </div>
                <div class="form-group">
                    <label class="font-bold " for="nombre2">Nombre(s)</label>
                    <input type="text" name="nombre2" id="nombre2" class="input-field">
                </div>
                <div class="form-group">
                    <label class="font-bold " for="apellido2">Apellido(s)</label>
                    <input type="text" name="apellido2" id="apellido2" class="input-field">
                </div>
                <div class="form-group">
                    <label class="font-bold " for="direccion2">Direccion</label>
                    <input type="text" name="direccion2" id="direccion2" class="input-field">
                </div>
                <div class="form-group">
                    <label class="font-bold " for="fecha2">Fecha de nacimiento</label>
                    <input type="text" name="fecha2" id="fecha2" class="input-field">
                </div>
                <div class="w-full flex justify-end gap-2">
                    <button type="button" id="closeModalButton" class="btn2">Close</button>
                    <button type="submit" class="btn">Guardar Cambios</button>
                </div>
            </form>
        </div>
    </div>


    <!-- Modal para crear a un Alumno -->

    <div id="myModal2" class="modal">
        <div class="modal-content">
            <span id="closeModal2" class="close">&times;</span>
            <h2 class="text-[2rem]">Agregar Alumno</h2>
            <form action="/tu_script_de_php.php" method="POST">
                <div class="form-group">
                    <label class="font-bold" for="dni">DNI</label>
                    <input type="email" name="dni" id="dni" class="input-field" readonly>
                </div>
                <div class="form-group">
                    <label class="font-bold " for="correo">Correo Electronico</label>
                    <input type="email" name="correo" id="correo" class="input-field" readonly>
                </div>
                <div class="form-group">
                    <label class="font-bold " for="contrasena">Contraseña</label>
                    <input type="password" name="contrasena" id="contrasena" class="input-field" readonly>
                </div>
                <div class="form-group">
                    <label class="font-bold " for="nombre">Nombre(s)</label>
                    <input type="text" name="nombre" id="nombre" class="input-field">
                </div>
                <div class="form-group">
                    <label class="font-bold " for="apellido">Apellido(s)</label>
                    <input type="text" name="apellido" id="apellido" class="input-field">
                </div>
                <div class="form-group">
                    <label class="font-bold " for="direccion">Direccion</label>
                    <input type="text" name="direccion" id="direccion" class="input-field">
                </div>
                <div class="form-group">
                    <label class="font-bold " for="fecha">Fecha de nacimiento</label>
                    <input type="text" name="fecha" id="fecha" class="input-field">
                </div>
                <div class="w-full flex justify-end gap-2">
                    <button type="button" id="closeModalButton2" class="btn2">Close</button>
                    <button type="submit" class="btn">Guardar Cambios</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>