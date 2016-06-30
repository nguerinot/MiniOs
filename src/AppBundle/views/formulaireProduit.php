<html>
    <body>
    <?php echo $path($pathChemin) ?>

        <form action="<?php echo $path($pathChemin) ?>" method="post" >
            <input type="hidden" name="form[id]" value="<?php echo $id; ?>" />
            
            Nom:   <input type="text" name="form[nom]"    /></br>
            Prix:   <input type="text" name="form[prix]" /></br>
            Type du Produit :

                        <select class="form-control" name="form[id_produit_type]">
                            <?php foreach ($produitTypes as $produitType) : ?>
                                <?php //foreach ($produits as $produit) : ?>

                            <option value="<?php echo $produitType['id'] ?>"><?php echo $produitType['nom'] ?></option>

                            <?php //endforeach ?>
                            <?php endforeach ?>
                        </select>

            </br>
            <input type="submit" name="submit" value="Envoyer" />
        </form>
    </body>
</html>

