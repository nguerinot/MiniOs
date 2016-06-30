<?php include __DIR__ . '/../top.php'; ?>

<div class="container">
    <div class="col-md-12">
        <!-- Main component for a primary marketing message or call to action -->
        <div class="jumbotron">
            <h2>Modification de produit</h2>

            <?php if (isset($errors)) { ?>
                <p> Il y a une erreur :( recommencezla modif du produit </p>
                <?php foreach ($errors as $error) {
                    echo($error);
                }

            }
            echo 'voici l id du produit : ' . $id;
            ?>

            <?php include __DIR__ . '/../formulaireProduit.php'; ?>

            <p>

            </p>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../bottom.php'; ?>

