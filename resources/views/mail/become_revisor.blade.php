<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presto.it</title>
</head>

<body>
    <div>
        <h1>un utente ha richiesto di lavorare con noi!</h1>
        <h2>ecco i suoi dati: {{ $user->name }}</h2>
        <h2>email: {{ $user->email }}</h2>
        <p>se vuoi renderlo revisore clicca qui!</p>
        <a href="{{route('revisor.make', compact('user'))}}">Rendi revisore!</a>
    </div>
</body>

</html>
