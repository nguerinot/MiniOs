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
    public function updateUserAction()
    {
        $id = $_SESSION['user']['id'];
        $errors = [];
        return $this->render('User/update.php', [
            'errors' => $errors,
            'id' => $id,
        ]);
    }
    
    
    public function userUpdateAction()
    {
        $pdo = $this->getPdo();
        $form = $_REQUEST['form'];

        $sql = 'UPDATE user SET 
            username = :username,
            password = :password,
            email = :email,
            nom = :nom, 
            prenom = :prenom
            WHERE id = :id';
        $updateUser= $pdo->prepare($sql);
        $updateUser->bindParam(':id', $form['id'], PDO::PARAM_INT);
        $updateUser->bindParam(':username', $form['username'], PDO::PARAM_STR);
        $updateUser->bindParam(':password', $form['password'], PDO::PARAM_STR);
        $updateUser->bindParam(':email', $form['email'], PDO::PARAM_STR);
        $updateUser->bindParam(':nom', $form['nom'], PDO::PARAM_STR);
        $updateUser->bindParam(':prenom', $form['prenom'], PDO::PARAM_STR);

        $updateUser->execute();

        $_SESSION['user'] = $form;

        return $this->render('Home/accueil.php', [

        ]);
    }

    public function connectionUserAction()
    {
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

                $pdo = $this->getPdo();// connection à la base

                $sql = 'SELECT * FROM user WHERE username = :username LIMIT 1';
                $query = $pdo->prepare($sql);
                $query->bindParam(':username', $form['username'], PDO::PARAM_STR);
                $query->execute();

                $userUsername = $query->fetchObject();


                if (!$userUsername) {
                    $errors[] = 'le pseudo n existe pas va creer un compte';
                } else {
                    $pdo = $this->getPdo();// connection à la base

                    $sql2 = 'SELECT * FROM user WHERE username = :username AND password = :password LIMIT 1';
                    $query = $pdo->prepare($sql2);
                    $query->bindParam(':username', $form['username'], PDO::PARAM_STR);
                    $query->bindParam(':password', $form['password'], PDO::PARAM_STR);
                    $query->execute();

                    $user = $query->fetch(PDO::FETCH_BOTH);

                   
                    if ($user) {
                        $_SESSION['user'] = $user;

                    return $this->render('Home/accueil.php', [
                        'errors' => $errors,
                    ]);
                    }
                }
            }


            return $this->render('User/connectionCompte.php', [
                'errors' => $errors,
            ]);
        }
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

            $pdo = $this->getPdo();// connection à la base

            $sql = 'SELECT * FROM user WHERE username = :username LIMIT 1';
            $query = $pdo->prepare($sql);
            $query->bindParam(':username', $form['username'], PDO::PARAM_STR);
            $query->execute();

            $userUsername = $query->fetchObject();


            if ($userUsername) {
                $errors[] = 'le pseudo est deja prit';
            }

            $sql = 'SELECT * FROM user WHERE email = :email  LIMIT 1';
            $query = $pdo->prepare($sql);
            $query->bindParam(':email', $form['email'], PDO::PARAM_STR);
            $query->execute();

            $userEmail = $query->fetchObject();

            if ($userEmail) {
                $errors[] = 'l email est deja utilisé';
            }


            if ($errors) {
                return $this->render('User/creationCompte.php', [
                    'errors' => $errors,
                ]);
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

                $insertUser = $pdo->prepare($sql);
                $insertUser->bindParam(':username', $form['username'], PDO::PARAM_STR);
                $insertUser->bindParam(':password', $form['password'], PDO::PARAM_STR);
                $insertUser->bindParam(':email', $form['email'], PDO::PARAM_STR);
                $insertUser->bindParam(':nom', $form['nom'], PDO::PARAM_STR);
                $insertUser->bindParam(':prenom', $form['prenom'], PDO::PARAM_STR);
                $insertUser->execute();


                return $this->render('Home/accueil.php', [
                    'errors' => $errors,
                ]);

            }

        } else {

            return $this->render('User/creationCompte.php', [
                'errors' => $errors,
            ]);
        }
    }

}