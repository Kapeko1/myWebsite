<div>
    @foreach($events as $event)
        <div class="cd-timeline__block" wire:key="event-{{ $loop->index }}">
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
