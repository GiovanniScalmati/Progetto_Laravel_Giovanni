<div class="card">
    <img src="https://picsum.photos/200/300" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Title:{{$title}}</h5>
      <p class="card-text">Autore:{{$author}}</p>

      @if (Route::currentRouteName()=="index_comics")
      <a href="{{route('detail_comics',['title'=>$title])}}" class="btn btn-danger">Vai al dettaglio fumetto</a>
      @elseif(Route::currentRouteName()=="index_films")
      <a href="{{Route('detail_film',['title'=>$title])}}" class="btn btn-primary">Vai al dettaglio film</a>
      @endif


      
    </div>
  </div>     