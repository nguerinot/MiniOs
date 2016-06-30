<?php

namespace AppBundle\Controller;

use Framework\Controller;
use PDO;

class ProduitTypeController extends Controller
{
    /**
     * @return array|void
     * @throws \Exception
     */
    public function createAction()
    {
        $errors = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $form = $_REQUEST['form'];
            if (!$form['nom']) {
                $errors[] = 'le nom du produit ne doit pas être vide';
            }
            if (!$errors) {

                $pdo = $this->getPdo();// connection à la base

                $sql = 'INSERT INTO produit_type (
                nom
            ) VALUES (
                :nom             
            )';

                $insertProduitType = $pdo->prepare($sql);
                $insertProduitType->bindParam(':nom', $form['nom'], PDO::PARAM_STR);
                $insertProduitType->execute();

            }

                $sql = 'SELECT * FROM produit_type';
                $produitTypes = $pdo->query($sql);

            return $this->render('ProduitType/createOk.php', [
                'errors' => $errors,
                'produitTypes' => $produitTypes,
            ]);

        } else {

            $pdo = $this->getPdo();

            $sql = 'SELECT * FROM produit_type';
            $produitTypes = $pdo->query($sql);


            return $this->render('ProduitType/create.php', [
                'errors' => $errors,
                'produitTypes' => $produitTypes,
            ]);
        }
    }
    public function creationAction()
    {

        return $this->render('ProduitType/creation.php', [
        
        
        ]);
    }
}