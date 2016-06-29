<?php include __DIR__ . '/../top.php'; ?>

<div class="container">
    <div class="col-md-12">
        <!-- Main component for a primary marketing message or call to action -->
        <div class="jumbotron">
            <h1>Destruction de produit</h1>

            <?php if($errors) { ?>
                <p> rentrer le nom du produit a supprimer et GO TO DESTROY</p>
                <?php foreach ($errors as $error) {
                    echo ($error);
                }
            }?>

            <form action="<?php echo $path('produit.delete') ?>" method="post" >
                ID:   <input type="text" name="form[id]"    /></br>
                <input type="submit" name="submit" value="Envoyer" />
            </form>
    
            <p>

            </p>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../bottom.php'; ?>

