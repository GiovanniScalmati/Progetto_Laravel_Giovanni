
<x-layout> 

  <h1>Dettaglio Fumetto</h1>

  <div class="container my-5">
      <h2 class="text-center">Il nostro catalogo Fumetti</h2>
      <div class="row justify-content-center align-items-center">
          <div class="col-12 col-md-3">  
              <div class="card" style="width: 18rem;">
                  <img src="https://picsum.photos/200/300" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Title: {{$comic['title']}}</h5>
                    <h5 class="card-text">Autore: {{$comic['author']}}</h5>
                    <p class="card-text">Anno di pubblicazione: {{$comic['year']}}</p>
                    <p class="card-text">Trama: {{$comic['plot']}}</p>
                    {{-- <a href="{{route('detail_comics',['title'=>$comic['title']])}}" class="btn btn-primary">Vai al dettaglio</a> --}}
                  </div>
                </div>           
            </div>
      </div>
  </div>

  </x-layout> 
    
    



    