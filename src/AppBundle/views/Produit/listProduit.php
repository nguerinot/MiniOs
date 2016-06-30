<?php include __DIR__ . '/../top.php'; ?>

<div class="container">
    <div class="col-md-12">
        <!-- Main component for a primary marketing message or call to action -->
        <div class="jumbotron">
            <h1>Listing des Produits</h1>

            <p>
                Voici un tableau qui liste les produits ... ggwp
            </p>

            <p>
                <a href="<?php echo $path('produit.create') ?>"
                   type="button"
                   class="btn btn-success">Créer un produit
                </a>
            </p>

            <table class="table">
                <th>
                <td colspan="10">---</td>
                </th>
                <?php foreach ($produits as $produit) : ?>
                    <tr>
                        <td><b><?php echo $produit['nom'] ?></b></td>
                        <td><?php echo $produit['prix'] ?></td>
                        <td><?php echo $produit['id_produit_type'] ?></td>
                        <td>
                            <?php
                            if ($produit['id_produit_type']) {
                                foreach ($produit_types as $produit_type) {
                                    if ($produit['id_produit_type'] == $produit_type['id']) {
                                        echo  $produit_type['nom'];
                                    }
                                }
                            } else {
                                echo '-';
                            }
                            ?>
                        </td>
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
                <?php endforeach ?>
            </table>

        </div>
    </div>
</div>

<?php include __DIR__ . '/../bottom.php'; ?>


