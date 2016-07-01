<?php include __DIR__ . '/../top.php'; ?>

<div class="container">
    <div class="col-md-12">
        <!-- Main component for a primary marketing message or call to action -->
        <div class="jumbotron">
            <h1>Connection espace perso</h1>

            <?php if($errors) { ?>
                <p> Il y a une erreur pour se co... pas doué </p>
                <?php foreach ($errors as $error) {
                    echo ($error);
                }
            }?>

            <body>

            <form action="<?php echo $path('user.connection') ?>" method="post" >

                Username:   <input type="text" name="form[username]"    /></br>
                Password:   <input type="text" name="form[password]" /></br>

                <input type="submit" name="submit" value="Envoyer" />
            </form>
            </body>





            <p>

            </p>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../bottom.php'; ?>

