<x-layout>

<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-12 ">
            <h1 class="display-1 text-danger py-4">
                Contattaci
            </h1>

            <form method="POST" action="{{route('submit_contact')}}">
                @csrf
                <div class="mb-3">
                  <label class="form-label">Nome & Cognome</label>
                  <input type="text" class="form-control" aria-describedby="emailHelp" name="user"> 
                </div>
                <div class="mb-3">
                    <label class="form-label">Indirizzo Email</label>
                    <input type="text" class="form-control" aria-describedby="emailHelp" name="email"> 
                  </div>
                <div class="mb-3">
                    <label  class="form-label">Telefono</label>
                    <input type="number" class="form-control"  aria-describedby="emailHelp" name="tel"> 
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Messaggio</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
                  </div>
                <button type="submit" class="btn btn-primary">Contattaci</button>
              </form>

        </div>
    </div>
</div>


</x-layout>