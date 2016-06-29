<?php

namespace AppBundle\Controller;

use Framework\Controller;
use PDO;

class ProduitController extends Controller
{
    /**
     * @return array|void
     * @throws \Exception
     */
    public function produitAction()
    {
        $errors = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $form = $_REQUEST['form'];
            if (!$form['nom']) {
                $errors[] = 'le nom du produit ne doit pas être vide';
            }
            if (!$form['prix']) {
                $errors[] = 'le prix ne doit pas être vide';
            }
            if (!$errors) {

                $pdo = $this->getPdo();// connection à la base

                $sql = 'INSERT INTO produit (
                nom,
                commentaire,
                prix
            ) VALUES (
                :nom,
                :commentaire, 
                :prix
            )';

                $insertProduit = $pdo->prepare($sql);
                $insertProduit->bindParam(':nom', $form['nom'], PDO::PARAM_STR);
                $insertProduit->bindParam(':commentaire', $form['commentaire'], PDO::PARAM_STR);
                $insertProduit->bindParam(':prix', $form['prix'], PDO::PARAM_INT);
                $insertProduit->execute();
            }


            return $this->render('Produit/createOk.php', [
                'errors' => $errors,
            ]);

        } else {
            return $this->render('Produit/create.php', [
                'errors' => $errors,
            ]);
        }
    }

    public function updateAction()
    {
        $id = $_REQUEST['id'];
        return $this->render('Produit/modif.php', [
            'id' => $id,
        ]);
    }
    public function modifAction()
    {
        $pdo = $this->getPdo();

        $form = $_REQUEST['form'];


        $sql = 'UPDATE produit SET 
            nom = :nom, 
            prix = :prix 
            WHERE id = :id';
        $updateProduit = $pdo->prepare($sql);
        $updateProduit->bindParam(':id', $form['id'], PDO::PARAM_INT);
        $updateProduit->bindParam(':nom', $form['nom'], PDO::PARAM_STR);
        $updateProduit->bindParam(':prix', $form['prix'], PDO::PARAM_INT);
        $updateProduit->execute();

        return $this->render('Produit/modifOk.php', [
        ]);
    }


    public function listProduitAction()
    {
        $pdo = $this->getPdo();

            $sql = 'SELECT * FROM produit';
            $produits = $pdo->query($sql);

        return $this->render('Produit/listProduit.php', [
            'produits' => $produits,
        ]);
    }

    public function deleteAction()
    {
        $pdo = $this->getPdo();

        $sql = 'DELETE FROM produit WHERE id = :id';
        $removeProduit = $pdo->prepare($sql);
        $removeProduit->bindParam(':id', $_REQUEST['id'], PDO::PARAM_INT);
        $removeProduit->execute();

        return $this->render('Produit/deleteOk.php', [

        ]);
    }
}
