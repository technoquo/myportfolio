@props(['porfolio'])

<x-panel class="flex gap-x-6">


    <div class="flex-1 flex flex-col">


        <h3 class="font-bold text-xl mt-3 transition-colors duration-300 dark:text-white">
            <a href="{{ $porfolio->url }}" target="_blank">
                {{ $porfolio->title }}
            </a>
        </h3>
        <p class="text-sm text-gray-400 mt-auto">{{ $porfolio->{'description_' . session('locale')} }}</p>
    </div>


    <div>
        @foreach ($porfolio->tags as $tag)
            <x-tag tag="{{ $tag->name }}" />
        @endforeach
    </div>
</x-panel>
