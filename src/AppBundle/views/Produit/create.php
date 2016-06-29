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

            <form action="<?php echo $path('produit.create') ?>" method="post"  enctype="multipart/form-data">
                Nom:   <input type="text" name="form[nom]"    /></br>
                Prix:   <input type="text" name="form[prix]" /></br>
                Commentaire   <input type="text" name="form[commentaire]" /></br>
                Photo:  Balance la photo de ton gadget ... <br />
                <input type="file" name="photo" /><br />
                <input type="submit" name="submit" value="Envoyer" />
            </form>

            <p>

            </p>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../bottom.php'; ?>

