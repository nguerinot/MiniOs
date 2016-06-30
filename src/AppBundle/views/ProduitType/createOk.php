<?php include __DIR__ . '/../top.php'; ?>

<div class="container">
    <div class="col-md-12">
        <!-- Main component for a primary marketing message or call to action -->
        <div class="jumbotron">
            <h1>Création de type de produit</h1>

            <?php if($errors) { ?>
                <p> Il y a une erreur :( recommencez l'entrée du type de produit </p>
                <?php foreach ($errors as $error) {
                    echo ($error);
                }
            }else
            {
                echo 'votre article a bien été ajouté';
                ?>
                <table class="table">
                    <tr>
                        <td> Crér un nouveau Type de produit</td>
                        <td>
                            <a href="<?php echo $path('produitType.create') ?>"
                               type="button"
                               class="btn btn-success">Créer
                            </a>
                        </td>
                    </tr>

                </table>
            <table class="table">
                <th>

                    <table class="table">
                        <?php foreach ($produitTypes as $produitType) : ?>

                            <tr>
                                <td><b><?php echo $produitType['nom'] ?></b></td>

                            </tr>


                        <?php endforeach ?>
                    </table>
            <?php }?>

            <p>

            </p>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../bottom.php'; ?>

