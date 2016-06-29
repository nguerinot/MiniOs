<?php include __DIR__ . '/../top.php'; ?>

<div class="container">
    <div class="col-md-12">
        <!-- Main component for a primary marketing message or call to action -->
        <div class="jumbotron">
            <h1>destroyation de produit</h1>

            <?php if(isset ($errors)) { ?>
                <p> Il y a une erreur :( recommencez l'entrée du produit </p>
                <?php foreach ($errors as $error) {
                    echo ($error);
                }
            }else
            {
                echo 'votre article a bien été supp';
            }?>

            p>

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
                <tr>
                    <td> Modifier un nouveau produit</td>
                    <td>
                        <a href="<?php echo $path('produit.list') ?>"
                           type="button"
                           class="btn btn-info">Modif/Supp
                        </a>
                    </td>
                </tr>
            </table>
            </p>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../bottom.php'; ?>

