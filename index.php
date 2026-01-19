<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="relative h-[90vh] flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0">
        <img src="assets/img/hero.jpg" alt="Seoul Night Line" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-b from-primary/60 via-primary/40 to-primary"></div>
    </div>
    
    <div class="relative z-10 text-center px-4 max-w-4xl mx-auto">
        <h1 class="font-display font-extrabold text-5xl md:text-7xl text-white mb-6 tracking-tight leading-tight text-shadow-glow">
            ¡Corea te espera!
        </h1>
        <p class="font-body text-lg md:text-2xl text-slate-200 mb-10 font-light max-w-2xl mx-auto">
            Creamos experiencias únicas para que vivas tu pasión por la cultura coreana. <span class="text-accent font-semibold">Tu sueño K-Lifestyle comienza aquí.</span>
        </p>
        <div class="flex flex-col md:flex-row gap-4 justify-center">
            <a href="experiencias.php" class="px-8 py-4 bg-accent text-white font-bold rounded-full text-lg hover:bg-rose-600 transition-all shadow-lg shadow-accent/40 transform hover:scale-105">
                Ver Experiencias
            </a>
            <a href="reservar.php" class="px-8 py-4 bg-white/10 backdrop-blur-md border border-white/30 text-white font-bold rounded-full text-lg hover:bg-white/20 transition-all">
                Planear mi Viaje
            </a>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce text-white/50">
        <i class="fa-solid fa-chevron-down text-2xl"></i>
    </div>
</section>

<!-- About Section -->
<section id="nosotros" class="py-24 bg-white relative overflow-hidden">
    <!-- Decor element -->
    <div class="absolute top-0 right-0 w-64 h-64 bg-secondary/10 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>

    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row items-center gap-16">
            <div class="w-full md:w-1/2 relative">
                <div class="relative z-10 rounded-2xl overflow-hidden shadow-2xl rotate-2 hover:rotate-0 transition-all duration-500">
                    <img src="assets/img/hanbok.jpg" alt="Fans en Corea" class="w-full aspect-[4/3] object-cover">
                </div>
                <div class="absolute -bottom-6 -left-6 w-full h-full border-4 border-accent rounded-2xl -z-0"></div>
            </div>
            
            <div class="w-full md:w-1/2">
                <h3 class="text-accent font-bold uppercase tracking-widest text-sm mb-2">¿Quiénes Somos?</h3>
                <h2 class="font-display font-bold text-4xl text-primary mb-6">Más que un viaje, una conexión real</h2>
                <div class="space-y-6 text-slate-600 leading-relaxed text-lg">
                    <p>
                        <span class="font-bold text-primary">CoreaParaTi</span> nació de un grupo de apasionados por el Hallyu que soñaban con pisar las mismas calles que sus idols. Entendemos que no buscas un tour genérico; buscas sentir el latido de Seúl.
                    </p>
                    <p>
                        Nuestra misión es acercarte al corazón de Corea, rompiendo barreras de idioma y cultura. Somos el puente que conecta a los fans de América Latina con la magia del país de la calma matutina.
                    </p>
                </div>
                
                <div class="grid grid-cols-2 gap-6 mt-10">
                    <div class="p-4 bg-slate-50 rounded-xl border border-slate-100">
                        <i class="fa-solid fa-bridge text-3xl text-secondary mb-3"></i>
                        <h4 class="font-bold text-primary">Nuestra Misión</h4>
                        <p class="text-sm text-slate-500">Acercar el corazón de Corea a Latam.</p>
                    </div>
                    <div class="p-4 bg-slate-50 rounded-xl border border-slate-100">
                        <i class="fa-solid fa-eye text-3xl text-secondary mb-3"></i>
                        <h4 class="font-bold text-primary">Nuestra Visión</h4>
                        <p class="text-sm text-slate-500">Ser el puente cultural líder entre regiones.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Services -->
<section class="py-24 bg-slate-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="font-display font-bold text-4xl text-primary mb-4">Experiencias Destacadas</h2>
            <p class="text-slate-500 text-lg max-w-2xl mx-auto">Elige tu próxima aventura. Desde los colores del otoño hasta la energía del K-Pop.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
            <!-- Card 1 -->
            <div class="group bg-white rounded-3xl overflow-hidden shadow-xl card-hover-effect relative">
                <div class="h-64 overflow-hidden relative">
                    <img src="assets/img/service_3.jpg" alt="Otoño en Corea" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute top-4 right-4 bg-white/90 backdrop-blur text-primary font-bold px-4 py-1 rounded-full text-sm">
                        <i class="fa-solid fa-star text-yellow-400 mr-1"></i> Top Seller
                    </div>
                </div>
                <div class="p-8">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="font-display font-bold text-2xl text-primary group-hover:text-accent transition-colors">Otoño en Corea</h3>
                        <span class="text-slate-400 text-sm">8 u 11 días</span>
                    </div>
                    <p class="text-slate-500 mb-6">Vive la estación más romántica. Isla Nami, locaciones de K-Dramas y la magia de los colores otoñales.</p>
                    <div class="flex items-center justify-between border-t border-slate-100 pt-4">
                        <span class="text-2xl font-bold text-primary">USD 3.980</span>
                        <a href="experiencias.php" class="text-accent font-bold hover:underline">Ver detalles <i class="fa-solid fa-arrow-right ml-1"></i></a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="group bg-white rounded-3xl overflow-hidden shadow-xl card-hover-effect relative">
                <div class="h-64 overflow-hidden relative">
                    <img src="assets/img/service_2.jpg" alt="K-Pop Dream Tour" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute top-4 right-4 bg-accent text-white font-bold px-4 py-1 rounded-full text-sm animate-pulse">
                        New 2026
                    </div>
                </div>
                <div class="p-8">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="font-display font-bold text-2xl text-primary group-hover:text-accent transition-colors">K-Pop Dream Tour</h3>
                        <span class="text-slate-400 text-sm">Edición 2026</span>
                    </div>
                    <p class="text-slate-500 mb-6">La experiencia definitiva para fans. Concierto "Wonder Show" con 13+ grupos, visita a agencias y K-Star Road.</p>
                    <div class="flex items-center justify-between border-t border-slate-100 pt-4">
                        <span class="text-2xl font-bold text-primary">USD 3.780</span>
                        <a href="experiencias.php" class="text-accent font-bold hover:underline">Ver detalles <i class="fa-solid fa-arrow-right ml-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Social Proof / Vibe -->
<section class="py-12 bg-primary overflow-hidden">
    <div class="container mx-auto px-4 text-center mb-8">
        <h3 class="text-2xl font-display font-bold text-white">#CoreaParaTi en Instagram</h3>
    </div>
    <div class="flex gap-4 overflow-x-auto pb-4 px-4 justify-start md:justify-center no-scrollbar">
        <!-- Mock Social Feed -->
        <div class="flex-none w-64 h-80 rounded-xl overflow-hidden relative group">
            <img src="assets/img/social_1.jpg" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-opacity">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex items-end p-4">
                <p class="text-white text-sm"><i class="fa-solid fa-heart text-accent mr-1"></i> Sabores únicos</p>
            </div>
        </div>
        <div class="flex-none w-64 h-80 rounded-xl overflow-hidden relative group">
            <img src="assets/img/social_2.jpg" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-opacity">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex items-end p-4">
                <p class="text-white text-sm"><i class="fa-solid fa-heart text-accent mr-1"></i> Noches de Seúl</p>
            </div>
        </div>
        <div class="flex-none w-64 h-80 rounded-xl overflow-hidden relative group">
            <img src="assets/img/social_3.jpg" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-opacity">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex items-end p-4">
                <p class="text-white text-sm"><i class="fa-solid fa-heart text-accent mr-1"></i> El mejor fandom</p>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
