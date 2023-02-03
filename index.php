<?php
require_once __DIR__ . './models/Movie.php';

//Create new object
$kill_bill = new Movie('#', 'Kill Bill: Volume 1', '2003', '1h 51m', 'Azione');
$shutter_island = new Movie('#', 'Shutter Island', '2010 ', '2h 18m', 'Thriller');
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies List</title>
</head>
<body>
    <main>
        <?php
        echo '<article>';
        echo  "<img src='{$kill_bill->bannerPath}' alt=''>";
        echo '<h1>';
        echo  $kill_bill->title;
        echo '</h1>';
        echo '<p>';
        echo  "Anno: {$kill_bill->year} || Durata: {$kill_bill->lenght} || Genere: {$kill_bill->genre}";
        echo '</p>';
        echo '</article>';

        echo '<article>';
        echo  "<img src='{$shutter_island->bannerPath}' alt=''>";
        echo '<h1>';
        echo  $shutter_island->title;
        echo '</h1>';
        echo '<p>';
        echo  "Anno: {$shutter_island->year} || Durata: {$shutter_island->lenght} || Genere: {$shutter_island->genre}";
        echo '</p>';
        echo '</article>';
        ?>
    </main>
</body>
</html>