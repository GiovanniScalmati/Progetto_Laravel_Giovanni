<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1>We admin vedi di rispondere a questo</h1>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>il nome del contatto è:{{$userContactForAdmin['user']}}</h3>
                <h3>l'indirizzo mail è:{{$userContactForAdmin['email']}}</h3>
                <h3>il numero di telefono è:{{$userContactForAdmin['tel']}}</h3>
                <h3>il tuo messaggio è:</h3>
                <p>{{$userContactForAdmin['message']}}</p>
            </div>
        </div>
    </div>
    <p></p>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>