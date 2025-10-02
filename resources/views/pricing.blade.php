<!-- Mini Pricing Section -->
<section id="pricing" class="w-full py-24 bg-[#FAFAFA] reveal" data-reveal-fade>
    <div class="max-w-5xl mx-auto px-4 sm:px-6 md:px-8">
    <div class="max-w-2xl mx-auto text-center reveal" style="--reveal-delay:40ms">
            <h2 class="font-europa font-bold text-[#354762] text-3xl md:text-5xl leading-tight tracking-tight flex items-center justify-center gap-3">
                <span>Packs de crédits simples</span>
            </h2>
            <p class="mt-5 text-[#6F757C] font-europa font-medium text-[15px] md:text-[17px]">
                Achetez des packs de crédits à l'unité. Pas d'abonnement, pas d'engagement.
            </p>
        </div>

        @php
            $plans = [
                ['name' => 'Découverte', 'ideal' => "Tester (3 crédits inclus)", 'price' => '0€', 'credits' => '3 crédits'],
                ['name' => 'Pack 20', 'ideal' => 'Premiers visuels', 'price' => '9€', 'credits' => '20 crédits'],
                ['name' => 'Pack 80', 'ideal' => 'Lancement boutique', 'price' => '29€', 'credits' => '80 crédits'],
                ['name' => 'Pack 250', 'ideal' => 'Croissance produits', 'price' => '79€', 'credits' => '250 crédits'],
                ['name' => 'Pack 500', 'ideal' => 'Catalogue important', 'price' => '149€', 'credits' => '500 crédits'],
                ['name' => 'Enterprise', 'ideal' => 'Volume > 2k images', 'price' => 'Sur devis', 'credits' => 'Custom'],
            ];
        @endphp

        <!-- Table -->
    <!-- Desktop / larger table -->
    <div class="mt-12 sm:mt-14 overflow-hidden rounded-2xl border border-[#E6E8EC] bg-white shadow-sm reveal hidden sm:block" style="--reveal-delay:120ms">
        <table class="w-full border-collapse font-europa text-left">
                <thead class="bg-[#F8F9FB] text-[#354762] text-[12px] md:text-[13px] uppercase tracking-wide font-semibold">
                    <tr>
                        <th class="py-3 pl-5 pr-4">Pack</th>
                        <th class="py-3 px-4">Usage</th>
                        <th class="py-3 px-4 text-right">Crédits</th>
                        <th class="py-3 px-4 text-right">Prix</th>
                        <th class="py-3 px-4 text-right">/ crédit</th>
                    </tr>
                </thead>
                <tbody class="text-[14px] md:text-[15px] text-[#354762]">
                    @foreach($plans as $plan)
                        @php
                            $unit = (is_numeric(str_replace('€','',$plan['price'])) && is_numeric(preg_replace('/\D/','',$plan['credits'] ?? '')))
                                ? number_format(((float)str_replace('€','',$plan['price'])) / (int)preg_replace('/\D/','',$plan['credits']), 2, ',', ' ') . '€'
                                : '—';
                        @endphp
                        <tr class="group border-t border-[#F0F1F3] hover:bg-[#FAFAFA] transition">
                            <td class="py-4 pl-5 pr-4 font-semibold">{{ $plan['name'] }}</td>
                            <td class="py-4 px-4 text-[#6F757C]">{{ $plan['ideal'] }}</td>
                            <td class="py-4 px-4 text-right font-medium">{{ $plan['credits'] }}</td>
                            <td class="py-4 px-4 text-right font-medium">{{ $plan['price'] }}</td>
                            <td class="py-4 px-4 text-right text-[#6F757C] text-[13px]">{{ $unit }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Mobile cards -->
        <div class="mt-10 grid gap-4 sm:hidden" aria-label="Packs de crédits (mobile)">
            @foreach($plans as $plan)
                @php
                    $unit = (is_numeric(str_replace('€','',$plan['price'])) && is_numeric(preg_replace('/\D/','',$plan['credits'] ?? '')))
                        ? number_format(((float)str_replace('€','',$plan['price'])) / (int)preg_replace('/\D/','',$plan['credits']), 2, ',', ' ') . '€'
                        : '—';
                @endphp
                <div class="rounded-xl border border-[#E6E8EC] bg-white p-4 shadow-sm flex flex-col gap-2 font-europa">
                    <div class="flex items-center justify-between">
                        <h3 class="font-semibold text-[#354762] text-sm">{{ $plan['name'] }}</h3>
                        <span class="text-[#354762] font-semibold text-sm">{{ $plan['price'] }}</span>
                    </div>
                    <p class="text-[11px] text-[#6F757C]">{{ $plan['ideal'] }}</p>
                    <div class="flex items-center justify-between text-[12px] mt-1">
                        <span class="font-medium text-[#354762]">{{ $plan['credits'] }}</span>
                        <span class="text-[#6F757C]">{{ $unit }}/crédit</span>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- CTA -->
        <div class="mt-10 flex flex-col items-center gap-3 reveal" style="--reveal-delay:200ms">
            <a href="#signup" class="inline-flex items-center rounded-full px-8 py-3 font-bold text-white bg-[#BB3381] shadow hover:opacity-90 focus-visible:outline focus-visible:outline-offset-2 focus-visible:outline-fuchsia-500 transition" style="font-size:16px;">Créer mon compte (3 gratuits)</a>
            <p class="text-[13px] text-[#6F757C] font-medium">Crédits utilisables à vie • Aucun renouvellement automatique</p>
        </div>
    </div>
</section>
