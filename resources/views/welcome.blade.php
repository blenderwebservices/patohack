<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diego Gabriel Morales Zumaya | Portafolio Creativo</title>
    <script src="https://cdn.tailwindcss.com?plugins=typography"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap');
        
        body {
            font-family: 'Plus+Jakarta+Sans', sans-serif;
            background: #0f172a;
            color: #f8fafc;
            overflow-x: hidden;
        }

        .gradient-text {
            background: linear-gradient(90deg, #38bdf8, #818cf8, #c084fc, #fb7185);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-size: 300% 300%;
            animation: gradient-move 5s ease infinite;
        }

        @keyframes gradient-move {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .explosive-card {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            background: rgba(30, 41, 59, 0.7);
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
        }

        .explosive-card:hover {
            transform: translateY(-10px) scale(1.02);
            border-color: #818cf8;
            box-shadow: 0 20px 25px -5px rgba(129, 140, 248, 0.2);
        }

        .floating {
            animation: floating 3s ease-in-out infinite;
        }

        @keyframes floating {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-15px); }
        }

        .bg-grid {
            background-image: radial-gradient(#1e293b 1px, transparent 1px);
            background-size: 30px 30px;
        }
    </style>
</head>
<body class="bg-grid">

    <!-- Navegación -->
    <nav class="fixed top-0 w-full z-50 px-6 py-4 flex justify-between items-center backdrop-blur-md bg-slate-900/50">
        <div class="text-2xl font-extrabold tracking-tighter">
            <span class="text-sky-400">DIEGO</span><span class="text-rose-500">CANAL</span>
        </div>
        <div class="flex gap-4 md:gap-6 items-center">
            <a href="#proyectos" class="hover:text-sky-400 transition-colors font-semibold">Proyectos</a>
            <a href="#blog-proyectos" class="hover:text-purple-400 transition-colors font-semibold">Blog</a>
            <a href="#sobre-mi" class="hover:text-rose-400 transition-colors font-semibold hidden md:block">Sobre Mí</a>
            <a href="{{ url('/admin') }}" class="px-4 py-2 bg-slate-800 border border-slate-700 rounded-full hover:bg-sky-500 hover:border-sky-400 transition-colors font-bold text-sm">Dashboard</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="relative min-h-screen flex items-center justify-center px-6 pt-20 overflow-hidden">
        <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-sky-500/20 rounded-full blur-[100px]"></div>
        <div class="absolute bottom-1/4 right-1/4 w-64 h-64 bg-rose-500/20 rounded-full blur-[100px]"></div>
        
        <div class="text-center z-10 max-w-4xl">
            <div class="inline-block px-4 py-1.5 mb-6 rounded-full border border-sky-500/30 bg-sky-500/10 text-sky-400 text-sm font-bold tracking-widest uppercase">
                11 Años de Pura Creatividad
            </div>
            <h1 class="text-6xl md:text-8xl font-extrabold mb-6 leading-tight">
                Diseño <span class="gradient-text">Explosivo</span> & Empírico
            </h1>
            <p class="text-xl md:text-2xl text-slate-400 mb-10 max-w-2xl mx-auto leading-relaxed">
                Soy <span class="text-white font-bold">Diego Gabriel Morales Zumaya</span>. 
                Transformo ideas espontáneas en mundos visuales desde que tengo 5 años.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="#proyectos" class="px-8 py-4 bg-white text-slate-900 rounded-2xl font-bold text-lg hover:bg-sky-400 hover:text-white transition-all transform hover:scale-105">
                    Ver Galería
                </a>
                <a href="https://www.youtube.com/@DiegoCanal" target="_blank" class="px-8 py-4 bg-slate-800 text-white rounded-2xl font-bold text-lg border border-slate-700 hover:border-rose-500 transition-all flex items-center gap-2">
                    <i data-lucide="youtube" class="w-6 h-6 text-rose-500"></i> YouTube
                </a>
            </div>
        </div>
    </header>

    <!-- Skills / Personalidad -->
    <section class="py-20 px-6 max-w-7xl mx-auto">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="p-6 rounded-3xl bg-slate-800/40 border border-slate-700 text-center">
                <i data-lucide="zap" class="w-8 h-8 mx-auto mb-4 text-yellow-400"></i>
                <h3 class="font-bold">Espontáneo</h3>
            </div>
            <div class="p-6 rounded-3xl bg-slate-800/40 border border-slate-700 text-center">
                <i data-lucide="users" class="w-8 h-8 mx-auto mb-4 text-sky-400"></i>
                <h3 class="font-bold">Social</h3>
            </div>
            <div class="p-6 rounded-3xl bg-slate-800/40 border border-slate-700 text-center">
                <i data-lucide="rocket" class="w-8 h-8 mx-auto mb-4 text-purple-400"></i>
                <h3 class="font-bold">Futurista</h3>
            </div>
            <div class="p-6 rounded-3xl bg-slate-800/40 border border-slate-700 text-center">
                <i data-lucide="smile" class="w-8 h-8 mx-auto mb-4 text-rose-400"></i>
                <h3 class="font-bold">Positivo</h3>
            </div>
        </div>
    </section>

    <!-- Galería de Proyectos -->
    <section id="proyectos" class="py-20 px-6 max-w-7xl mx-auto">
        <div class="mb-16 text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-4">Mis Creaciones</h2>
            <div class="h-1.5 w-24 bg-sky-500 mx-auto rounded-full"></div>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Proyecto 1 -->
            <div class="explosive-card rounded-3xl overflow-hidden group">
                <div class="h-48 bg-gradient-to-br from-purple-600 to-blue-700 flex items-center justify-center p-8">
                    <i data-lucide="gamepad-2" class="w-20 h-20 text-white/50 group-hover:scale-110 transition-transform"></i>
                </div>
                <div class="p-8">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-2xl font-bold">Concepto "School"</h3>
                        <span class="bg-rose-500/20 text-rose-400 text-xs px-2 py-1 rounded font-bold">2D GAME</span>
                    </div>
                    <p class="text-slate-400 leading-relaxed mb-6">
                        Un minijuego único de comedia y terror diseñado especialmente para niños de 6 a 12 años. ¡Sustos divertidos garantizados!
                    </p>
                    <div class="flex gap-2">
                        <span class="text-xs font-bold px-3 py-1 bg-slate-700 rounded-full">Creative Writing</span>
                        <span class="text-xs font-bold px-3 py-1 bg-slate-700 rounded-full">Game Design</span>
                    </div>
                </div>
            </div>

            <!-- Proyecto 2 -->
            <div class="explosive-card rounded-3xl overflow-hidden group">
                <div class="h-48 bg-gradient-to-br from-orange-500 to-rose-600 flex items-center justify-center p-8">
                    <i data-lucide="palette" class="w-20 h-20 text-white/50 group-hover:scale-110 transition-transform"></i>
                </div>
                <div class="p-8">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-2xl font-bold">Silly Scents</h3>
                        <span class="bg-sky-500/20 text-sky-400 text-xs px-2 py-1 rounded font-bold">CRAYOLA IDEA</span>
                    </div>
                    <p class="text-slate-400 leading-relaxed mb-6">
                        Expresiones gráficas basadas en el universo de Crayola. Rediseño de conceptos visuales y sensoriales.
                    </p>
                    <div class="flex gap-2">
                        <span class="text-xs font-bold px-3 py-1 bg-slate-700 rounded-full">Diseño Empírico</span>
                        <span class="text-xs font-bold px-3 py-1 bg-slate-700 rounded-full">Branding</span>
                    </div>
                </div>
            </div>

            <!-- Proyecto 3 -->
            <div class="explosive-card rounded-3xl overflow-hidden group">
                <div class="h-48 bg-gradient-to-br from-slate-700 to-slate-900 flex items-center justify-center p-8">
                    <i data-lucide="box" class="w-20 h-20 text-white/50 group-hover:scale-110 transition-transform"></i>
                </div>
                <div class="p-8">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-2xl font-bold">Doors (Roblox)</h3>
                        <span class="bg-purple-500/20 text-purple-400 text-xs px-2 py-1 rounded font-bold">REIMAGINATION</span>
                    </div>
                    <p class="text-slate-400 leading-relaxed mb-6">
                        Análisis visual y propuestas de diseño para una de las experiencias más icónicas de Roblox.
                    </p>
                    <div class="flex gap-2">
                        <span class="text-xs font-bold px-3 py-1 bg-slate-700 rounded-full">Roblox Fan-art</span>
                        <span class="text-xs font-bold px-3 py-1 bg-slate-700 rounded-full">Digital Arts</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog / Proyectos Dinámicos -->
    <section id="blog-proyectos" class="py-20 px-6 max-w-7xl mx-auto">
        <div class="mb-16 text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-4">Blog & Experimentos</h2>
            <div class="h-1.5 w-24 bg-rose-500 mx-auto rounded-full"></div>
            <p class="text-slate-400 mt-4 max-w-2xl mx-auto">Registro en tiempo real de mis aventuras, conceptos y desarrollos. (Protegido por admin)</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($projects as $project)
            <div class="explosive-card rounded-3xl overflow-hidden group">
                @if($project->image)
                <div class="h-48 bg-slate-800 flex items-center justify-center overflow-hidden">
                    <img src="{{ Storage::url($project->image) }}" alt="{{ $project->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform">
                </div>
                @else
                <div class="h-48 bg-gradient-to-br from-indigo-600 to-purple-700 flex items-center justify-center p-8">
                    <i data-lucide="image" class="w-20 h-20 text-white/50 group-hover:scale-110 transition-transform"></i>
                </div>
                @endif
                <div class="p-8">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-2xl font-bold">{{ $project->title }}</h3>
                    </div>
                    <div class="text-slate-400 leading-relaxed mb-6 prose prose-invert prose-slate max-w-none prose-sm">
                        {!! $project->description !!}
                    </div>
                    <div class="flex gap-2 flex-wrap mb-4">
                        @if(is_array($project->tags))
                            @foreach($project->tags as $tag)
                                <span class="text-xs font-bold px-3 py-1 bg-slate-700 rounded-full">{{ $tag }}</span>
                            @endforeach
                        @endif
                    </div>
                    @if($project->link)
                    <div class="mb-4">
                        <a href="{{ $project->link }}" target="_blank" class="inline-flex items-center gap-2 text-sky-400 hover:text-sky-300 transition-colors font-bold text-sm">
                            <i data-lucide="external-link" class="w-4 h-4"></i> Ver Proyecto
                        </a>
                    </div>
                    @endif
                    <p class="text-xs text-slate-500 align-middle"><i data-lucide="user" class="w-3 h-3 inline mr-1"></i> {{ $project->user->name ?? 'Anon' }}</p>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-12">
                <i data-lucide="ghost" class="w-16 h-16 text-slate-700 mx-auto mb-4"></i>
                <p class="text-slate-500 italic text-lg">No hay proyectos publicados aún.</p>
            </div>
            @endforelse
        </div>
    </section>

    <!-- Sobre Mí -->
    <section id="sobre-mi" class="py-20 px-6 bg-slate-800/30">
        <div class="max-w-4xl mx-auto flex flex-col md:flex-row items-center gap-12">
            <div class="w-64 h-64 bg-gradient-to-tr from-sky-400 to-rose-500 rounded-full p-1 floating shrink-0">
                <div class="w-full h-full bg-slate-900 rounded-full flex items-center justify-center overflow-hidden">
                    <i data-lucide="user" class="w-32 h-32 text-slate-700"></i>
                    <!-- Aquí podrías poner tu foto en el futuro -->
                </div>
            </div>
            <div>
                <h2 class="text-4xl font-bold mb-6 italic">"El diseño no tiene edad, solo requiere pasión."</h2>
                <p class="text-lg text-slate-400 mb-6 leading-relaxed">
                    Llevo 6 años explorando el mundo del diseño gráfico de manera empírica. Mi estilo es una mezcla de mi energía explosiva y mi visión futurista. Me encanta lo social y siempre busco el lado positivo de cada reto creativo.
                </p>
                <div class="grid grid-cols-2 gap-4">
                    <div class="flex items-center gap-2">
                        <div class="w-2 h-2 bg-sky-500 rounded-full"></div>
                        <span class="font-semibold italic">Creativo Nato</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="w-2 h-2 bg-rose-500 rounded-full"></div>
                        <span class="font-semibold italic">Visionario Infantil</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-12 px-6 border-t border-slate-800 text-center">
        <p class="text-slate-500 font-bold mb-4 italic uppercase tracking-widest">Diego Gabriel Morales Zumaya © 2024</p>
        <div class="flex justify-center gap-6">
            <a href="#" class="text-slate-400 hover:text-white transition-colors"><i data-lucide="instagram"></i></a>
            <a href="https://www.youtube.com/@DiegoCanal" class="text-slate-400 hover:text-rose-500 transition-colors"><i data-lucide="youtube"></i></a>
            <a href="mailto:tuemail@ejemplo.com" class="text-slate-400 hover:text-sky-400 transition-colors"><i data-lucide="mail"></i></a>
        </div>
    </footer>

    <script>
        // Inicializar iconos de Lucide
        lucide.createIcons();

        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>