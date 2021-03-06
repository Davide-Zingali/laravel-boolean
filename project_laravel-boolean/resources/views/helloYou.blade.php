<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <title>helloYou</title>

</head>
<body>
    <div id="container">
        <h1>Hello Users</h1>
        <h1>Hello {{$name}}</h1>
    </div>
</body>

<!-- GOAL: sulla falsa riga di quanto visto questa mattina creare le seguenti rotte 
SENZA controller:
- /helloAll: saluta tutti gli utenti in inglese (statico, no variabili)
- /helloYou: saluta utente per nome (variabile) in inglese
- /helloYou2: saluta utente per nome (stessa varbile, stessa view, ma nome diverso) in inglese
CON controller:
- /holaTodo: saluta tutti gli utenti in spagnolo
- /holaTu: saluta utente per nome (variabile) in spagnolo
- /holaTu2: saluta utente per nome (stessa varbile, stessa view, ma nome diverso) in spagnolo
NOTA: si ricorda di fare il tutto in NUOVO progetto, creato a partire dalla create-project (comando terminale) -->
</html>