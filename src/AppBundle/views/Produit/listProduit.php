<?php include __DIR__ . '/../top.php'; ?>

<div class="container">
    <div class="col-md-12">
        <!-- Main component for a primary marketing message or call to action -->
        <div class="jumbotron">
            <h1>Listing des Produits</h1>

            <p>
                Voici un tableau qui liste les produits ... ggwp
            </p>

            <table class="table">
                <th>

                    <table class="table">
                        <tr>
                            <td> Crér un nouveau produit</td>
                            <td>
                                <a href="<?php echo $path('produit.create') ?>"
                                   type="button"
                                   class="btn btn-success">Créer
                                </a>
                            </td>
                        </tr>

                    <?php foreach ($produits as $produit) : ?>

                        <tr>
                            <td><b><?php echo $produit['nom'] ?></b></td>
                            <td><?php echo $produit['prix'] ?></td>
                            <td>
                                <a href="<?php echo $path('produit.update') ?>?id=<?php echo $produit['id'] ?>"
                                   type="button"
                                   class="btn btn-warning">Modifier
                                </a>
                            </td>
                            <td>
                                <a href="<?php echo $path('produit.delete') ?>?id=<?php echo $produit['id'] ?>"
                                   type="button"
                                   class="btn btn-danger">Delete
                                </a>
                            </td>
                        </tr>

                </th>
                    <?php endforeach ?>
                </table>

        </div>
    </div>
</div>

<?php include __DIR__ . '/../bottom.php'; ?>


