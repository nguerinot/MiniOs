<?php include __DIR__ . '/../top.php'; ?>

<div class="container">
    <div class="col-md-12">
        <!-- Main component for a primary marketing message or call to action -->
        <div class="jumbotron">
            <h1>Création de produit</h1>

            <?php if($errors) { ?>
                <p> Il y a une erreur :( recommencez l'entrée du produit </p>
                <?php foreach ($errors as $error) {
                    echo ($error);
                }
            }?>


            <?php include __DIR__ . '/../formulaireProduit.php'; ?>
            

            <p>

            </p>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../bottom.php'; ?>

