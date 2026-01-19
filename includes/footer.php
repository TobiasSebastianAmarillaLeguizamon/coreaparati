</div> <!-- End main content wrapper -->

<footer class="bg-primary text-white pt-16 pb-8 border-t border-white/10">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
            <!-- Brand -->
            <div class="col-span-1 md:col-span-2">
                <div class="flex items-center gap-2 mb-4">
                    <div class="w-8 h-8 bg-accent rounded-full flex items-center justify-center text-white">
                        <i class="fa-solid fa-heart text-sm"></i>
                    </div>
                    <span class="font-display font-bold text-xl tracking-tight">CoreaParaTi</span>
                </div>
                <p class="text-slate-400 text-sm leading-relaxed max-w-md mb-6">
                    Tu puente cultural entre América Latina y Corea del Sur. Creamos experiencias auténticas, vibrantes e inolvidables para fans del K-Pop y la cultura coreana.
                </p>
                <div class="flex gap-4">
                    <a href="#" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center hover:bg-accent hover:text-white transition-all">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center hover:bg-accent hover:text-white transition-all">
                        <i class="fa-brands fa-tiktok"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center hover:bg-facebook hover:text-white transition-all">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                </div>
            </div>

            <!-- Links -->
            <div>
                <h4 class="font-display font-bold text-lg mb-6 text-secondary">Explora</h4>
                <ul class="space-y-3">
                    <li><a href="index.php" class="text-slate-400 hover:text-accent transition-colors text-sm">Inicio</a></li>
                    <li><a href="experiencias.php" class="text-slate-400 hover:text-accent transition-colors text-sm">Nuestros Tours</a></li>
                    <li><a href="reservar.php" class="text-slate-400 hover:text-accent transition-colors text-sm">Reservar</a></li>
                    <li><a href="#" class="text-slate-400 hover:text-accent transition-colors text-sm">Blog K-Culture</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h4 class="font-display font-bold text-lg mb-6 text-secondary">Contacto</h4>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3 text-slate-400 text-sm">
                        <i class="fa-solid fa-envelope mt-1 text-accent"></i>
                        <span>hola@coreaparati.com</span>
                    </li>
                    <li class="flex items-start gap-3 text-slate-400 text-sm">
                        <i class="fa-brands fa-whatsapp mt-1 text-accent"></i>
                        <span>+82 10-1234-5678</span>
                    </li>
                    <li class="flex items-start gap-3 text-slate-400 text-sm">
                        <i class="fa-solid fa-location-dot mt-1 text-accent"></i>
                        <span>Gangnam-gu, Seoul, South Korea</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="border-t border-white/10 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-slate-500 text-xs text-center md:text-left">
                &copy; <?php echo date('Y'); ?> CoreaParaTi. Todos los derechos reservados.
            </p>
            <div class="flex gap-6">
                <a href="#" class="text-slate-500 hover:text-white text-xs transition-colors">Términos y Condiciones</a>
                <a href="#" class="text-slate-500 hover:text-white text-xs transition-colors">Política de Privacidad</a>
            </div>
        </div>
    </div>
</footer>

<script>
    // Mobile Menu Toggle
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>
</body>
</html>
