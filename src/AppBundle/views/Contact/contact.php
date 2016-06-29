<?php include __DIR__ . '/../top.php'; ?>

<div class="container">
    <div class="col-md-12">
        <!-- Main component for a primary marketing message or call to action -->
        <div class="jumbotron">
            <h1>Formulaire</h1>

            <?php if($errors) { ?>
                <p> Il y a une erreur :( recommencez imbécile </p>
                <?php foreach ($errors as $error) {
                    echo ($error);
                }
            }?>
            
            <form action="<?php echo $path('contact') ?>" method="post">
                Nom:   <input type="text" name="form[username]"    /></br>
                Prénom:   <input type="text" name="form[name]" /></br>
                Email: <input type="text" name="form[email]" /></br>
                Description à la demande   <input type="text" name="form[question]" /></br>
                Photo: <label for="mon_fichier"> Balance ta tofo ^^ </label><br />
                <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
                <input type="file" name="photo" id="mon_fichier" /><br />
                <input type="submit" name="submit" value="Envoyer" />
            </form>

            <p>

            </p>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../bottom.php'; ?>

