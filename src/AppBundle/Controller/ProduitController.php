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
                prix,
                id_produit_type
            ) VALUES (
                :nom,
                :prix,
                :id_produit_type
            )';

                $insertProduit = $pdo->prepare($sql);
                $insertProduit->bindParam(':nom', $form['nom'], PDO::PARAM_STR);
                $insertProduit->bindParam(':prix', $form['prix'], PDO::PARAM_INT);
                $insertProduit->bindParam(':id_produit_type', $form['id_produit_type'], PDO::PARAM_INT);
                $insertProduit->execute();
            }


            return $this->render('Produit/createOk.php', [
                'errors' => $errors,
            ]);

        } else {
            $pdo = $this->getPdo();// connection à la base

            $pathChemin = 'produit.create';
            $sql = 'SELECT * FROM produit_type';
            $produitTypes = $pdo->query($sql);
            $produits = $pdo->query($sql);

            return $this->render('Produit/create.php', [
                'errors' => $errors,
                'pathChemin' => $pathChemin,
                'produitTypes' => $produitTypes,
                'produits' => $produits,
            ]);
        }
    }

    public function updateAction()
    {
        $pdo = $this->getPdo();// connection à la base

        $id = $_REQUEST['id'];
        $pathChemin = 'produit.modif';
        $sql = 'SELECT * FROM produit_type';
        $produitTypes = $pdo->query($sql);
        $produits = $pdo->query($sql);

        return $this->render('Produit/modif.php', [
            'id' => $id,
            'pathChemin' => $pathChemin,
            'produitTypes' => $produitTypes,
            'produits' => $produits,
        ]);
    }

    public function modifAction()
    {
        $pdo = $this->getPdo();
        $form = $_REQUEST['form'];

        $sql = 'UPDATE produit SET 
            nom = :nom, 
            prix = :prix,
            id_produit_type = :id_produit_type
            WHERE id = :id';
        $updateProduit = $pdo->prepare($sql);
        $updateProduit->bindParam(':id', $form['id'], PDO::PARAM_INT);
        $updateProduit->bindParam(':nom', $form['nom'], PDO::PARAM_STR);
        $updateProduit->bindParam(':prix', $form['prix'], PDO::PARAM_INT);
        $updateProduit->bindParam(':id_produit_type', $form['id_produit_type'], PDO::PARAM_INT);

        $updateProduit->execute();


        return $this->render('Produit/modifOk.php', [

        ]);
    }


    public function listProduitAction()
    {
        $pdo = $this->getPdo();

        $sql = 'SELECT * FROM produit';
        $produits = $pdo->query($sql);

        $sql2 = 'SELECT * FROM produit_type';
        $query = $pdo->prepare($sql2);
        $query->execute();
        $produit_types = $query->fetchAll();

        return $this->render('Produit/listProduit.php', [
            'produits' => $produits,
            'produit_types' => $produit_types,
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
