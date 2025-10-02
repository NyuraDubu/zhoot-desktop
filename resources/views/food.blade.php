<!-- Section dédiée Food / Delivery Platforms -->
<section id="food" class="w-full py-28 sm:py-32 bg-[#FAFAFA] relative overflow-hidden reveal" data-reveal-fade>
	<div class="pointer-events-none absolute inset-0 opacity-[0.08] [mask-image:radial-gradient(circle_at_center,black,transparent_70%)]">
		<div class="absolute -top-40 -left-32 w-[32rem] h-[32rem] rounded-full bg-gradient-to-br from-[#FFC978]/50 via-[#FF71FD]/40 to-[#688BFF]/40 blur-3xl"></div>
		<div class="absolute top-1/3 -right-40 w-[28rem] h-[28rem] rounded-full bg-gradient-to-tr from-[#688BFF]/40 via-[#FF71FD]/30 to-[#FFC978]/40 blur-3xl"></div>
	</div>

	<div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8 relative">
		<!-- Heading -->
		<div class="text-center reveal" style="--reveal-delay:40ms">
			<span class="inline-flex items-center gap-2 rounded-full bg-white/70 backdrop-blur px-4 sm:px-5 py-1 font-medium text-[#354762] shadow-sm font-europa text-[12px] sm:text-[13px]">Food & Livraison</span>
			<h2 class="mt-4 sm:mt-6 font-europa font-bold text-[#354762] text-2xl sm:text-3xl md:text-5xl leading-tight tracking-tight">
				Des visuels qui donnent faim et font cliquer
			</h2>
			<p class="mt-4 sm:mt-5 text-[#6F757C] font-europa font-medium text-sm sm:text-[15px] md:text-[17px]">
				Boostez votre menu sur Uber Eats, Deliveroo ou votre propre site grâce à des photos optimisées pour l'appétit & la conversion.
			</p>
		</div>

		@php
			$foodPairs = [
				['before' => 'pokebowl.jpg', 'after' => 'pokebowl-after.jpg', 'label' => 'Bowl healthy', 'gain' => '+37% CTR listing', 'desc' => 'Couleurs ravivées, composition recentrée, lumière homogène'],
				['before' => 'burger.jpeg', 'after' => 'burger-after.jpg', 'label' => 'Burger signature', 'gain' => '+22% conversions', 'desc' => 'Fond neutralisé, contraste maîtrisé, relief accentué'],
                ['before' => 'dessert.jpeg', 'after' => 'dessert-after.jpg', 'label' => 'Dessert visuel', 'gain' => '+18% panier moyen', 'desc' => 'Texture mise en avant, tons sucrés équilibrés, présentation plus gourmande et attrayante'],
				['before' => 'salade.jpg', 'after' => 'salade-after.jpg', 'label' => 'Salade fraîche', 'gain' => '+15% vues', 'desc' => 'Verts saturés sans artifices, fond propre & lumineux'],
			];
		@endphp

		<!-- Grille alignée (remplace le carrousel horizontal) -->
		<div class="mt-16 sm:mt-20 grid gap-8 sm:gap-10 sm:grid-cols-2 lg:grid-cols-4 reveal-stagger-parent" id="food-featured">
			@foreach($foodPairs as $i => $p)
				@php $b = file_exists(public_path('images/'.$p['before'])); $a = file_exists(public_path('images/'.$p['after'])); @endphp
				<figure class="reveal group relative rounded-2xl border border-[#E6E8EC] bg-white shadow-sm hover:shadow-md transition overflow-hidden flex flex-col" style="--reveal-delay: {{ 80 + $i*70 }}ms" aria-label="Comparaison {{ $p['label'] }}">
					<div class="relative aspect-[4/5] compare-block cursor-col-resize">
						@if($b)
							<img src="{{ asset('images/'.$p['before']) }}" alt="Avant - {{ $p['label'] }}" class="absolute inset-0 w-full h-full object-cover" loading="lazy" />
						@else
							<div class="absolute inset-0 flex items-center justify-center text-[11px] text-slate-500">{{ $p['before'] }}</div>
						@endif
						@if($a)
							<img src="{{ asset('images/'.$p['after']) }}" alt="Après - {{ $p['label'] }}" class="after-img absolute inset-0 w-full h-full object-cover" style="clip-path:inset(0 0 0 55%);" loading="lazy" />
						@else
							<div class="after-img absolute inset-0 flex items-center justify-center text-[11px] text-slate-500 bg-slate-100" style="clip-path:inset(0 0 0 55%);">{{ $p['after'] }}</div>
						@endif
						<div class="handle pointer-events-none absolute top-0 bottom-0 left-[55%] -translate-x-1/2 w-[2px] bg-white/80 after:absolute after:top-1/2 after:-translate-y-1/2 after:left-1/2 after:-translate-x-1/2 after:w-8 after:h-8 after:rounded-full after:bg-white after:shadow after:border after:border-[#E2E6EB]"></div>
						<input type="range" min="0" max="100" value="55" class="absolute inset-0 w-full h-full opacity-0" aria-label="Comparer {{ $p['label'] }}" />
						<span class="absolute top-2 left-2 text-[10px] font-semibold px-2 py-0.5 rounded-full bg-white/85 backdrop-blur text-[#354762]">Avant</span>
						<span class="absolute top-2 right-2 text-[10px] font-semibold px-2 py-0.5 rounded-full bg-gradient-to-r from-[#FFC978] via-[#FF71FD] to-[#688BFF] text-white shadow">Après</span>
					</div>
					<figcaption class="p-4 font-europa text-[12px] text-[#354762] flex flex-col gap-1">
						<div class="flex items-center justify-between font-semibold">
							<span>{{ $p['label'] }}</span>
							<span class="text-[10px] font-medium text-[#BB3381] bg-[#BB3381]/10 px-2 py-0.5 rounded-full">{{ $p['gain'] }}</span>
						</div>
						<p class="text-[#6F757C] text-[11px] leading-snug">{{ $p['desc'] }}</p>
					</figcaption>
					<div class="h-1 w-full bg-gradient-to-r from-[#FFC978] via-[#FF71FD] to-[#688BFF] opacity-0 group-hover:opacity-100 transition"></div>
				</figure>
			@endforeach
		</div>

		<!-- 3 columns value propositions -->
		<div class="mt-24 sm:mt-28 grid gap-10 sm:gap-12 md:grid-cols-3">
			<div class="reveal p-6 rounded-2xl bg-white border border-[#E6E8EC] shadow-sm" style="--reveal-delay:40ms">
				<h3 class="font-europa font-semibold text-[#354762] text-lg mb-4">Pour vos menus</h3>
				<ul class="space-y-2 text-[14px] text-[#526071] font-europa">
					<li>• Uniformisation visuelle des plats</li>
					<li>• Accent sur texture & fraîcheur</li>
					<li>• Fond cohérent compatible multi-plateformes</li>
					<li>• Prêt pour déclinaisons saisonnières</li>
				</ul>
			</div>
			<div class="reveal p-6 rounded-2xl bg-white border border-[#E6E8EC] shadow-sm" style="--reveal-delay:100ms">
				<h3 class="font-europa font-semibold text-[#354762] text-lg mb-4">Résultats mesurables</h3>
				<ul class="space-y-2 text-[14px] text-[#526071] font-europa">
					<li>• +CTR catalogue / listing</li>
					<li>• +Ajouts panier impulsifs</li>
					<li>• Meilleure perception qualité</li>
					<li>• Diminution du temps de production</li>
				</ul>
			</div>
			<div class="reveal p-6 rounded-2xl bg-white border border-[#E6E8EC] shadow-sm" style="--reveal-delay:160ms">
				<h3 class="font-europa font-semibold text-[#354762] text-lg mb-4">Pensé pour Uber Eats</h3>
				<ul class="space-y-2 text-[14px] text-[#526071] font-europa">
					<li>• Ratio & lisibilité optimisés</li>
					<li>• Couleurs non saturées artificiellement</li>
					<li>• Fichiers légers & rapides</li>
					<li>• Cohérence pour top listings</li>
				</ul>
			</div>
		</div>

		<!-- CTA -->
		<div class="mt-16 sm:mt-20 flex flex-col items-center gap-4 reveal" style="--reveal-delay:220ms">
			<a href="#signup" class="inline-flex items-center rounded-full px-9 py-4 font-bold text-white bg-[#BB3381] shadow hover:opacity-90 focus-visible:outline focus-visible:outline-offset-2 focus-visible:outline-fuchsia-500 transition text-[16px]">
				Améliorer mes visuels menu
			</a>
			<p class="text-[12px] text-[#6F757C] font-medium font-europa">Crédits offerts au démarrage • Pas d'abonnement auto</p>
		</div>
	</div>
</section>

@push('styles')
<style>
	#food .compare-block .after-img { will-change: clip-path; transition:none; }
	#food .compare-block input[type=range] { -webkit-appearance:none; appearance:none; }
	#food .compare-block input[type=range]::-webkit-slider-thumb { -webkit-appearance:none; width:32px; height:100%; }
	#food .compare-block input[type=range]::-moz-range-thumb { width:32px; height:100%; }
	@media (prefers-reduced-motion: reduce){
		#food .compare-block .after-img { clip-path:inset(0 0 0 0)!important; }
		#food .compare-block input, #food .compare-block .handle { display:none; }
	}
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', () => {
	// Support legacy class .compare-tile and new .compare-block
	const blocks = document.querySelectorAll('#food .compare-block, #food .compare-tile');
	blocks.forEach(block => {
		const range = block.querySelector('input[type=range]');
		const after = block.querySelector('.after-img');
		const handle = block.querySelector('.handle');
		if(!range || !after) return;
		function update(){
			const v = range.value;
			after.style.clipPath = `inset(0 0 0 ${v}%)`;
			if(handle) handle.style.left = v + '%';
		}
		range.addEventListener('input', update, { passive:true });
		update();
	});
});
</script>
@endpush
