



<!--Visuel de la partie modification d une realisation -->


<table class="table table-striped table-bordered backgroungarray">
                    <thead class="text-primary">
                        <tr>

                            <th>Titre:</th>
                            <th>Detail 1:</th>
                            <th>Detail 2:</th>
                            <th>Detail 3:</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($details as $cle => $Detail) { ?>
                            <tr>

                                <td> <?= $Detail['Titre']; ?>
                                    <!-- integration des boutons de gestions de MAJ et de suppression -->
                                    <form action="./UpdateRealisation.php?=<?= $readMessage['Id']; ?>" method="get" class="mb-2">
                                        <input type="hidden" name="Id" value="<?= $readMessage['Id']; ?>">
                                        <button class="btn btn-secondary" type="submit">Modifier</button>
                                    </form>

                                    <form action="./deleteRealisation.php?=<?= $readMessage['Id']; ?>" method="get">
                                        <input type="hidden" name="Id" value="<?= $readMessage['Id']; ?>">
                                        <button class="btn btn-secondary" type="submit">Supprimer</button>
                                    </form>

                                    <!-- fin de la partie integration de Mej et de suppression -->


                                </td>
                                <td> <?= $Detail['detail1']; ?> </td>
                                <td> <?= $Detail['detail2']; ?> </td>
                                <td> <?= $Detail['detail3']; ?> </td>

                            </tr>
                        <?php } ?>


                    </tbody>
                </table>
            </div>

            <div class="row">
                <h3 class="text-center  text-primary mb-3">Gestion des Images </h3>
            </div>
            <div class="row">

                <p>
                    <a href="createImage.php" class="btn btn-success">Création d'une galerie d'Image.</a>
                </p>

                <table class="table table-striped table-bordered backgroungarray ">
                    <thead class="text-primary">
                        <tr>

                            <th>Titre:</th>

                            <th>Image 1:</th>
                            <th>Image 2:</th>
                            <th>Image 3:</th>
                            <th>Image 4:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($details as $cle => $Detail) { ?>
                            <tr>

                                <td> <?= $Detail['Titre']; ?> </td>

                                <td> <?= $Detail['Image1']; ?> </td>
                                <td> <?= $Detail['Image2']; ?> </td>
                                <td> <?= $Detail['Image3']; ?> </td>
                                <td> <?= $Detail['Image4']; ?> </td>
                            </tr>
                        <?php } ?>


                    </tbody>
                </table>
            </div>

            <!-- fin de la visualisation d une modification d une realisation-->