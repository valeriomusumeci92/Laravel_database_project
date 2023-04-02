<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="class col-12 col-md-8 text-center">
                <h1>{{ $artist->name }}</h1>
            </div>
        </div>
    </div>
    <class class="container">
        <class class="row">
            {{-- QUA MOSTRO LA SINGOLA CARD CHE POI VERRà CICLATA CON LA DIRETTIVA @foreach in index.blade.php  --}}
            <div class="class col-12 col-md-8 text-center">
                <div class="card">
                    
            
                    <div class="card-body">
                        <img src="{{ Storage::url($artist->img) }}" class="img-fluid">
                             {{-- vicino alla $artist dichiaratp in ArtistController all freccitina di artist gli indico i dati dei campi di input che ho fornito all'utente per creare l'artista in create.blade.php nella cartella artist in views--}}
                           <h1 class="card-title">{{ $artist->name }}</h1>
                           <p class="card-text">{{ $artist->genre }}</p>
                           <p class="card-text">{{ $artist->band }}</p>
                           <p class="card-text">{{ $artist->album }}</p>
                           <a href="{{ route('homepage')}}"> Go to the homepage</a>
                         </div></div>
                
                  </div>

            </div>
            
        </class>
    </class>
</x-layout>