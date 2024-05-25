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
                <li><strong>Company</strong>: {{ $train->company }}</li>
                <li><strong>Train Code</strong>: {{ $train->train_code }}</li>
                <li><strong>Departure Station</strong>: {{ $train->departure_station }}</li>
                <li><strong>Arrival Station</strong>: {{ $train->arrival_station }}</li>
                <li><strong>Departure Time</strong>: {{ $train->departure_time }}</li>
                <li><strong>Arrival Time</strong>: {{ $train->arrival_time }}</li>
                <li><strong>Number of carriages</strong>: {{ $train->carriages_numbernumero_carrozze }}</li>
                <li><strong>Punctual</strong>: {{ $train->punctual }}</li>
                <li><strong>Deleeted</strong>: {{ $train->deleted }}</li>
            </ul>
        @endforeach
    </div>

</body>

</html>