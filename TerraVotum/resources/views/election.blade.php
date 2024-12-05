<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1>{{ $elections[0]->name }} :</h1>
    @foreach ($movements as $movement)
        <h2>{{ $movement->name }} :</h2>
    @endforeach

    @foreach ($parties as $parti)
        <p>{{ $parti->name }}</p>
    @endforeach

    @foreach ($tours as $tour)
        <!-- @if ($tour->parti_id = 1) -->
            <p>{{ $tour->pourcentage }}</p>
        <!-- @endif -->
    @endforeach

    <?php
    $evolution1 = $tours[0]->pourcentage - $tours[1]->pourcentage;
    $evolution2 = $tours[2]->pourcentage - $tours[3]->pourcentage;
    ?>
    <p><?php echo($evolution1) ?> %</p>
    <p><?php echo($evolution2) ?> %</p>
</body>
</html>