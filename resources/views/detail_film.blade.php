<x-layout>

    <div class="containter">
        <div class="row">
            <div class="col-12">
                <h1>Dettaglio film selezionato</h1>
                <div class="card" style="width: 18rem;">
                    <img src="https://picsum.photos/200/300" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Title: {{$film['title']}}</h5>
                      <h5 class="card-text">Autore: {{$film['author']}}</h5>
                      <p class="card-text">Anno di pubblicazione: {{$film['year']}}</p>
                      <p class="card-text">Trama: {{$film['plot']}}</p>
                      {{-- <a href="{{route('detail_comics',['title'=>$comic['title']])}}" class="btn btn-primary">Vai al dettaglio</a> --}}
                    </div>
                  </div>          

            </div>
        </div>
    </div>

</x-layout>