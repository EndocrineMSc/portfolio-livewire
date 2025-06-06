<button class="absolute top-3 right-5 hover:scale-105 active:scale-110 active:rotate-4"
        aria-label="{{__('labels.langButton')}}"
        wire:click="changeAppLocale"
        >
    @if (app()->currentLocale() === 'en')
        <span class="fi fi-de scale-200"></span>
    @else
        <span class="fi fi-gb scale-200"></span>
    @endif
</button>
