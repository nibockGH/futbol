<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encontrar Partido</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> <!-- Tailwind CSS CDN -->
</head>
<body class="flex flex-col min-h-screen bg-zinc-300">
    <header class="bg-black text-white px-4 lg:px-6 h-14 flex items-center">
        <a class="flex items-center justify-center" href="#">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="text-white size-6"
            >
                <path d="m8 3 4 8 5-5 5 15H2L8 3z"></path>
            </svg>
            <span class="sr-only">Encontrar Partido</span>
        </a>
        <nav class="ml-auto pr-10 mr-10 flex gap-4 sm:gap-6">
            <div class="space-x-3.5">
                <a href="main.php" class="text-sm font-medium hover:underline underline-offset-4">Inicio</a>
                <a href="#" class="text-sm font-medium hover:underline underline-offset-4">Partidos</a>
                <a href="crearequipo.php" class="text-sm font-medium hover:underline underline-offset-4">Equipos</a>
                <a href="#" class="text-sm font-medium hover:underline underline-offset-4">Contacto</a>
            </div>
            <!-- Dropdown "Mi cuenta" -->
            <div class="relative">
                <a href="#" class="text-sm font-medium hover:underline underline-offset-4">Mi cuenta</a>
                <div class="absolute hidden flex-col bg-gray-400 left-0 mt-1 w-40 shadow-lg group-hover:flex">
                    <a href="#" class="px-4 py-2 text-sm text-black hover:bg-gray-300">Configuración</a>
                    <a href="logout.php" class="px-4 py-2 text-sm text-black hover:bg-gray-300">Cerrar sesión</a>
                </div>
            </div>
        </nav>
    </header>

    <main class="flex-1">
        <section class="w-full pt-12 md:pt-24 lg:pt-32 border-y">
            <div class="px-4 md:px-6 space-y-10 xl:space-y-16">
                <div class="grid max-w-[1300px] mx-auto gap-4 px-4 sm:px-6 md:px-10 md:grid-cols-1 md:gap-16">
                    <div class="text-center">
                        <p class="text-lg font-medium text-primary">¡Bienvenido a Encontrar Partido!</p>
                        <h1 class="lg:leading-tighter text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl xl:text-[3.4rem] 2xl:text-[3.75rem]">
                            Encontrar partido
                        </h1>
                        <div class="mt-6">
                            <a
                                href="crearequipo.php"
                                id="boton"
                                class="inline-flex h-16 w-56 mt-8 items-center justify-center rounded-lg bg-black text-white text-sm font-medium shadow transition-colors hover:bg-gray-800 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50"
                            >
                                Entrar!
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
