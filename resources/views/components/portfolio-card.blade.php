@props(['job'])
<x-panel class="flex flex-col text-center">
    <div class="self-start text-sm">{{ $job->employer->name }}</div>
    <div class="py-8">
        <h3 class="group-hover:text-blue-600 text-xl font-bold transition-colors duration-300">
            <a href="{{ $porfolio->url }}" target="_blank">
                {{ $porfolio->title }}
            </a>
        </h3>
        <p class="text-sm mt-4">{{ $job->schedule }} - from {{ $job->salary }}</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach ($porfolio->tags as $tag)
                <x-tag :$tag size="small" />
            @endforeach



        </div>


    </div>
</x-panel>
