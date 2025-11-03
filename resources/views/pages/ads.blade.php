<x-main-layout>
    <x-slot name="header">
        <x-header />
    </x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12">
                @foreach ($ads as $ad)
                    <x-ad title="{{ $ad->title }}" short="{{ $ad->description }}" />
                @endforeach

            </div>
        </div>
</x-main-layout>