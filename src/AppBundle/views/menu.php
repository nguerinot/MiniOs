<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo $path('index') ?>">Shopping Power</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo $path('wiki') ?>">Wiki</a></li>
                <li><a href="<?php echo $path('articles') ?>">Articles</a></li>
                <li><a href="<?php echo $path('test') ?>">Test</a></li>
                <li><a href="<?php echo $path('produit.list') ?>">Produit</a></li>
                <li><a href="<?php echo $path('produitType.create') ?>">Type de produit</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        <?php
                        if(isset($_SESSION['user']))
                        {
                            echo $_SESSION['user']['username'] ?><span class="caret"></span>
                            <ul class="dropdown-menu">
                                <li class="dropdown-header">Informations</li>
                                <li><a href="<?php echo $path('user.updateUser') ?>">Update</a></li>
                                <input type="hidden" name = "form[id]" value="<?php $_SESSION['user']['id'] ?>" />
                                <li role="separator" class="divider"></li>
                                <li class="dropdown-header">Autre</li>
                                <li><a href="<?php echo $path('index') ?>">Deconnexion</a></li>
                            </ul>

                            <?php
                        }else
                        {
                            echo 'qui es tu ?';?><span class="caret"></span>
                            <ul class="dropdown-menu">
                                <li class="dropdown-header">Connection</li>
                                <li><a href="<?php echo $path('user.connection') ?>">connexion</a></li>
                                <li role="separator" class="divider"></li>
                                <li class="dropdown-header">Création de Profil</li>
                                <li><a href="<?php echo $path('user.creation') ?>">Create</a></li>
                            </ul>
                        <?php }?>
                    </a>

                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
