<x-layout>
   

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 text-center">
                {{-- ricordiamo sempre di indicare method e action come attributi nel form --}}
                <form class="needs-validation" method="POST" action="{{ route ('register')}}">
                    @csrf
                    {{-- USERNAME INPUT FIELD attenziona a :  attributo NAME e direttiva @ERROR nel form control --}}
         <div class="mb-3">
          <label for="name">Username</label>
          <input name="name" type="text" class="form-control @error('userName')is-invalid @enderror" id="name" placeholder="Username" value="{{ old("name")}}"> 
          {{-- value :  old  "name uguale a quello della mail o username qua stiamo usando l'username come campo alternativo, solitament per loggare si usa o la mail o l'username infatti laravel per convenzioni ci dice metti il name e poi metti un input che può essere o username/email per loggare, sotto vediamo che abbiamo scelto la mail , IL VALUE col caro blade di NAME E EMAIL/USERNAME DEVE ESSERE = UGUALE" --}}
        
        </div>
        {{-- se il nome utente non è valide con la direttiva blade error verifico delle specifiche condizioni , fuori dal div in oridine seguenziale metto l'error e l'alert che dovrebbe disporre qualora l'username non rispetti certe condzioni, dentro un caro blade con la variabile che contiene il messaggio da displayre in base all'errore commesso dall'utente nel mettere i caratteri per l'username --}}
        @error("userName")
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        {{-- EMAIL INPUT FIELD --}}
        <div class="mb-3">
            <label for="name">Email Address</label>
            <input name="email" type="email" class="form-control @error('mail')is-invalid @enderror" id="mail" placeholder="Email" value = "{{ old('name')}}">
            {{-- VALUE = {{ old "A QUELLO DI NAME"}} --}}
          </div>
          @error("mail")
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
         
          {{-- PASSWORD INPUT FIELD --}}
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
         <input type="password" name="password" class="form-control @error('password')is-invalid @enderror" id="password" placeholder="Password" value="{{ old('password')}}">
         
         </div>
             {{-- DOUBLECHECKPASSWORD TYPED RIGHT INPUT FIELD --}}
             <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control @error('password_confirmation')is-invalid @enderror" id="password_confirmation" placeholder="Re-insert your password" value="{{ old('password_confirmation')}}">
                
                </div> 
                
                <div class="mt-5">
                    <button type="submit" class="btn btn-primary">REGISTER</button>
                </div>
        
      </form>
    </div>
</div>
</div>
</x-layout>