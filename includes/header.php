<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoreaParaTi - Viajes y Experiencias K-Culture</title>
    
    <!-- Typgraphy -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Montserrat:wght@600;700;800&family=Syne:wght@600;700;800&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0F172A', // Azul Noche
                        accent: '#F43F5E', // Rosa K-Pop
                        secondary: '#38BDF8', // Celeste
                        autumn: {
                            gold: '#F59E0B',
                            red: '#DC2626'
                        }
                    },
                    fontFamily: {
                        display: ['Syne', 'sans-serif'],
                        title: ['Montserrat', 'sans-serif'],
                        body: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        .glass-nav {
            background: rgba(15, 23, 42, 0.85);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }
        .text-shadow-glow {
            text-shadow: 0 0 20px rgba(244, 63, 94, 0.5);
        }
        .card-hover-effect {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .card-hover-effect:hover {
            transform: scale(1.02);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
    </style>
</head>
<body class="bg-slate-50 font-body text-slate-800 antialiased selection:bg-accent selection:text-white">

<header class="fixed w-full top-0 z-50 glass-nav border-b border-white/10">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <!-- Logo -->
        <a href="index.php" class="flex items-center gap-2 group">
            <div class="w-10 h-10 bg-accent rounded-full flex items-center justify-center text-white group-hover:rotate-12 transition-transform duration-300">
                <i class="fa-solid fa-heart"></i>
            </div>
            <div>
                <span class="font-display font-bold text-2xl text-white tracking-tight">CoreaParaTi</span>
                <span class="block text-[10px] text-secondary font-medium tracking-widest uppercase -mt-1">K-Travel & Experience</span>
            </div>
        </a>

        <!-- Desktop Menu -->
        <nav class="hidden md:flex items-center gap-8">
            <a href="index.php" class="text-sm font-semibold text-slate-300 hover:text-accent transition-colors">Inicio</a>
            <a href="index.php#nosotros" class="text-sm font-semibold text-slate-300 hover:text-accent transition-colors">Nosotros</a>
            <a href="experiencias.php" class="text-sm font-semibold text-slate-300 hover:text-accent transition-colors">Experiencias</a>
            <a href="reservar.php" class="px-6 py-2 bg-gradient-to-r from-accent to-pink-600 text-white text-sm font-bold rounded-full hover:shadow-lg hover:shadow-accent/30 transition-all transform hover:-translate-y-0.5">
                Reservar Ahora
            </a>
        </nav>

        <!-- Mobile Menu Button -->
        <button id="mobile-menu-btn" class="md:hidden text-white text-2xl hover:text-accent transition-colors">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>

    <!-- Mobile Menu Dropdown -->
    <div id="mobile-menu" class="hidden md:hidden bg-primary border-t border-white/10 absolute w-full">
        <div class="container mx-auto px-4 py-4 flex flex-col gap-4">
            <a href="index.php" class="text-slate-300 hover:text-accent font-medium">Inicio</a>
            <a href="index.php#nosotros" class="text-slate-300 hover:text-accent font-medium">Nosotros</a>
            <a href="experiencias.php" class="text-slate-300 hover:text-accent font-medium">Experiencias</a>
            <a href="reservar.php" class="text-accent font-bold">Reservar Ahora</a>
        </div>
    </div>
</header>
<div class="pt-20"> <!-- Spacer for fixed header -->
