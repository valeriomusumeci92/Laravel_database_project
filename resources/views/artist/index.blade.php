<x-layout>
    @if(session('successMessage'))
{{-- <a href="{{ route('artist.show' , ['id' => $artist->id])}}"></a> --}}
<div class="alert alert-primary text-center">{{ session ('successMessage') }}</div>

@endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 text-center">
                <h1>Lista Artisti</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($artists as $artist)
            <div class="class col-12 col-md-6 col-lg-4 text-center">
                <div class="card mb-5">
                    <div class="card-body">
                        <img src="{{ Storage::url($artist->img) }}" class="img-fluid">
                        {{-- vicino alla $artist dichiaratp in ArtistController all freccitina di artis gli indico i campi di input da dichiarare --}}
                      <h5 class="card-title mt-2">{{ $artist->name}}</h5>
                      <p class="card-text">{{ $artist->genre }}</p>
                      <p class="card-text">{{ $artist->band }}</p>
                      <p class="card-text">{{ $artist->album }}</p>
                      {{-- contiene nell'href il cardo blade con dentro DUE COSE {{la route con dentro le sue tonde ()(con ritorno di vista della singola card con l'artista creata 
                      e assieme un ARRAY => associativo) }} dove come chiave ho l'id e come valore richiamo l'id del singolo artista cosi che venga ciclcato dal for each--}}
                      <a href="{{route ('artist.show' , ['id' => $artist->id]) 
                    }}" class="btn btn-primary">View and model your favourite arist</a>
                    </div>
                  </div>

            </div>
            @endforeach
                
        </div>
    </div>
</x-layout>