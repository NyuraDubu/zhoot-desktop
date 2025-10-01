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
                ['before' => 'shirt-before.png', 'after' => 'shirt-after.png', 'alt' => 'T-shirt transformé'],
                ['before' => 'vinyl.jpg', 'after' => 'vinyl-after.png', 'alt' => 'Casquette transformée'],
                ['before' => 'before3.jpg', 'after' => 'after3.jpg', 'alt' => 'Figurine transformée'],
            ];
        @endphp

    <div class="mt-14 mx-auto max-w-5xl grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12 justify-items-center reveal-stagger-parent">
            @foreach($items as $i => $item)
                @php
                    $beforeExists = file_exists(public_path('images/'.$item['before']));
                    $afterExists  = file_exists(public_path('images/'.$item['after']));
                @endphp
                <figure class="mx-auto w-full max-w-[240px] reveal" style="--reveal-delay: {{ 160 + $i*80 }}ms" aria-label="Comparaison {{ $item['alt'] }}">
                    <div class="relative group rounded-md overflow-hidden shadow-sm bg-white aspect-[3/4] compare" data-index="{{ $i }}">
                        @if($beforeExists)
                            <img src="{{ asset('images/'.$item['before']) }}" alt="Avant - {{ $item['alt'] }}" class="absolute inset-0 w-full h-full object-cover" loading="lazy">
                        @else
                            <div class="absolute inset-0 flex items-center justify-center text-center text-xs text-slate-500 p-3">Manque<br>{{ $item['before'] }}</div>
                        @endif
                        @if($afterExists)
                            <img src="{{ asset('images/'.$item['after']) }}" alt="Après - {{ $item['alt'] }}" class="after-img absolute inset-0 h-full w-full object-cover" loading="lazy" style="clip-path:inset(0 0 0 50%);">
                        @else
                            <div class="after-img absolute inset-0 flex items-center justify-center text-center text-xs text-slate-500 bg-slate-100 p-3" style="clip-path:inset(0 0 0 50%);">Manque<br>{{ $item['after'] }}</div>
                        @endif
                        <!-- Handle visuel -->
                        <div class="handle pointer-events-none absolute top-0 bottom-0 left-1/2 -translate-x-1/2 w-[2px] bg-white/70 after:absolute after:top-1/2 after:-translate-y-1/2 after:left-1/2 after:-translate-x-1/2 after:w-10 after:h-10 after:rounded-full after:bg-white after:shadow after:border after:border-[#E2E6EB] flex items-center justify-center">
                            <div class="absolute top-1/2 -translate-y-1/2 -left-4 w-2 h-2 border-t-2 border-l-2 rotate-45 border-[#354762]"></div>
                            <div class="absolute top-1/2 -translate-y-1/2 -right-4 w-2 h-2 border-b-2 border-r-2 rotate-45 border-[#354762]"></div>
                        </div>
                        <input type="range" min="0" max="100" value="50" aria-label="Position de comparaison" class="range absolute inset-0 w-full h-full opacity-0 cursor-col-resize" data-index="{{ $i }}">
                    </div>
                </figure>
            @endforeach
        </div>
    </div>
</section>

@push('styles')
<style>
    .compare { --pos:50%; }
    .compare .after-img { will-change: clip-path; }
    /* Suppression de toute transition pour réponse instantanée */
    .compare input[type=range] { -webkit-appearance:none; appearance:none; }
    .compare input[type=range]:focus { outline:none; }
    .compare input[type=range]::-webkit-slider-thumb { -webkit-appearance:none; appearance:none; width:32px; height:100%; cursor:col-resize; }
    .compare input[type=range]::-moz-range-thumb { width:32px; height:100%; cursor:col-resize; }
    .compare input[type=range]::-webkit-slider-runnable-track { height:100%; }
    .compare input[type=range]::-moz-range-track { height:100%; }
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.compare').forEach(wrapper => {
        const range = wrapper.querySelector('.range');
        const after = wrapper.querySelector('.after-img');
        if(!range || !after) return;
        function update(){
            const v = range.value;
            after.style.clipPath = `inset(0 0 0 ${v}%)`;
            const handle = wrapper.querySelector('.handle');
            if(handle) handle.style.left = v + '%';
        }
        range.addEventListener('input', update, { passive: true });
        update();
    });
});
</script>
@endpush
