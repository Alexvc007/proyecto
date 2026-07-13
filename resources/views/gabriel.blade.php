<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }} - Perfil</title>

    
        @fonts
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            @theme {
                --color-brand-primary: #0F172A;     
                --color-brand-secondary: #334155;  
                --color-brand-accent: #F59E0B;     
                --color-brand-highlight: #FBBF24;   
                --color-brand-background: #F1F5F9;  
                --color-brand-border: #E2E8F0;   
            }
        </style>
    </head>
    <body class="min-h-screen bg-brand-background flex items-center justify-center p-6 font-sans antialiased text-gray-900">

      
        <div class="bg-white rounded-3xl shadow-lg w-full max-w-4xl overflow-hidden flex flex-col md:flex-row border border-brand-border transform transition duration-500 hover:-translate-y-1 hover:shadow-xl">
            
        
            <div class="bg-brand-primary p-8 text-white flex flex-col items-center justify-center text-center md:w-2/5 relative">
                
            
                <div class="relative w-32 h-32 bg-white rounded-full flex items-center justify-center shadow-inner mb-6 group overflow-hidden border-4 border-brand-accent">
                    <span class="text-brand-primary text-5xl font-extrabold tracking-tight drop-shadow-sm">JG</span>
                    <div class="absolute inset-0 bg-brand-accent opacity-0 group-hover:opacity-20 transition duration-300"></div>
                </div>

              
                <h1 class="text-3xl font-extrabold tracking-tighter leading-tight text-white mb-2">
                    Juan Gabriel<br>
                    Ferrufino Vásquez
                </h1>
                <p class="text-brand-highlight font-semibold text-sm uppercase tracking-wider mb-6">
                    Ingeniero en Sistemas
                </p>

                <div class="flex justify-center space-x-4 mt-auto">
                    <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="p-2 text-brand-highlight/70 hover:text-white transition duration-300" title="LinkedIn">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.779-1.75-1.75s.784-1.75 1.75-1.75 1.75.779 1.75 1.75-.784 1.75-1.75 1.75zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                    </a>
                    <a href="https://github.com" target="_blank" rel="noopener noreferrer" class="p-2 text-brand-highlight/70 hover:text-white transition duration-300" title="GitHub">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2A10 10 0 0 0 2 12c0 4.42 2.87 8.17 6.84 9.5.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34-.46-1.16-1.11-1.47-1.11-1.47-.9-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.9 1.52 2.34 1.07 2.91.83.1-.65.35-1.09.63-1.34-2.22-.25-4.55-1.11-4.55-4.92 0-1.11.38-2 1.03-2.71-.1-.25-.45-1.29.1-2.64 0 0 .84-.27 2.75 1.02.79-.22 1.65-.33 2.5-.33.85 0 1.71.11 2.5.33 1.91-1.29 2.75-1.02 2.75-1.02.55 1.35.2 2.39.1 2.64.65.71 1.03 1.6 1.03 2.71 0 3.82-2.34 4.66-4.57 4.91.36.31.69.92.69 1.85V21c0 .27.16.59.67.5C19.14 20.16 22 16.42 22 12A10 10 0 0 0 12 2z"/></svg>
                    </a>
                </div>
            </div>

            <div class="p-8 md:p-12 md:w-3/5 flex flex-col justify-between bg-white">
                <div>
      
                    <h2 class="text-xl font-bold text-brand-primary tracking-tight mb-4 flex items-center">
                        <svg class="w-6 h-6 mr-3 text-brand-accent" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                        Perfil Profesional
                    </h2>
                    <p class="text-brand-secondary text-base leading-relaxed mb-8">
                        Apasionado por la tecnología, el desarrollo de software y el diseño de soluciones lógicas y eficientes. Mi enfoque combina la rigurosidad de la ingeniería con la creatividad del desarrollo.
                    </p>

    
                    <h2 class="text-xl font-bold text-brand-primary tracking-tight mb-5 flex items-center">
                        <svg class="w-6 h-6 mr-3 text-brand-accent" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.828.18M12 11.5c.9 0 1.5-.6 1.5-1.5S12.9 8.5 12 8.5 10.5 9.1 10.5 10s.6 1.5 1.5 1.5z"></path></svg>
                        Especialidades
                    </h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm">
                        <div class="flex items-start space-x-3 bg-brand-background p-3 rounded-xl border border-brand-border">
                            <span class="w-2.5 h-2.5 mt-1 bg-brand-accent rounded-full flex-shrink-0"></span>
                            <p class="text-brand-primary font-semibold">Desarrollo Web Full Stack</p>
                        </div>
                        <div class="flex items-start space-x-3 bg-brand-background p-3 rounded-xl border border-brand-border">
                            <span class="w-2.5 h-2.5 mt-1 bg-sky-500 rounded-full flex-shrink-0"></span>
                            <p class="text-brand-primary font-semibold">Arquitectura de Bases de Datos</p>
                        </div>
                        <div class="flex items-start space-x-3 bg-brand-background p-3 rounded-xl border border-brand-border">
                            <span class="w-2.5 h-2.5 mt-1 bg-emerald-500 rounded-full flex-shrink-0"></span>
                            <p class="text-brand-primary font-semibold">Soluciones Lógicas Eficientes</p>
                        </div>
                        <div class="flex items-start space-x-3 bg-brand-background p-3 rounded-xl border border-brand-border">
                            <span class="w-2.5 h-2.5 mt-1 bg-indigo-500 rounded-full flex-shrink-0"></span>
                            <p class="text-brand-primary font-semibold">Tecnologías Emergentes</p>
                        </div>
                    </div>
                </div>

                <a href="mailto:tu-correo@ejemplo.com" class="mt-10 inline-block text-center w-full md:w-auto px-10 py-4 bg-brand-accent text-brand-primary font-bold text-lg rounded-full shadow-lg hover:bg-brand-highlight transition-all duration-300 transform hover:scale-105 active:scale-95">
                    Contáctame
                </a>
            </div>
        </div>

    </body>
</html>