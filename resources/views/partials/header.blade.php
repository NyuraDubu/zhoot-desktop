<header class="sticky top-0 z-30 bg-white/95 backdrop-blur supports-[backdrop-filter]:bg-white/80 border-b border-slate-100">
    <div class="mx-auto relative px-4 sm:px-6 md:px-8" x-data="{ open:false }">
        <div class="flex h-16 items-center gap-3">
            <!-- Left: Logo (flush left) -->
            <a href="{{ url('/home') }}" class="inline-flex items-center select-none shrink-0">
                <img src="{{ asset('images/zhoot-logo.png') }}" alt="Zhoot" class="h-8 w-auto" loading="lazy" />
            </a>

            <!-- Desktop Center Nav (absolute centered) -->
            <nav class="hidden md:flex absolute inset-x-0 mx-auto h-full items-center justify-center pointer-events-none">
                <ul class="flex gap-10 text-sm font-medium pointer-events-auto">
                    <li><a href="#pricing" class="text-slate-600 hover:text-slate-900 transition">Pricing</a></li>
                    <li><a href="#fonctionnement" class="text-slate-600 hover:text-slate-900 transition">Comment ça marche ?</a></li>
                    <li><a href="#contact" class="text-slate-600 hover:text-slate-900 transition">Contact</a></li>
                </ul>
            </nav>

            <!-- Right: Actions (flush right using ml-auto) -->
            <div class="hidden md:flex items-center gap-3 ml-auto">
                <a href="#login" class="inline-flex items-center rounded-full px-5 py-2 text-sm font-semibold text-[#354762] bg-white shadow-sm ring-1 ring-white hover:ring-slate-300 transition font-europa" style="box-shadow: 0 1px 2px 0 #00000021">Connexion</a>
                <a href="#signup" class="inline-flex items-center gap-1 rounded-full px-6 py-2 text-sm font-semibold text-white bg-[#BB3381] shadow hover:opacity-95 focus-visible:outline focus-visible:outline-offset-2 focus-visible:outline-fuchsia-500 transition">Essayer gratuitement</a>
            </div>

            <!-- Mobile menu button -->
            <button type="button" @click="open = !open" aria-label="Menu" class="md:hidden inline-flex items-center justify-center rounded-md p-2 text-slate-600 hover:bg-slate-100 hover:text-slate-900 focus:outline-none focus-visible:ring-2 focus-visible:ring-fuchsia-500/60 transition ml-auto" :aria-expanded="open.toString()">
                <svg x-show="!open" x-cloak xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg x-show="open" x-cloak xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
                <template x-teleport="body">
                    <!-- Mobile panel -->
                    <div x-show="open" x-transition.opacity.duration.150ms class="fixed inset-0 z-40 bg-black/40" @click="open=false" @keydown.escape.window="open=false"></div>
                    <div x-show="open" x-transition x-trap.noscroll="open" class="fixed top-0 right-0 z-50 w-full max-w-xs h-[100dvh] bg-white border-l border-slate-100 shadow-xl flex flex-col pt-safe pb-safe">
                        <div class="px-5 py-4 flex items-center justify-between border-b border-slate-100">
                            <img src="{{ asset('images/zhoot-logo.png') }}" alt="Zhoot" class="h-7 w-auto" />
                            <button @click="open=false" class="p-2 rounded-md hover:bg-slate-100 focus:outline-none focus-visible:ring-2 focus-visible:ring-fuchsia-500/60" aria-label="Fermer le menu">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                            </button>
                        </div>
                        <nav class="flex-1 px-5 py-6 space-y-4 text-sm font-medium overflow-y-auto">
                            <a href="#pricing" @click="open=false" class="block text-slate-700 hover:text-slate-900">Pricing</a>
                            <a href="#how" @click="open=false" class="block text-slate-700 hover:text-slate-900">Comment ça marche ?</a>
                            <a href="#contact" @click="open=false" class="block text-slate-700 hover:text-slate-900">Contact</a>
                        </nav>
                        <div class="px-5 pb-6 mt-auto space-y-3">
                            <a href="#login" @click="open=false" class="block text-center rounded-full px-5 py-2 text-sm font-semibold text-slate-700 bg-white shadow-sm ring-1 ring-slate-200 hover:ring-slate-300 transition">Connexion</a>
                            <a href="#signup" @click="open=false" class="block text-center rounded-full px-6 py-2 text-sm font-semibold text-white bg-[#BB3381] shadow hover:opacity-95 focus-visible:outline focus-visible:outline-offset-2 focus-visible:outline-fuchsia-500 transition">Essayer gratuitement</a>
                        </div>
                    </div>
                </template>
            </button>
        </div>
    </div>
</header>
