<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/styles/login.css">
    <link href="/dist/output.css" rel="stylesheet">
    <title>Login Page</title>
</head>
<body class="w-screen h-screen">
    <main class="w-full h-full flex flex-col justify-start items-center bg-[#fff5d2]">
        <section class="w-[20%] h-[25%] flex justify-center items-center">
            <img src="/src/images/logo.jpg" alt="Logo" class="object-contain">
        </section>
        <section class="w-[25%] h-[30%] border bg-white flex flex-col justify-around items-center" >
            <h1 class="text-[#a2a3a6] text-[.8rem]">Bienvenido Ingresa con tu cuenta</h1>
            <form action="/index.php" method="post" class="w-full flex flex-col justify-around items-center">
                <div class="flex justify-between mb-7 div">
                    <label for="correo" hidden></label>
                    <input type="text" name="correo" id="correo" class="border-none" required>
                    <div class="img"><img src="/src/images/email.svg" alt=""></div>                
                </div>
                <div class="flex justify-between mb-4  div">
                    <label for="contrasena" hidden></label>
                    <input type="password" name="contrasena" id="contrasena" class="border-none" required>
                    <div class="img"><img src="/src/images/lock.svg" alt=""></div>
                </div>
                <div class="flex justify-end w-[80%]">
                    <button type="submit" name="ingresar" class="bg-blue-500 text-white px-4 py-2 rounded-md ">Ingresar</button>
                </div>
            </form>
        </section>
    </main>
</body>
</html>