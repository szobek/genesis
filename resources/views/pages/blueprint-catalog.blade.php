<x-main-layout>
    <div class="container">
        <x-slot name="header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p>breadcrumb</p>
                    </div>
                </div>
            </div>
        </x-slot>
        
        <div class="row">
            <div class="col-12">
                <h2>
                    Lapozza végig katalógusunkat, és fedezze fel a Genesis Házak Kft. könnyűszerkezetes épületelemeiből
                    készült vázlatterveket.
                </h2>

                <x-pdf-viewer pdfUrl="{{ asset('storage/documents/vazlatterv-katalogus.pdf') }}" :title="'Vázlatterv katalógus'" />
                <p>
                    <a href="{{ asset('storage/documents/vazlatterv-katalogus.pdf') }}" class="btn btn-primary" target="_blank">Letötés</a>
                </p>
            </div>
        </div>
    </div>


</x-main-layout>