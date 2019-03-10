<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="./js/mainHome.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Galleria D'Arte</title>
</head>
<body onclick="unfocusedSearch(event)">
    <div class="home-container">

        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="/galleria">Galleria D'arte</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active ">
                        <a class="nav-link" href="/galleria">Home</a>
                    </li>
                    <li class="nav-item">
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

        <div class="search-container">
            <div class="search-block">
                <input type="text" autocomplete="off" name="search-input" id="search-input" class="search-input" placeholder="Guernica..." onfocus="focusSearch(event)"/>
                <button type="submit" name="search-submit" class="search-submit" ><i class="fas fa-search"></i></button> 
            </div>
            <div class="options-form" id="options">
                    <ul class="options-container" id="options-container">
                        <li><button>AAA</button></li>
                        <li><button>AAA</button></li>
                        <li><button>AAA</button></li>
                    </ul>
                    
                <form action="" method="GET" style="visibility: hidden" id="submit-search"><input type="hidden" id="hidden-input" name="o" value=""></form>
            </div>
        </div>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" style=" max-height: 600px !important;">
                <div class="carousel-item active">
                <img src="./media/img1.jpg" class="d-block w-100" alt="IMG">
                </div>
                <div class="carousel-item">
                <img src="./media/img2.jpg" class="d-block w-100" alt="IMG">
                </div>
                <div class="carousel-item">
                <img src="./media/img3.jpg" class="d-block w-100" alt="IMG">
                </div>
                <div class="carousel-item">
                <img src="./media/img4.jpg" class="d-block w-100" alt="IMG">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="jumbotron home-option">
            <div>
                <h1 class="display-6">Catalogo Quadri</h1>
                <p class="lead">Entra in un mondo di emozioni</p>
            </div>
            <a class="btn btn-primary" href="#" role="button">Sfoglia</a>
        </div>

        <div class="jumbotron home-option">
            <div>
                <h1 class="display-6">Catalogo Artisti</h1>
                <p class="lead">I nostri artisti, unici.</p>
            </div>
            <a class="btn btn-primary" href="#" role="button">Sfoglia</a>
        </div>

        <div class="jumbotron home-option">
            <div>
                <h1 class="display-6">Catalogo Tecniche</h1>
                <p class="lead">Scegli la tecnica più adatta a te</p>
            </div>
            <a class="btn btn-primary" href="#" role="button">Sfoglia</a>
        </div>

    </div>
</body>
</html>