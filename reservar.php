<?php include 'includes/header.php'; ?>

<div class="min-h-screen bg-slate-50 pt-32 pb-24">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto bg-white rounded-3xl shadow-xl overflow-hidden">
            <div class="bg-primary p-8 md:p-10 text-center relative overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-full bg-[url('assets/img/social_2.jpg')] opacity-10 bg-cover bg-center"></div>
                <h1 class="relative font-display font-bold text-3xl text-white mb-2">Comienza tu Aventura</h1>
                <p class="relative text-slate-300">Completa el formulario y nos pondremos en contacto contigo.</p>
            </div>
            
            <div class="p-8 md:p-10">
                <form action="#" method="POST" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-bold text-primary mb-2">Nombre Completo</label>
                            <input type="text" class="w-full px-4 py-3 rounded-lg bg-slate-50 border border-slate-200 focus:border-accent focus:ring-2 focus:ring-accent/20 outline-none transition-all" placeholder="Tu nombre">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-primary mb-2">Email</label>
                            <input type="email" class="w-full px-4 py-3 rounded-lg bg-slate-50 border border-slate-200 focus:border-accent focus:ring-2 focus:ring-accent/20 outline-none transition-all" placeholder="tucorreo@ejemplo.com">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-bold text-primary mb-2">Teléfono / WhatsApp</label>
                            <input type="tel" class="w-full px-4 py-3 rounded-lg bg-slate-50 border border-slate-200 focus:border-accent focus:ring-2 focus:ring-accent/20 outline-none transition-all" placeholder="+56 9 ...">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-primary mb-2">Programa de Interés</label>
                            <div class="relative">
                                <select class="w-full px-4 py-3 rounded-lg bg-slate-50 border border-slate-200 focus:border-accent focus:ring-2 focus:ring-accent/20 outline-none transition-all appearance-none">
                                    <option value="" disabled selected>Selecciona una opción</option>
                                    <option value="otono">Otoño en Corea</option>
                                    <option value="kpop">K-Pop Dream Tour 2026</option>
                                    <option value="extendida">Experiencia Extendida</option>
                                </select>
                                <div class="absolute right-4 top-1/2 -translate-y-1/2 text-slate-400 pointer-events-none">
                                    <i class="fa-solid fa-chevron-down text-xs"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-primary mb-2">Comentarios o Preguntas</label>
                        <textarea rows="4" class="w-full px-4 py-3 rounded-lg bg-slate-50 border border-slate-200 focus:border-accent focus:ring-2 focus:ring-accent/20 outline-none transition-all" placeholder="¿Tienes dudas sobre los vuelos o fechas específicas? Cuéntanos aquí..."></textarea>
                    </div>

                    <button type="submit" class="w-full py-4 bg-gradient-to-r from-primary to-slate-800 text-white font-bold rounded-xl hover:shadow-lg transform hover:-translate-y-1 transition-all duration-300">
                        Enviar Solicitud
                    </button>
                    
                    <p class="text-xs text-center text-slate-400 mt-4">
                        Al enviar este formulario aceptas ser contactado por nuestro equipo.
                    </p>
                </form>

                <div class="mt-12 bg-amber-50 rounded-xl p-6 border border-amber-100 flex items-start gap-4">
                    <i class="fa-solid fa-triangle-exclamation text-amber-500 text-xl mt-1"></i>
                    <div>
                        <h4 class="font-bold text-primary text-sm mb-1">Información Importante</h4>
                        <p class="text-xs text-slate-600 leading-relaxed mb-2">
                            * Los precios mostrados son en base doble. Si viajas solo/a, consulta por el suplemento de habitación individual.
                        </p>
                        <p class="text-xs text-slate-600 leading-relaxed">
                            * Los cupos son limitados para garantizar una experiencia personalizada.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
