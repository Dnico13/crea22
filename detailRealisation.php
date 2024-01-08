<?php
require_once './template/top.php';
require_once './pdo.php';



$DetailetImages = getDetailetImage($pdo);

$id = $_GET['id'];
$dernieri= count($DetailetImages) -1;
$idm= $_GET['id'] -1 ;
$idp = $_GET['id'] +1;

?>

<body>
    <?php

    require_once './template/navbar.php';
    ?>
    <main>
        <section>
            <div class="row flex-lg-row align-items-center g-5 py-5 mx-5">

                <!--<div class="d-grid gap-2 d-md-flex justify-content-md-center">
                    <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Précédent</button>
                    <button type="button" class="btn btn-outline-secondary btn-lg px-4">Suivant</button>
                </div>-->
                <div class="col-12 col-sm-8 col-lg-6">

                    <div id="carouselExample" class="carousel slide carousel-fade">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="2000">
                                <img src="<?= $DetailetImages[$id]['Image2']; ?>" class="d-block w-sm-50 w-md-75" id="imagedetail" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="<?= $DetailetImages[$id]['Image3']; ?>" class="d-block w-sm-50 w-md-75" id="imagedetail" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="<?= $DetailetImages[$id]['Image4']; ?>" class="d-block w-sm-50 w-md-75" id="imagedetail" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>


                <div class="col-lg-6 descriptif">

                    <div class="h5 nomClient"><?= $DetailetImages[$id]['Titre']; ?>:</div>
                    <p>
                        <?= $DetailetImages[$id]['detail1']; ?>
                    </p>

                    <div class="h5 programClient">PROGRAMME:</div>
                    <p>
                        <?= $DetailetImages[$id]['detail2']; ?>
                    </p>
                    <div class="h5 Materiaux">PLANCHE MATÉRIAUX :</div>
                    <p>
                        <?= $DetailetImages[$id]['detail3']; ?>
                    </p>
                </div>
                <!--<p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>-->

                <div class="d-grid gap-2 d-md-flex justify-content-md-center justify-content-lg-between">
                    <button type="button" class="btn btn-secondary btn-lg px-4 me-md-2">
                        <a href="./detailRealisation.php?id=<?php if ($idm < 0){echo $dernieri;} else {echo $idm;} ;?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                                <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                            </svg>
                        </a>
                    </button>

                    <button type="button" class="btn btn-secondary btn-lg px-4">
                        <a href="./detailRealisation.php?id=<?php  if ($idp <= $dernieri){echo $idp;} else {echo '0';} ;?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                                <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                            </svg>
                        </a>
                    </button>
                </div>

            </div>
        </section>
    </main>

    <footer>
        <?php
        require_once './template/footer.php';
        ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>

</html>