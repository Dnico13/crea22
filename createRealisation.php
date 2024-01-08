<?php
require_once './template/top.php';
require_once './pdo.php';
require_once './function/functionCreateRealisation.php';
creatReal($pdo);


?>

<body>
    <header>

        <h1 class="h1 text-center text-primary">
            Interface d'administration
        </h1>

    </header>
    <main>
        <!-- integration du formulaire de creation de realisation du texte -->
        <div class="container d-flex flex-column justify-content-center">

            <div class="row">

            <form class="w-50 m-auto" action="./createRealisation.php" method="POST" enctype="multipart/form-data" target="_self">
                    <div class="mb-2">
                        <label for="Titre" class="form-label">Titre</label>
                        <input type="text" name="Titre" class="form-control" id="Titre" required>
                    </div>
                    <div class="mb-2">
                        <label for="Detail1" class="form-label">Detail 1</label>
                        <input type="text" name="Detail1" class="form-control" id="Detail1" required>
                    </div>
                    <div class="mb-2">
                        <label for="Detail2" class="form-label">Detail 2</label>
                        <input type="text" name="Detail2" class="form-control" id="Detail2" required>

                    </div>
                    <div class="mb-2">
                        <label for="Detail3" class="form-label">Detail 3</label>
                        <input type="text" name="Detail3" class="form-control" id="Detail3" required>
                    </div>

                    
                
            

            <!-- fin du formulaire de creation de realisation  du texte -->

            <!-- integration du formulaire de creation de realisation pour les images-->



                
                    <div class="mb-2">
                        <label for="Photo1" class="form-label">Photo1</label>
                        <input type="File" name="Photo1" class="form-control" id="Photo1" required>
                    </div>

                    <div class="mb-2">
                        <label for="Photo2" class="form-label">Photo2</label>
                        <input type="File" name="Photo2" class="form-control" id="Photo2" required>
                    </div>

                    <div class="mb-2">
                        <label for="Photo3" class="form-label">Photo3</label>
                        <input type="File" name="Photo3" class="form-control" id="Photo3" required>
                    </div>

                    <div class="mb-2">
                        <label for="Photo4" class="form-label">Photo4</label>
                        <input type="File" name="Photo4" class="form-control" id="Photo4" required>
                    </div>



                    <div class="text-end mt-2">
                        <button type="submit" class="btn btn-primary" name="Submit">Validation du formulaire</button>
                    </div>
                </form>
            </div>
            <!-- fin du formulaire de creation de realisation  pour les images -->
    </main>
    <footer>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>

</html>