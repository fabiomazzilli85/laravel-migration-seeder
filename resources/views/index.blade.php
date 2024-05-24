<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Elenco Treni in Partenza</title>
    <style>
        ul, li {
            list-style: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="mt-5 mb-5 text-center">Elenco Treni in Partenza</h1>
        @foreach($departingTrains as $train)
            <ul class="mt-5 mb-5">
                <li><strong>Azienda</strong>: {{ $train->azienda }}</li>
                <li><strong>Codice Treno</strong>: {{ $train->codice_treno }}</li>
                <li><strong>Stazione di Partenza</strong>: {{ $train->stazione_partenza }}</li>
                <li><strong>Stazione di Arrivo</strong>: {{ $train->stazione_arrivo }}</li>
                <li><strong>Orario di Partenza</strong>: {{ $train->orario_partenza }}</li>
                <li><strong>Orario di Arrivo</strong>: {{ $train->orario_arrivo }}</li>
            </ul>
        @endforeach
    </div>

</body>

</html>