<?php include __DIR__ . '/../top.php'; ?>

<div class="container">
    <div class="col-md-12">
        <!-- Main component for a primary marketing message or call to action -->
        <div class="jumbotron">
            <h1>Création de Compte</h1>

            <?php if($errors) { ?>
                <p> Il y a une erreur dans la création de compte ... pas doué </p>
                <?php foreach ($errors as $error) {
                    echo ($error);
                }
            }?>

            <body>

            <form action="<?php echo $path('user.creation') ?>" method="post" >
                
                Username:   <input type="text" name="form[username]"    /></br>
                Password:   <input type="text" name="form[password]" /></br>
                Email:   <input type="text" name="form[email]" /></br>
                Nom:   <input type="text" name="form[nom]" /></br>
                Prénom:   <input type="text" name="form[prenom]" /></br>




                <input type="submit" name="submit" value="Envoyer" />
            </form>
            </body>





            <p>

            </p>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../bottom.php'; ?>

