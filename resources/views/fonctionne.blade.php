<!-- Fonctionnement Section (3 étapes simples) -->
<section id="fonctionnement" class="w-full py-24 sm:py-28 bg-[#FFFFFF] reveal" data-reveal-fade>
    <div class="max-w-6xl mx-auto px-4 sm:px-6 md:px-8">
        <!-- Heading -->
        <div class="text-center reveal" style="--reveal-delay:40ms">
            <h2 class="font-europa font-bold text-[#354762] text-2xl sm:text-3xl md:text-5xl leading-tight tracking-tight">
                Comment ça marche ? En 3 étapes simples
            </h2>
            <p class="mt-5 sm:mt-6 text-[#6F757C] font-europa font-medium text-sm sm:text-[15px] md:text-[17px]">
                En 3 étapes simples, c'est tout. Pas besoin de photographe, pas besoin de prompt compliqué.
            </p>
        </div>

        @php
            $steps = [
                [
                    'num' => 1,
                    'title' => 'Importez une photo de votre produit',
                    'desc' => 'Une simple photo prise au smartphone suffit.',
                    'img'  => 'hoodie1.jpg',
                ],
                [
                    'num' => 2,
                    'title' => 'Choisissez un fond et une pose',
                    'desc' => 'Sélectionnez un style, un décor ou un contexte adapté à votre niche.',
                    'img'  => 'wizard.png',
                ],
                [
                    'num' => 3,
                    'title' => 'Téléchargez votre visuel prêt à vendre',
                    'desc' => 'L\'image est optimisée pour vos fiches produits et marketplaces.',
                    'img'  => 'hoodie1-after.jpg',
                ],
            ];
        @endphp

        <!-- Steps -->
    <ol class="mt-16 sm:mt-20 grid gap-10 sm:gap-12 md:grid-cols-3 counter-reset-steps reveal-stagger-parent">
            @foreach($steps as $i => $s)
                <li class="relative flex flex-col reveal" style="--reveal-delay: {{ 120 + $i*90 }}ms">
                    <div class="flex flex-col gap-4">
                        <div class="w-full aspect-[4/3] rounded-xl overflow-hidden bg-slate-100 relative shadow-sm">
                            @php $imgFile = $s['img'] ?? null; $imgExists = $imgFile && file_exists(public_path('images/'.$imgFile)); @endphp
                            @if($imgExists)
                                <img src="{{ asset('images/'.$imgFile) }}" alt="Visuel étape {{ $s['num'] }}" class="absolute inset-0 w-full h-full object-cover" loading="lazy" />
                            @else
                                <div class="absolute inset-0 flex items-center justify-center text-[11px] text-slate-500">{{ $imgFile ?? 'image' }}</div>
                            @endif
                            <div class="absolute top-2 left-2 px-3 py-1 rounded-full bg-white/85 backdrop-blur text-[#354762] text-[11px] font-semibold shadow">Étape {{ $s['num'] }}</div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-gradient-to-br from-[#FFC978] via-[#FF71FD] to-[#688BFF] text-white font-bold flex items-center justify-center text-lg shadow">
                                {{ $s['num'] }}
                            </div>
                            <div>
                                <h3 class="font-europa font-semibold text-[#354762] text-base sm:text-lg leading-snug">{{ $s['title'] }}</h3>
                                <p class="mt-2 text-[13px] sm:text-[14px] text-[#6F757C] leading-relaxed">{{ $s['desc'] }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 h-px w-full bg-gradient-to-r from-[#FFC978] via-[#FF71FD] to-[#688BFF] opacity-40 md:hidden"></div>
                </li>
            @endforeach
        </ol>
    </div>
</section>
