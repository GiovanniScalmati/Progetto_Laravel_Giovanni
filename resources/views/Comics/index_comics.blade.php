<x-layout>

  <h1  class="text-center my-4">Fumetti della 125</h1>

  <div class="container my-5">
      <h2 class="text-center">Il nostro catalogo Fumetti</h2>
      <div class="row justify-content-center align-items-center">
          @foreach ($comics as $comic)
          <div class="col-12 col-md-3">  


              <x-card   
              {{-- img="{{$comic['img']}}" --}}
              title="{{$comic['title']}}"
              author="{{$comic['author']}}"
             />
            </div>
          @endforeach
      </div>
  </div>

</x-layout>
   
    