<x-layout>

    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 text-center">
                {{-- ricordiamo sempre di indicare method e action come attributi nel form --}}
                <form class="needs-validation" method="POST" action="{{ route ('login')}}">
                    @csrf
                
         
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
        
                
                <div class="mt-5">
                    <button type="submit" class="btn btn-primary">LOGIN</button>
                </div>
        
      </form>
    </div>
</div>
</div>
</x-layout>