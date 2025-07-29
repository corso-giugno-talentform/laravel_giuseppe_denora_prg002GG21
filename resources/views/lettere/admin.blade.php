{{-- sei stato contattato da ..{{ $firstName ?? 'Utente' }} </br>
con email {{ $Email ?? 'email utente '}}</br>
riguardo articolo  {{ $article_nome ?? 'nome articolo '}}</br>
con testo {{ $textArea ?? 'messaggio' }}</br> --}}

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Messaggio ricevuto</title>
</head>
<body>
    <h3>Sei stato contattato da <strong>{{ $firstName ?? 'Utente' }}</strong></h3>
    <h4>con email <strong>{{ $Email ?? 'email utente' }}</strong></h4>
    <h5>riguardo l'articolo <strong>{{ $article_nome ?? 'nome articolo' }}</strong></h5>
    <p>con il messaggio: <br> <em>{{ $textArea ?? 'messaggio' }}</em></p>
</body>
</html>


