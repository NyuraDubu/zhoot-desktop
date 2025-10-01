<!-- Témoignages & Logos Clients Section -->
<section id="avis" class="w-full py-24 bg-white reveal" data-reveal-fade>
    <div class="max-w-6xl mx-auto px-4 md:px-8">
    <div class="max-w-3xl mx-auto text-center reveal" style="--reveal-delay:40ms">
            <h2 class="font-europa font-bold text-[#354762] text-3xl md:text-5xl leading-tight tracking-tight flex items-center justify-center gap-3">
                <span>Ils utilisent déjà Zhoot</span>
            </h2>
            <p class="mt-5 text-[#6F757C] font-europa font-medium text-[15px] md:text-[17px]">
                Des marques, des créateurs et des commerçants font confiance à Zhoot pour leurs visuels.
            </p>
        </div>

        @php
            $testimonials = [
                [
                    'quote' => 'Avant je passais des heures à retoucher mes photos. Maintenant en 2 minutes j\'ai un rendu pro.',
                    'author' => 'Sarah',
                    'role' => 'Créatrice de bijoux'
                ],
                [
                    'quote' => 'Nos ventes en ligne ont bondi depuis qu\'on utilise Zhoot. Les clients disent que les photos donnent envie d\'acheter.',
                    'author' => 'Julien',
                    'role' => 'Shop streetwear'
                ],
                [
                    'quote' => 'On teste des dizaines d\'ambiances sans shooting physique. Énorme gain de temps pour lancer nos collections.',
                    'author' => 'Laura',
                    'role' => 'Brand manager mode'
                ],
            ];

            $logos = ['Kappa.svg','SFP.svg','RCS.svg','FCN.svg','OM.svg'];
        @endphp

        <!-- Testimonials -->
        <div class="mt-16 grid gap-8 md:grid-cols-3 reveal-stagger-parent" data-testimonials>
            @foreach($testimonials as $t)
                <figure class="testimonial reveal bg-white rounded-2xl p-6 shadow-sm border border-[#E6E8EC] flex flex-col relative overflow-hidden" style="--reveal-delay: {{ 120 + $loop->index * 90 }}ms">
                    <div class="absolute inset-0 pointer-events-none bg-gradient-to-br from-[#FFC978]/0 via-[#FF71FD]/0 to-[#688BFF]/0 opacity-0 testimonial-glow"></div>
                    <blockquote class="text-[15px] text-[#354762] leading-relaxed font-medium font-europa">
                        “{{ $t['quote'] }}”
                    </blockquote>
                    <figcaption class="mt-5 text-[13px] text-[#6F757C] font-europa">
                        — <span class="font-semibold text-[#354762]">{{ $t['author'] }}</span>, {{ $t['role'] }}
                    </figcaption>
                </figure>
            @endforeach
        </div>

        <!-- Logos -->
        <div class="mt-20 flex flex-wrap justify-center items-center gap-x-10 gap-y-8 opacity-90 reveal-stagger-parent" data-logos>
            @foreach($logos as $logo)
                <div class="h-10 w-20 flex items-center justify-center logo-item reveal" data-reveal-scale style="--reveal-delay: {{ 200 + $loop->index * 70 }}ms;">
                    <img src="{{ asset('images/'.$logo) }}" alt="Logo {{ pathinfo($logo, PATHINFO_FILENAME) }}" class="max-h-10 w-auto object-contain" loading="lazy" />
                </div>
            @endforeach
        </div>
    </div>
</section>

@push('styles')
<style>
    .testimonial { transition: opacity .55s cubic-bezier(.4,.1,.2,1), transform .55s cubic-bezier(.4,.1,.2,1); }
    .testimonial:hover .testimonial-glow { opacity:1; background:linear-gradient(135deg,#FFC97822,#FF71FD22,#688BFF22); transition:opacity .5s; }
    .testimonial-glow { transition:opacity .6s; }
    .logo-item { transition: opacity .55s cubic-bezier(.4,.1,.2,1), transform .55s cubic-bezier(.4,.1,.2,1); }
</style>
@endpush
