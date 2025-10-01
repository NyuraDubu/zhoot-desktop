<!-- Galerie / Cas d'usage - Redesigned -->
<section id="galerie" class="w-full py-28 bg-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 md:px-8">
        <!-- Header -->
        <div class="text-center reveal" data-reveal-fade style="--reveal-delay:40ms">
            <h2 class="font-europa font-bold text-[#354762] text-3xl md:text-5xl">Fonctionne pour tout type de produits</h2>
            <p class="mt-5 text-[#6F757C] font-europa font-medium text-[15px] md:text-[17px]">Peu importe ce que vous vendez, Zhoot sublime vos photos en un visuel pro.</p>
        </div>

        @php
            $featured = [
                ['before'=>'before1.jpg','after'=>'after1.jpg','cat'=>'Food','label'=>'Bowl protéiné','gain'=>'+37% CTR','desc'=>'Couleurs ravivées, contraste léger, bruit réduit'],
                ['before'=>'before2.jpg','after'=>'after2.jpg','cat'=>'Skincare','label'=>'Sérum éclat','gain'=>'+24% clics','desc'=>'Lumière unifiée, reflets contrôlés'],
                ['before'=>'before3.jpg','after'=>'after3.jpg','cat'=>'Mode','label'=>'Sneaker','gain'=>'+18% ajout panier','desc'=>'Fond nettoyé, texture semelle lisible'],
                ['before'=>'before4.jpg','after'=>'after4.jpg','cat'=>'Tech','label'=>'Casque audio','gain'=>'+21% vues','desc'=>'Reflets tempérés, noirs densifiés'],
            ];

            $mini = [
                ['img'=>'cap.png','title'=>'Accessoire'],
                ['img'=>'hoodie.png','title'=>'Hoodie'],
                ['img'=>'jeans.png','title'=>'Jeans'],
                ['img'=>'cap2.png','title'=>'Cap 2'],
                ['img'=>'before2.jpg','title'=>'Skincare'],
                ['img'=>'after2.jpg','title'=>'Skincare+'],
            ];
        @endphp

        <!-- Featured comparison sliders grid -->
        <div class="mt-16 grid gap-10 md:grid-cols-2 lg:grid-cols-4" id="galerie-featured">
            @foreach($featured as $k => $item)
                @php $bExists = file_exists(public_path('images/'.$item['before'])); $aExists = file_exists(public_path('images/'.$item['after'])); @endphp
                <div class="galerie-card group relative rounded-2xl border border-[#E6E8EC] bg-white shadow-sm hover:shadow-md transition overflow-hidden flex flex-col reveal" style="--reveal-delay: {{ 120 + $k*60 }}ms" data-cat="{{ strtolower($item['cat']) }}">
                    <div class="relative aspect-[4/5] compare-block cursor-col-resize">
                        @if($bExists)
                            <img src="{{ asset('images/'.$item['before']) }}" alt="Avant - {{ $item['label'] }}" class="absolute inset-0 w-full h-full object-cover" loading="lazy" />
                        @else
                            <div class="absolute inset-0 flex items-center justify-center text-[11px] text-slate-500">{{ $item['before'] }}</div>
                        @endif
                        @if($aExists)
                            <img src="{{ asset('images/'.$item['after']) }}" alt="Après - {{ $item['label'] }}" class="after-img absolute inset-0 w-full h-full object-cover" style="clip-path:inset(0 0 0 55%);" loading="lazy" />
                        @else
                            <div class="after-img absolute inset-0 flex items-center justify-center text-[11px] text-slate-500 bg-slate-100" style="clip-path:inset(0 0 0 55%);">{{ $item['after'] }}</div>
                        @endif
                        <div class="handle pointer-events-none absolute top-0 bottom-0 left-[55%] -translate-x-1/2 w-[2px] bg-white/80 after:absolute after:top-1/2 after:-translate-y-1/2 after:left-1/2 after:-translate-x-1/2 after:w-8 after:h-8 after:rounded-full after:bg-white after:shadow after:border after:border-[#E2E6EB]"></div>
                        <input type="range" min="0" max="100" value="55" class="absolute inset-0 w-full h-full opacity-0" aria-label="Comparer {{ $item['label'] }}" />
                        <span class="compare-tag compare-before absolute top-2 left-2 text-[10px] font-semibold px-2 py-0.5 rounded-full bg-white/85 backdrop-blur text-[#354762] transition-opacity">Avant</span>
                        <span class="compare-tag compare-after absolute top-2 right-2 text-[10px] font-semibold px-2 py-0.5 rounded-full bg-gradient-to-r from-[#FFC978] via-[#FF71FD] to-[#688BFF] text-white shadow transition-opacity">Après</span>
                        <span class="absolute bottom-2 left-2 text-[10px] font-semibold px-2 py-0.5 rounded-full bg-[#354762]/80 text-white">{{ $item['cat'] }}</span>
                    </div>
                    <div class="p-4 flex flex-col gap-1 font-europa text-[12px] text-[#354762]">
                        <div class="flex items-center justify-between font-semibold">
                            <span>{{ $item['label'] }}</span>
                            <span class="text-[10px] font-medium text-[#BB3381] bg-[#BB3381]/10 px-2 py-0.5 rounded-full">{{ $item['gain'] }}</span>
                        </div>
                        <p class="text-[#6F757C] text-[11px] leading-snug">{{ $item['desc'] }}</p>
                    </div>
                    <div class="h-1 w-full bg-gradient-to-r from-[#FFC978] via-[#FF71FD] to-[#688BFF] opacity-0 group-hover:opacity-100 transition"></div>
                </div>
            @endforeach
        </div>

        <!-- CTA inline -->
        <div class="mt-24 flex flex-col items-center gap-4 reveal" style="--reveal-delay:180ms">
            <a href="#signup" class="inline-flex items-center rounded-full px-8 py-4 font-bold text-white bg-[#BB3381] shadow hover:opacity-90 focus-visible:outline focus-visible:outline-offset-2 focus-visible:outline-fuchsia-500 transition text-[15px]">Essayer avec mes photos</a>
            <p class="text-[12px] text-[#6F757C] font-medium font-europa">Aucun abonnement forcé • Crédits offerts</p>
        </div>
    </div>
</section>

@push('styles')
<style>
    #galerie .compare-block .after-img { will-change: clip-path; transition:none; }
    #galerie .compare-block input[type=range]{ -webkit-appearance:none; appearance:none; }
    #galerie .compare-block input[type=range]::-webkit-slider-thumb{ -webkit-appearance:none; width:32px; height:100%; }
    #galerie .compare-block input[type=range]::-moz-range-thumb{ width:32px; height:100%; }
    #galerie .compare-block .compare-tag{ opacity:1; }
    #galerie .galerie-filter.is-active{ box-shadow:0 0 0 1px #BB3381 inset; }
    #galerie-featured[data-filtering="true"]{ opacity:.55; pointer-events:none; }
    @media (prefers-reduced-motion: reduce){
        #galerie .compare-block .after-img { clip-path:inset(0 0 0 0)!important; }
        #galerie .compare-block input, #galerie .compare-block .handle { display:none; }
    }
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', ()=>{
    // Compare sliders (labels always visible now)
    document.querySelectorAll('#galerie .compare-block').forEach(block => {
        const range = block.querySelector('input[type=range]');
        const after = block.querySelector('.after-img');
        const handle = block.querySelector('.handle');
        if(!range || !after) return;
        function update(){
            const v = parseInt(range.value,10);
            after.style.clipPath = `inset(0 0 0 ${v}%)`;
            if(handle) handle.style.left = v + '%';
        }
        range.addEventListener('input', update, { passive:true });
        update();
    });

    // Filtering
    const filterButtons = Array.from(document.querySelectorAll('#galerie .galerie-filter'));
    const cards = Array.from(document.querySelectorAll('#galerie-featured .galerie-card'));
    const container = document.getElementById('galerie-featured');
    filterButtons.forEach(btn => {
        btn.addEventListener('click', ()=>{
            filterButtons.forEach(b=>b.classList.remove('is-active','bg-[#BB3381]','text-white','border-[#BB3381]'));
            btn.classList.add('is-active','bg-[#BB3381]','text-white','border-[#BB3381]');
            const val = btn.dataset.filter;
            container.setAttribute('data-filtering','true');
            requestAnimationFrame(()=>{
                cards.forEach(c => {
                    if(val==='tous' || c.dataset.cat===val){
                        c.classList.remove('hidden');
                    } else {
                        c.classList.add('hidden');
                    }
                });
                container.removeAttribute('data-filtering');
            });
        });
    });
});
</script>
@endpush
