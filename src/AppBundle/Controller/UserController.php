<?php

namespace AppBundle\Controller;

use Framework\Controller;
use PDO;

class UserController extends Controller
{
    public function creationUserAction()
    {
        $errors = [];

        return $this->render('User/creationCompte.php', [
            'errors' => $errors,
        ]);
    }
    public function enregistrerCompteAction()
    {
        $errors = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $form = $_REQUEST['form'];
            if (!$form['username']) {
                $errors[] = 'le pseudo ne doit pas être vide';
            }
            if (!$form['password']) {
                $errors[] = 'le mot de passe ne doit pas être vide';
            }
            if (!$errors) {

                $pdo = $this->getPdo();// connection à la base

                $sql = 'INSERT INTO user (
                username,
                password,
                email,
                nom,
                prenom
            ) VALUES (
                :username,
                :password,
                :email,
                :nom,
                :prenom
            )';

                $insertUser= $pdo->prepare($sql);
                $insertUser->bindParam(':username', $form['username'], PDO::PARAM_STR);
                $insertUser->bindParam(':password', $form['password'], PDO::PARAM_STR);
                $insertUser->bindParam(':email', $form['email'], PDO::PARAM_STR);
                $insertUser->bindParam(':nom', $form['nom'], PDO::PARAM_STR);
                $insertUser->bindParam(':prenom', $form['prenom'], PDO::PARAM_STR);
                $insertUser->execute();
            }


            return $this->render('Produit/listProduit.php', [

            ]);

        } else {

            return $this->render('User/creationCompte.php', [
                'errors' => $errors,
            ]);
        }
    }

}