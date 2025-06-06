<div class="flex flex-col w-full justify-start p-3 gap-2">
    <div class="flex flex-col text-center w-full justify-center gap-2 items-center">
        <x-atoms.logo class="h-14"/>
        <h1 class="text-3xl font-bold">
            <div>Sebastian Schulz</div>
            <div class="text-xl">{{__('titles.mainHeader')}}</div>
        </h1>
    </div>
    <x-atoms.teaser>
        {{ __('content.teaserText')  }}
    </x-atoms.teaser>
</div>
