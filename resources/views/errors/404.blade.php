
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'ND' }}</title>
    
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<div class="d-flex flex-column justify-content-center align-items-center mt-2" style="height: 100vh;">
    <h3 class="title404 mb-2">OPS NON PUOI ACCEDERE QUI!!!</h3>

    <img src="/images/panda404.gif" alt="Pagina non trovata" class="img-fluid mb-2"
         style="max-width: 350px; width: 100%; height: 350px;">

    <a class="btn404" href="{{ route('homepage') }}">TORNA ALLA HOME</a>
</div>



 <script src="/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
  
</body>
</html>