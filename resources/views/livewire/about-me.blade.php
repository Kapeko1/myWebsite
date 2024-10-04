<div class="scroll-animation">
    @foreach($events as $event)
        <div class="cd-timeline__block element" wire:key="event-{{ $loop->index }}">
            <div class="cd-timeline__img">
                <img src="{{ Vite::asset('resources/img/'. $event['icon']) }}" alt="{{ $event['title'] }}">
            </div>
            <div class="cd-timeline__content text-component">
                <h2>{{ $event['title'] }}</h2>
                <div class="h-4"></div>
                <p>{{ $event['content'] }}</p>
                <span class="cd-timeline__date">{{ $event['date'] }}</span>
            </div>
        </div>
    @endforeach
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const elements = document.querySelectorAll('.scroll-animation .element');

        const observerOptions = {
            threshold: 0.4
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.intersectionRatio >= 0.4) {
                    entry.target.classList.add('visible');
                } else if (entry.boundingClientRect.top > window.innerHeight) {
                    entry.target.classList.remove('visible');
                }
            });
        }, observerOptions);

        elements.forEach(element => {
            observer.observe(element);
        });
    });

</script>
