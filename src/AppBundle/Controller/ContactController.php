<?php

namespace AppBundle\Controller;

use Framework\Controller;

class ContactController extends Controller
{
    public function contactAction()
    {
        $errors = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $form = $_REQUEST['form'];
            if (!$form['username']) {
                $errors[] = 'le prenom ne doit pas être vide';
            }
            if (!$form['email'] || !(filter_var($form['email'], FILTER_VALIDATE_EMAIL))) {
                $errors[] = 'Email ne doit pas être vide';
            }
            if (!$form['name']) {
                $errors[] = 'le nom ne doit pas être vide';
            }
            if (!$form['photo']) {
                $errors[] = 'il n y a pas de photo';
            }
            if (!$errors) {
                $filename = 'c:/wamp64/www/minios/texte.txt';
                $content = 'prenom = ' . $form['username'] . ' nom = ' . $form['name'] . ' email = ' . $form['email'];

                // Ouvre un fichier pour lire un contenu existant
                $filecontent = file_get_contents($filename);

                // Ajoute une personne
                $filecontent .= $content . "\n";

                // Écrit le résultat dans le fichier

                file_put_contents($filename, $filecontent);

                 mail ($form['email'], "message de verif", $content);

                $image = $form['photo'];
                imagejpeg($image,'image.jpg');

                return $this->render('Contact/formulaireEnvoye.php', [

                ]);
            }

        }

        return $this->render('Contact/contact.php', [
            'errors' => $errors,
        ]);
    }

    public function envoiMailAction()
    {
        $form = $_REQUEST['form'];

        return $this->render('Contact/formualaireEnvoye.php,[
            
        ]');
    }


}