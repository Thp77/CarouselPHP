<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Carousel</title>

</head>

<body>




    <!----- Permet de crée un carrousel dynamique --->

    <?php
    $dossier = 'images';
    $scan = scandir($dossier);

    ?>

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php


            foreach ($scan as $k => $v) {
                if ($v != "." && $v != "..") {
            ?>
                    <div class="carousel-item <?php if ($k == 2) {
                                                    echo  "active";
                                                }  ?> " data-bs-interval="5000">
                        <img src="./<?= $dossier ?>/<?= $v ?>" class="d-block w-100" alt="Thai">
                    </div>



            <?php
                }
            }
            ?>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

        <!----- fin  création du  carrousel dynamique --->
        <div class="carousel-indicators">
            <?php
            //Utilisation d'une boucle foreach pour afficher els boutons attention à "." et ".." qui ne sont pas des images.
            foreach ($scan as $k => $v) {
                if ($v != "." && $v != "..") {
                    //TERMINER LA BOUCLE !!!
            ?>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $k - 2 ?>" class="<?php if ($k == 2) {
                                                                                                                                    echo "active";
                                                                                                                                } ?>" aria-label="Slide <?= $k - 2 ?>"></button>
            <?php
                }
            }
            ?>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    </div>

</body>

</html>