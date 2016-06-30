<?php include __DIR__ . '/../top.php'; ?>

<div class="container">
    <div class="col-md-12">
        <!-- Main component for a primary marketing message or call to action -->
        <div class="jumbotron">
            <h1>Listing des types de Produit</h1>

            <p>
                Voici un tableau qui liste les types de produits ... level up :)
            </p>

            <table class="table">
                <th>

                    <table class="table">
                        <tr>
                            <td> Crér un nouveau type de produit</td>
                            <td>
                                <a href="<?php echo $path('produitType.creation') ?>"
                                   type="button"
                                   class="btn btn-success">Créer
                                </a>
                            </td>
                        </tr>

                        <?php foreach ($produitTypes as $produitType) : ?>

                            <tr>
                                <td><b><?php echo $produitType['nom'] ?></b></td>

                            </tr>


                        <?php endforeach ?>
                    </table>

        </div>
    </div>
</div>

<?php include __DIR__ . '/../bottom.php'; ?>


