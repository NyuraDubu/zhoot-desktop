<footer class="bg-[#101623] text-slate-300">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 pt-14 pb-10">
        <div class="grid gap-12 md:gap-16 lg:grid-cols-12">
            <!-- Brand / CTA -->
            <div class="lg:col-span-4 space-y-6">
                <a href="/home" class="inline-flex items-center">
                    <img src="{{ asset('images/zhoot-white.png') }}" alt="Zhoot" class="h-9 w-auto" />
                </a>
                <div class="space-y-4">
                    <form action="#newsletter" method="post" class="flex flex-col sm:flex-row gap-3 sm:gap-2" onsubmit="event.preventDefault(); /* hook */">
                        <label for="newsletter-email" class="sr-only">Email</label>
                        <input id="newsletter-email" type="email" required placeholder="Votre email" class="w-full rounded-md bg-slate-800/50 border border-slate-700 px-3 py-2 text-sm placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-fuchsia-500/70" />
                        <button class="rounded-md bg-[#BB3381] text-white text-sm font-semibold px-4 py-2 hover:opacity-90 transition sm:shrink-0">S'inscrire</button>
                    </form>
                    <p class="text-[11px] text-slate-500 leading-relaxed">En vous inscrivant, vous acceptez notre <a href="#" class="underline decoration-slate-600 hover:text-slate-300">politique de confidentialité</a>.</p>
                </div>
            </div>

            <!-- Navigation Groups -->
            <div class="lg:col-span-8 grid gap-10 sm:gap-12 sm:grid-cols-3">
                <div>
                    <h3 class="text-sm font-semibold tracking-wide text-white mb-3">Produit</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#features" class="hover:text-white transition">Fonctionnalités</a></li>
                        <li><a href="#pricing" class="hover:text-white transition">Pricing</a></li>
                        <li><a href="#how" class="hover:text-white transition">Comment ça marche ?</a></li>
                        <li><a href="#" class="hover:text-white transition">Roadmap</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold tracking-wide text-white mb-3">Ressources</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-white transition">Blog</a></li>
                        <li><a href="#" class="hover:text-white transition">Centre d'aide</a></li>
                        <li><a href="#" class="hover:text-white transition">API</a></li>
                        <li><a href="#contact" class="hover:text-white transition">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold tracking-wide text-white mb-3">Légal</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-white transition">Mentions légales</a></li>
                        <li><a href="#" class="hover:text-white transition">CGU</a></li>
                        <li><a href="#" class="hover:text-white transition">Confidentialité</a></li>
                        <li><a href="#" class="hover:text-white transition">Cookies</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="mt-14 md:mt-16 pt-8 border-t border-slate-800 flex flex-col gap-6 md:flex-row md:items-center md:justify-between">
            <p class="text-[11px] sm:text-xs text-slate-500">&copy; {{ date('Y') }} Zhoot. Tous droits réservés. Développé par <span class="text-slate-400">quelqu'un</span>.</p>
            <div class="flex items-center gap-4 sm:gap-5">
                <a href="#" class="text-slate-400 hover:text-white transition" aria-label="LinkedIn">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5"><path d="M4.98 3.5a2.5 2.5 0 1 1 0 5.001 2.5 2.5 0 0 1 0-5ZM3 9h4v12H3zM14.25 9c-2.485 0-4.5 2.015-4.5 4.5V21h4v-7.5a1.5 1.5 0 0 1 3 0V21h4v-7.5C20.75 11.015 18.735 9 16.25 9z"/></svg>
                </a>
                <a href="#" class="text-slate-400 hover:text-white transition" aria-label="Twitter / X">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5"><path d="M17.53 3h3.7l-8.1 9.26L22.48 21h-6.17l-4.83-5.66L5.8 21H2.09l8.64-9.88L1.52 3h6.25l4.37 5.12L17.53 3Zm-1.3 16h1.73L7.9 4.92H6.05L16.23 19Z"/></svg>
                </a>
                <a href="mailto:contact@zhoot.app" class="text-slate-400 hover:text-white text-sm transition">contact@zhoot.app</a>
            </div>
        </div>
    </div>
</footer>
