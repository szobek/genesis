<x-main-layout>
    <x-slot name="header">
        <x-header />
    </x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12">

                <h2 class="text-center">Árajánlat</h2>
            </div>
            <div class="col-md-6">
                <form>
                    <h3>Az árajánlat kérő adatai</h3>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="tender[name]" placeholder="Név" value="{{ old('tender[name]') }}" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="tender[email]" placeholder="E-mail cím" value="{{ old('tender[email]') }}" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="tender[phone]" placeholder="Telefonszám" value="{{ old('tender[phone]') }}" required>
                    </div>
                    <h3>Ajánlatkérés részletei</h3>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="tender[address]" placeholder="Hol található a kivitelezés helyszíne?" value="{{ old('tender[address]') }}" required>
                    </div>


                    <button type="submit" class="btn btn-primary">Küdés</button>
                </form>
            </div>
        </div>
        <div class="col-md-6"></div>
    </div>
</x-main-layout>