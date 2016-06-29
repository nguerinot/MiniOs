<?php include __DIR__ . '/../top.php'; ?>

<div class="container">
    <div class="col-md-12">
        <!-- Main component for a primary marketing message or call to action -->
        <div class="jumbotron">
            <h1>Formulaire envoyé</h1>

            
            <p>
                un email va vous être envoyé :) enfin pas vraiment pour l'instant</br>
                <?php
                $lines = file('c:/wamp64/www/minios/texte.txt');
                // Affiche toutes les lignes du tableau avec les numéros de ligne
                foreach ($lines as $num => $line) {
                echo  '<br>Ligne <strong>' . $num . '</strong>: ' . htmlspecialchars($line);
                }?>
            </p>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../bottom.php'; ?>


