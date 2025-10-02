<!-- Section Comparaison (méthode range) -->
<section class="w-full py-20 reveal" data-reveal-fade style="background:#FAFAFA;">
    <div class="max-w-7xl mx-auto px-4 md:px-8">
    <div class="flex justify-center mb-6 reveal" style="--reveal-delay:40ms">
            <span class="inline-flex items-center gap-2 rounded-full bg-white px-5 py-1 font-medium text-[#354762] shadow-sm font-europa text-[13px]">
                Comment ça marche
            </span>
        </div>
    <h2 class="text-center font-bold leading-tight tracking-tight text-[#354762] font-europa text-4xl md:text-5xl reveal" style="--reveal-delay:80ms">Shootez, transformez, vendez</h2>
    <p class="mt-4 text-center text-[#AAAAAA] font-europa font-medium text-[15px] md:text-[16px] reveal" style="--reveal-delay:120ms">Un clic suffit pour transformer vos photos produits en visuels prêts pour votre boutique en ligne</p>

        @php
            $items = [
                ['before' => 'shirt.jpg', 'after' => 'shirt-after.jpg', 'alt' => 'Chemise transformé', 'label' => 'Chemise'],
                ['before' => 'vinyl.jpg', 'after' => 'vinyl-after.png', 'alt' => 'Vinyle transformé', 'label' => 'Vinyle'],
                ['before' => 'card.jpg', 'after' => 'card-after.jpg', 'alt' => 'Carte transformée', 'label' => 'Carte'],
                ['before' => 'sandwich.jpg', 'after' => 'sandwich-after.jpg', 'alt' => 'Sandwich transformée', 'label' => 'Sandwich'],
            ];
        @endphp

        <div class="mt-14 mx-auto max-w-6xl grid gap-10 sm:grid-cols-2 lg:grid-cols-4 reveal-stagger-parent" id="compare-intro-grid">
            @foreach($items as $i => $item)
                @php
                    $beforeExists = file_exists(public_path('images/'.$item['before']));
                    $afterExists  = file_exists(public_path('images/'.$item['after']));
                @endphp
                <figure class="reveal group relative rounded-2xl border border-[#E6E8EC] bg-white shadow-sm hover:shadow-md transition overflow-hidden flex flex-col" style="--reveal-delay: {{ 160 + $i*70 }}ms" aria-label="Comparaison {{ $item['alt'] }}">
                    <div class="relative aspect-[4/5] compare-block cursor-col-resize">
                        @if($beforeExists)
                            <img src="{{ asset('images/'.$item['before']) }}" alt="Avant - {{ $item['alt'] }}" class="absolute inset-0 w-full h-full object-cover" loading="lazy" />
                        @else
                            <div class="absolute inset-0 flex items-center justify-center text-[11px] text-slate-500 p-2">{{ $item['before'] }}</div>
                        @endif
                        @if($afterExists)
                            <img src="{{ asset('images/'.$item['after']) }}" alt="Après - {{ $item['alt'] }}" class="after-img absolute inset-0 w-full h-full object-cover" style="clip-path:inset(0 0 0 55%);" loading="lazy" />
                        @else
                            <div class="after-img absolute inset-0 flex items-center justify-center text-[11px] text-slate-500 bg-slate-100 p-2" style="clip-path:inset(0 0 0 55%);">{{ $item['after'] }}</div>
                        @endif
                        <div class="handle pointer-events-none absolute top-0 bottom-0 left-[55%] -translate-x-1/2 w-[2px] bg-white/80 after:absolute after:top-1/2 after:-translate-y-1/2 after:left-1/2 after:-translate-x-1/2 after:w-8 after:h-8 after:rounded-full after:bg-white after:shadow after:border after:border-[#E2E6EB]"></div>
                        <input type="range" min="0" max="100" value="55" class="absolute inset-0 w-full h-full opacity-0" aria-label="Comparer {{ $item['alt'] }}" />
                        <span class="absolute top-2 left-2 text-[10px] font-semibold px-2 py-0.5 rounded-full bg-white/85 backdrop-blur text-[#354762]">Avant</span>
                        <span class="absolute top-2 right-2 text-[10px] font-semibold px-2 py-0.5 rounded-full bg-gradient-to-r from-[#FFC978] via-[#FF71FD] to-[#688BFF] text-white shadow">Après</span>
                    </div>
                    <figcaption class="p-4 font-europa text-[12px] text-[#354762] flex items-center justify-between font-semibold">
                        <span>{{ $item['label'] }}</span>
                        <span class="text-[10px] font-medium text-[#6F757C]">Avant → Après</span>
                    </figcaption>
                    <div class="h-1 w-full bg-gradient-to-r from-[#FFC978] via-[#FF71FD] to-[#688BFF] opacity-0 group-hover:opacity-100 transition"></div>
                </figure>
            @endforeach
        </div>
    </div>
</section>

@push('styles')
<style>
    #compare-intro-grid .compare-block .after-img { will-change: clip-path; transition:none; }
    #compare-intro-grid .compare-block input[type=range]{ -webkit-appearance:none; appearance:none; }
    #compare-intro-grid .compare-block input[type=range]::-webkit-slider-thumb{ -webkit-appearance:none; width:32px; height:100%; }
    #compare-intro-grid .compare-block input[type=range]::-moz-range-thumb{ width:32px; height:100%; }
    @media (prefers-reduced-motion: reduce){
        #compare-intro-grid .compare-block .after-img { clip-path:inset(0 0 0 0)!important; }
        #compare-intro-grid .compare-block input, #compare-intro-grid .compare-block .handle { display:none; }
    }
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('#compare-intro-grid .compare-block').forEach(block => {
        const range = block.querySelector('input[type=range]');
        const after = block.querySelector('.after-img');
        const handle = block.querySelector('.handle');
        if(!range || !after) return;
        function update(){
            const v = range.value;
            after.style.clipPath = `inset(0 0 0 ${v}%)`;
            if(handle) handle.style.left = v + '%';
        }
        range.addEventListener('input', update, { passive: true });
        update();
    });
});
</script>
@endpush
