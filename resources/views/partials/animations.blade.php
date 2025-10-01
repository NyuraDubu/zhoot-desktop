@once
@push('styles')
<style>
    /* Generic reveal animation tokens */
    .reveal { opacity:0; transform:translateY(18px); transition:opacity .7s cubic-bezier(.4,.1,.2,1), transform .7s cubic-bezier(.4,.1,.2,1); will-change: transform, opacity; }
    .reveal[data-reveal-scale] { transform:scale(.92); }
    .reveal[data-reveal-fade] { transform:none; opacity:0; }
    .reveal.is-visible { opacity:1; transform:translateY(0); }
    .reveal.is-visible[data-reveal-scale] { transform:scale(1); }
    .reveal.is-visible[data-reveal-fade] { opacity:1; }
    .reveal-stagger-parent > .reveal { transition-delay: var(--reveal-delay, 0ms); }
    @media (prefers-reduced-motion: reduce){
        .reveal, .reveal[data-reveal-scale], .reveal[data-reveal-fade] { opacity:1 !important; transform:none !important; transition:none !important; }
    }
</style>
@endpush

@push('scripts')
<script>
(function(){
    if(window.__GLOBAL_REVEAL_OBSERVER__) return; // singleton
    document.addEventListener('DOMContentLoaded', () => {
        const els = document.querySelectorAll('.reveal');
        if(!('IntersectionObserver' in window)) {
            els.forEach(e=>e.classList.add('is-visible'));
            return;
        }
        const io = new IntersectionObserver((entries)=>{
            entries.forEach(entry => {
                if(entry.isIntersecting){
                    entry.target.classList.add('is-visible');
                    io.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15 });
        els.forEach(e=> io.observe(e));
    });
    window.__GLOBAL_REVEAL_OBSERVER__ = true;
})();
</script>
@endpush
@endonce
