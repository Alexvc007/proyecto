<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Dashboard - Taller Pro">
        <title>Dashboard | Taller Pro</title>

        @vite('resources/css/style.css')
    </head>
    <body class="min-h-screen bg-slate-950 text-slate-100">
        <div class="flex min-h-screen">
            <!-- Sidebar -->
            <aside class="w-64 bg-slate-900/90 border-r border-white/6 p-6">
                <div class="flex items-center gap-3">
                    <div class="h-10 w-10 flex items-center justify-center rounded-xl bg-sky-500/10 text-sky-300 font-bold">TP</div>
                    <div>
                        <p class="font-semibold">Taller Pro</p>
                        <p class="text-xs text-slate-400">Administrador</p>
                    </div>
                </div>

                <nav class="mt-8 space-y-2 text-sm">
                    <a href="dashboard" class="flex items-center gap-3 rounded-xl px-3 py-2 bg-slate-800/60 text-white">Dashboard</a>
                    
                </nav>
            </aside>

            <!-- Main -->
            <main class="flex-1 p-8">
                <header class="flex items-center justify-between">
                    <h1 class="text-2xl font-semibold">Dashboard</h1>
                    <div class="flex items-center gap-4">
                        <div class="text-sm text-slate-400">Bienvenido, Administrador</div>
                        <div class="h-8 w-8 rounded-full bg-slate-700/60 flex items-center justify-center">A</div>
                    </div>
                </header>

                <section class="mt-6 grid gap-6 lg:grid-cols-4">
                    <div class="rounded-xl border border-white/6 bg-slate-900/80 p-5">
                        <p class="text-sm text-slate-400">Clientes</p>
                        <p class="mt-3 text-3xl font-bold">128</p>
                        <p class="text-xs text-slate-500 mt-2">Clientes registrados</p>
                    </div>

                </section>

                <section class="mt-6">
                    <div class="rounded-xl border border-white/6 bg-slate-900/80 p-6">
                        <h3 class="text-lg font-semibold">Últimas Órdenes de Servicio</h3>
                        <div class="mt-4 overflow-x-auto">
                            <table class="w-full text-sm text-left text-slate-300">
                                <thead>
                                    <tr class="text-slate-400">
                                        <th class="py-2">ID</th>
                                        <th>Estudiante</th>
                                        <th>Carrera</th>
                                        <th>Turno</th>
                                        <th>Fecha</th>
                                        <th>Estado</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-white/6">
                                    <tr>
                                        <td class="py-3">#OS-00043</td>
                                        <td>yordy</td>
                                        <td>Ingeniería de sistemas</td>
                                        <td>Noche</td>
                                        <td>13/06/2024</td>
                                        <td><span class="rounded-full bg-emerald-400/10 px-3 py-1 text-emerald-300 text-xs">Completado</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Dashboard - Taller Pro">
        <title>Dashboard | Taller Pro</title>

        @vite('resources/css/style.css')
    </head>
    <body class="min-h-screen bg-slate-950 text-slate-100">
        <div class="flex min-h-screen">
            <!-- Sidebar -->
            <aside class="w-64 bg-slate-900/90 border-r border-white/6 p-6">
                <div class="flex items-center gap-3">
                    <div class="h-10 w-10 flex items-center justify-center rounded-xl bg-sky-500/10 text-sky-300 font-bold">TP</div>
                    <div>
                        <p class="font-semibold">Taller Pro</p>
                        <p class="text-xs text-slate-400">Administrador</p>
                    </div>
                </div>

                <nav class="mt-8 space-y-2 text-sm">
                    <a href="dashboard" class="flex items-center gap-3 rounded-xl px-3 py-2 bg-slate-800/60 text-white">Dashboard</a>
                    
                </nav>
            </aside>

            <!-- Main -->
            <main class="flex-1 p-8">
                <header class="flex items-center justify-between">
                    <h1 class="text-2xl font-semibold">Dashboard</h1>
                    <div class="flex items-center gap-4">
                        <div class="text-sm text-slate-400">Bienvenido, Administrador</div>
                        <div class="h-8 w-8 rounded-full bg-slate-700/60 flex items-center justify-center">A</div>
                    </div>
                </header>

                <section class="mt-6 grid gap-6 lg:grid-cols-4">
                    <div class="rounded-xl border border-white/6 bg-slate-900/80 p-5">
                        <p class="text-sm text-slate-400">Clientes</p>
                        <p class="mt-3 text-3xl font-bold">128</p>
                        <p class="text-xs text-slate-500 mt-2">Clientes registrados</p>
                    </div>

                </section>

                <section class="mt-6">
                    <div class="rounded-xl border border-white/6 bg-slate-900/80 p-6">
                        <h3 class="text-lg font-semibold">Últimas Órdenes de Servicio</h3>
                        <div class="mt-4 overflow-x-auto">
                            <table class="w-full text-sm text-left text-slate-300">
                                <thead>
                                    <tr class="text-slate-400">
                                        <th class="py-2">ID</th>
                                        <th>Estudiante</th>
                                        <th>Carrera</th>
                                        <th>Turno</th>
                                        <th>Fecha</th>
                                        <th>Estado</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-white/6">
                                    <tr>
                                        <td class="py-3">#OS-00043</td>
                                        <td>yordy</td>
                                        <td>Ingeniería de sistemas</td>
                                        <td>Noche</td>
                                        <td>13/06/2024</td>
                                        <td><span class="rounded-full bg-emerald-400/10 px-3 py-1 text-emerald-300 text-xs">Completado</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </body>
</html>
