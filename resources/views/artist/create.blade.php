<x-layout>
<div class="container-fluid headercreate ">
    <div class="row text-light fs-italic text-start">
        <h2>Add your favourite artist</h2>
    </div>

    <div class="row ">
        <div class="col-12 col-md-3">
          <form method="POST" action='{{ route('artist.store') }}' enctype = "multipart/form-data">
            @csrf
                 <div class="form-floating mb-3">
                   <input type="text" name='name' class="form-control" id="floatingInput" placeholder="Sebastian Bach" value="{{ old ('name') }}">
                      <label for="floatingInput">Artist name</label>
                  </div>
                  @error('name')
         <div class="alert alert-danger">{{ $message }}</div>
         @enderror
                 <div class="form-floating ">
             <input type="text" name='genre' class="form-control" id="floatingInput" placeholder="Rock" value="{{ old ('genre') }}" >
             <label for="floatingInput">Genre</label>
         </div>
         @error('genre')
         <div class="alert alert-danger">{{ $message }}</div>
         @enderror
         <div class="form-floating mt-3">
            <input type="text" name='band' class="form-control" id="floatingInput" placeholder='AlbumName' value="{{ old ('band') }}" >
            <label for="floatingInput">Band</label>
        </div>
        @error('band')
         <div class="alert alert-danger">{{ $message }}</div>
         @enderror
        <div class="input-group mt-3">
            <input type="file" name='img' class="form-control" id="img">
            <label class="input-group-text" for="img">Upload</label>
          </div>
              <div class="container d-flex justify-content-center ">
               <a href="{{route('artist.index')}}"> <button class="btn button-64 my-5" type='submit'>Add Artist</button></a>
               
              </div>
         </form>
         @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
       </div>
    </div>      
</div>
</x-layout>