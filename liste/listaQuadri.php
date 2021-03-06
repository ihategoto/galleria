<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../js/mainListaQuadri.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Galleria D'Arte</title>
</head>
<body>
    <div class="home-container">

    <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="/galleria">Galleria D'arte</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item  ">
                        <a class="nav-link" href="/galleria">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/galleria/liste/listaQuadri.php">Quadri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/galleria/liste/listaAutori.php">Artisti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/galleria/liste/listaTecniche.php">Tecniche</a>
                    </li>
                </ul>
            </div>
        </nav>

        <form class="list-container" id="list-container" action="../ispeziona/quadro.php" method="GET">

        </form>
    </div>
</body>

</html>