<!-- Hero Section Extracted -->
<section class="relative overflow-hidden reveal" data-reveal-fade>
    <div class="hero-gradient-bg pointer-events-none absolute inset-0 -z-10"></div>

    <div class="pt-10 pb-6">
        <!-- Badge -->
        <div class="flex justify-center mb-6 reveal" style="--reveal-delay:40ms">
            <span class="inline-flex items-center gap-2 rounded-full bg-white backdrop-blur px-5 py-1 font-medium text-[#354762] shadow-sm font-europa" style="font-size:16px;">
                Zhoot it !
            </span>
        </div>

        <!-- Title -->
        <h1 class="text-center font-bold leading-tight tracking-tight text-[#354762] font-europa reveal px-4 sm:px-0" style="font-size:56px; --reveal-delay:80ms">
            Des visuels <span class="bg-gradient-to-r from-[#FFC978] via-[#FF71FD] to-[#688BFF] bg-clip-text text-transparent">irrésistibles</span> pour vendre plus vite
        </h1>
        <p class="mt-5 text-center text-[#87898D] font-europa font-medium reveal px-4 sm:px-0" style="font-size:22px; --reveal-delay:120ms">
            Prenez une photo, Zhoot la transforme en visuel e-commerce propre et prêt à vendre
        </p>

        <!-- Primary CTA -->
        <div class="mt-8 flex flex-col items-center gap-3 reveal" style="--reveal-delay:160ms">
            <a href="#signup" class="inline-flex items-center rounded-full px-8 py-3 font-bold text-white bg-[#BB3381] shadow hover:opacity-90 focus-visible:outline focus-visible:outline-offset-2 focus-visible:outline-fuchsia-500 transition" style="font-size:17px;">
                Commencer à créer gratuitement
            </a>
            <p class="text-[13px] text-[#6F757C] font-medium">
                <span class="text-[#6F757C] font-extrabold">3 crédits offerts</span> - Aucune carte de crédit requise
            </p>
        </div>

        <!-- Infinite Auto Carousel -->
        <div class="mt-14 md:mt-16 space-y-8 reveal" style="--reveal-delay:200ms">
            @php
                $row1 = ['cap.png','jeans.png','hoodie.png','cap2.png','cap.png','hoodie.png','jeans.png'];
            @endphp
            <div class="relative overflow-hidden group reveal" style="--reveal-delay:240ms">
                <div class="carousel-row" aria-label="Produits ligne 1">
                    @foreach(array_merge($row1,$row1) as $img)
                        <figure class="carousel-item">
                            <img src="{{ asset('images/'.$img) }}" alt="Produit" loading="lazy" />
                        </figure>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Logos row -->
        <div class="mt-14 md:mt-16 flex flex-wrap items-center justify-center gap-y-6 opacity-90 reveal" style="--reveal-delay:280ms">
            <p class="text-[13px] uppercase tracking-wide font-semibold text-[#354762] mb-0 mr-8">
                Ils utilisent déjà Zhoot
            </p>
            @foreach(['Kappa.svg', 'SFP.svg', 'RCS.svg', 'FCN.svg', 'OM.svg'] as $logo)
                <div class="h-10 w-16 flex items-center justify-center">
                    <img src="{{ asset('images/' . $logo) }}" alt="Logo {{ pathinfo($logo, PATHINFO_FILENAME) }}" class="h-10 max-w-full object-contain" loading="lazy" />
                </div>
            @endforeach
        </div>
    </div>
</section>
