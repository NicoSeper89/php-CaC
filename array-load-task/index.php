<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPCards</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body >
    <div class="relative row py-3 px-5 px-sm-0 gap-4 justify-content-center align-content-stretch m-0 text-center">
        <h1>Video Juegos</h1>
        <?php
        include('games.php');

        $games = getGames();

        foreach ($games as $i => $game) {

            echo '
                <div class="col-sm-3 m-0 p-0">
                    <div class="card h-100">
                        <div class="relative overflow-x-hidden h-75">
                            <img class="card-img-top h-100" src="' . $game['image'] . '" alt="Card image ' . $i . '">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">' . $game['name'] . '</h5>
                            <p class="card-text">Consola: ' . $game['console'] . '</p>
                            <p class="card-text">Categoría: ' . $game['category'] . '</p>
                            <p class="card-text"><small class="text-muted">Lanzamiento: ' . $game['release'] . '</small></p>
                        </div>
                    </div>
                </div>';
        }
        ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>