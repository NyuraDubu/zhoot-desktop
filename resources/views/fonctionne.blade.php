<!-- Fonctionnement Section (3 étapes simples) -->
<section id="fonctionnement" class="w-full py-24 bg-[#FFFFFF] reveal" data-reveal-fade>
    <div class="max-w-6xl mx-auto px-4 md:px-8">
        <!-- Heading -->
    <div class="text-center reveal" style="--reveal-delay:40ms">
            <h2 class="font-europa font-bold text-[#354762] text-3xl md:text-5xl leading-tight tracking-tight">
                Comment ça marche ? En 3 étapes simples
            </h2>
            <p class="mt-6 text-[#6F757C] font-europa font-medium text-[15px] md:text-[17px]">
                En 3 étapes simples, c'est tout. Pas besoin de photographe, pas besoin de prompt compliqué.
            </p>
        </div>

        @php
            $steps = [
                [
                    'num' => 1,
                    'title' => 'Importez une photo de votre produit',
                    'desc' => 'Une simple photo prise au smartphone suffit.',
                ],
                [
                    'num' => 2,
                    'title' => 'Choisissez un fond et une pose',
                    'desc' => 'Sélectionnez un style, un décor ou un contexte adapté à votre niche.',
                ],
                [
                    'num' => 3,
                    'title' => 'Téléchargez votre visuel prêt à vendre',
                    'desc' => 'L’image est optimisée pour vos fiches produits et marketplaces.',
                ],
            ];
        @endphp

        <!-- Steps -->
        <ol class="mt-20 grid gap-10 md:grid-cols-3 md:gap-12 counter-reset-steps reveal-stagger-parent">
            @foreach($steps as $i => $s)
                <li class="relative flex flex-col reveal" style="--reveal-delay: {{ 120 + $i*90 }}ms">
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-gradient-to-br from-[#FFC978] via-[#FF71FD] to-[#688BFF] text-white font-bold flex items-center justify-center text-lg shadow">
                            {{ $s['num'] }}
                        </div>
                        <div>
                            <h3 class="font-europa font-semibold text-[#354762] text-lg leading-snug">{{ $s['title'] }}</h3>
                            <p class="mt-2 text-[14px] text-[#6F757C] leading-relaxed">{{ $s['desc'] }}</p>
                        </div>
                    </div>
                    <div class="mt-6 h-px w-full bg-gradient-to-r from-[#FFC978] via-[#FF71FD] to-[#688BFF] opacity-40 md:hidden"></div>
                </li>
            @endforeach
        </ol>
    </div>
</section>
