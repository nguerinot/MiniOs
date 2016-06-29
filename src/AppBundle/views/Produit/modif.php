<?php include __DIR__ . '/../top.php'; ?>

<div class="container">
    <div class="col-md-12">
        <!-- Main component for a primary marketing message or call to action -->
        <div class="jumbotron">
            <h1>Création de produit</h1>

            <?php if (isset($errors)) { ?>
                <p> Il y a une erreur :( recommencezla modif du produit </p>
                <?php foreach ($errors as $error) {
                    echo($error);
                }

            }
            echo 'voici l id du produit : ' . $id;
            ?>

            <form action="<?php echo $path('produit.modif') ?>" method="post">
                Nom: <input type="text" name="form[nom]"/></br>
                Prix: <input type="text" name="form[prix]"/></br>
                <input type="text" name="form[id]" value="<?php echo $id ?>"/>
                <input type="submit" name="submit" value="Envoyer"/>
            </form>

            <p>

            </p>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../bottom.php'; ?>

