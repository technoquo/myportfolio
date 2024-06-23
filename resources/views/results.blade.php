<x-layout :seo="$seo" :page="$page" :portfolios="$portfolios">
    <x-page-heading>
        <div class="text-white mt-5 py-6">
            @if (session('locale') == 'en')
                Results
            @else
                Resultados
            @endif
        </div>
    </x-page-heading>
    <div class="space-y-6">
        @foreach ($portfolios as $porfolio)
            <x-portfolio-card-wide :$porfolio />
        @endforeach
    </div>
</x-layout>
