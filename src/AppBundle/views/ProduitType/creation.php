<?php include __DIR__ . '/../top.php'; ?>

<div class="container">
    <div class="col-md-12">
        <!-- Main component for a primary marketing message or call to action -->
        <div class="jumbotron">
            <h1>Création de type de produit pour de vrai</h1>

           

            <form action="<?php echo $path('produitType.create') ?>" method="post"  enctype="multipart/form-data">
                Nom:   <input type="text" name="form[nom]"    /></br>
                <input type="submit" name="submit" value="Envoyer" />
            </form>

            <p>

            </p>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../bottom.php'; ?>

