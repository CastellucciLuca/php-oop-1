<?php
require_once __DIR__ . './models/Movie.php';
$kill_bill = new Movie("Kill bill: Vol.1","film","Action","https://i.pinimg.com/736x/50/a6/79/50a67980883a1634f4c458fcf71261e0--kill-bill-movie-movie-covers.jpg","1h 51m","2003");
$shutter_island = new Movie("Shutter Island","film","Thriller","https://i.ytimg.com/vi/Udfq0fiScug/movieposter_en.jpg","2h 18m","2010");
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<header>
        <section class="container-fluid">
            <div class="row p-3">
                <div class="col-12">
                    <h1>Movies</h1>
                </div>
            </div>
        </section>
    </header>

    <main>
        <section class="wrapper-cards-movie p-3">
            <div class="row justify-content-center row-cards-movie">


                <div class="card col-2">
                    <div class="d-flex justify-content-center p-2">
                        <img class="card-img-top" src="<?php $kill_bill->getCover(); ?>" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php $kill_bill->getTitle(); ?></h5>
                        <h5 class="card-text"><?php $kill_bill->getTypeMovie(); ?></h5>
                        <h5 class="card-text"><?php $kill_bill->getYear(); ?></h5>
                        <h5 class="card-text"><?php $kill_bill->getLenght(); ?></h5>
                    </div>
                </div>

                <div class="card col-2">
                    <div class="d-flex justify-content-center p-2">
                        <img class="card-img-top" src="<?php $shutter_island->getCover(); ?>" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php $shutter_island->getTitle(); ?></h5>
                        <h5 class="card-text"><?php $shutter_island->getTypeMovie(); ?></h5>
                        <h5 class="card-text"><?php $shutter_island->getYear(); ?></h5>
                        <h5 class="card-text"><?php $shutter_island->getLenght(); ?></h5>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>