<x-main-layout>
    <x-slot name="header">
        <x-header />
        

    </x-slot>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                
                <h1>Kapcsolat</h1>
                <div id="map"></div>
                @vite(['resources/js/map.js'])
                <script async defer
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIHF0I2LGJSKE13s7pI00Xwip9tENmk9c&loading=async&callback=initMap"></script>
                <script>
                    window.addEventListener('load', () => {
                        if (window.google && window.initMap) {
                            window.initMap();
                        }
                    });
                </script>


            </div>
        </div>
</x-main-layout>