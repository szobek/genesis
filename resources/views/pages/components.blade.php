<x-main-layout>
    <x-slot name="header">
        <x-header />
    </x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Rendelhető előre gyártott elemek</h1>
                <h5>Előre gyártott elemeink teljes körű építési megoldást jelenthetnek,
                    akár egy családi ház építéséhez is.</h5>
            </div>

            <div class="images">
                <figure>
                    <img src="{{ asset('assets/images/components/ablak-247x278.jpg') }} " alt="">
                    <figcaption>Beépített ablakos falszerkezet</figcaption>
                </figure>
                <figure>
                    <img src="{{ asset('assets/images/components/Kep28-247x296.png') }} " alt="">
                    <figcaption>Beépített ajtós falszerkezet</figcaption>
                </figure>
            </div>
        </div>
</x-main-layout>