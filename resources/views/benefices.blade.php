<!-- Bénéfices Clés Section -->
<section id="benefices" class="w-full py-24 bg-[#FAFAFA] reveal" data-reveal-fade>
    <div class="max-w-6xl mx-auto px-4 md:px-8">
        <div class="max-w-3xl mx-auto text-center reveal" style="--reveal-delay:40ms">
            <h2 class="mt-6 font-europa font-bold text-[#354762] text-3xl md:text-5xl leading-tight tracking-tight">
                <span>Bénéfices clés</span>
            </h2>
            <p class="mt-4 text-[#6F757C] font-europa font-medium text-[15px] md:text-[16px]">Convaincre rapidement avec des avantages clairs.</p>
        </div>

        @php
            // Icônes SVG légers (stroke currentColor). key = id icon
            $svgIcons = [
                'time' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l3.5 2"/></svg>',
                'cost' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><path d="M12 1v22"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>',
                'sales' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><circle cx="12" cy="12" r="10"/><path d="M8 12l2.5 2.5L16 9"/></svg>',
                'simple' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/></svg>',
                'sector' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><circle cx="12" cy="12" r="10"/><path d="M2 12h20"/><path d="M12 2a15.3 15.3 0 010 20a15.3 15.3 0 010-20z"/></svg>',
            ];
            $benefits = [
                ['icon' => 'time', 'title' => 'Gagnez du temps', 'desc' => 'Pas de séances photos, résultats instantanés'],
                ['icon' => 'cost', 'title' => 'Réduisez vos coûts', 'desc' => 'Plus besoin de studio ou matériel pro'],
                ['icon' => 'sales', 'title' => 'Boostez vos ventes', 'desc' => 'Des visuels qui déclenchent l\'achat impulsif'],
                ['icon' => 'simple', 'title' => 'Simplicité totale', 'desc' => 'Zéro compétence technique requise'],
                ['icon' => 'sector', 'title' => 'S\'adapte à tout secteur', 'desc' => 'Mode, food, beauté, tech, déco, etc.'],
            ];
        @endphp

    <ul class="mt-14 space-y-7 max-w-4xl mx-auto text-left reveal-stagger-parent" data-benefits-list>
            @foreach($benefits as $idx => $b)
                <li class="benefit-item reveal flex gap-5 items-start" style="--reveal-delay: {{ 120 + $idx * 80 }}ms">
                    <div class="icon-wrapper relative flex-shrink-0 w-12 h-12 rounded-xl bg-gradient-to-br from-[#FFC978] via-[#FF71FD] to-[#688BFF] text-white shadow-sm flex items-center justify-center">
                        <div class="absolute inset-0 rounded-xl bg-white/0 group-hover:bg-white/5 transition"></div>
                        {!! $svgIcons[$b['icon']] !!}
                    </div>
                    <div class="leading-snug">
                        <p class="font-europa font-semibold text-[#354762] text-[16px]">
                            <span class="benefit-title bg-clip-text text-transparent bg-gradient-to-r from-[#354762] to-[#354762]">{{ $b['title'] }}</span>
                            <span class="font-normal text-[#6F757C]"> → {{ $b['desc'] }}</span>
                        </p>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</section>

@push('styles')
<style>
    .icon-wrapper { position:relative; }
    .icon-wrapper::after { content:""; position:absolute; inset:-2px; border-radius:inherit; background:linear-gradient(140deg,#FFC97855,#FF71FD55,#688BFF55); opacity:0; transition:opacity .4s; z-index:-1; }
    .benefit-item:hover .icon-wrapper::after { opacity:1; }
</style>
@endpush
