<?php

// Là ou la classe est déclarée (où son fichier se trouve)
namespace App\Service;

use App\Entity\Lego;
use \PDO;

class LegoService
{
    private $PDO;
    
// Récupération de tous les legos
    public function getLegos(): array {
        $this->PDO = new PDO('mysql:host=tp-symfony-mysql;dbname=lego_store', 'root', 'root');
        $requete = $this->PDO->prepare("SELECT * FROM lego");
        $requete->execute();
        $answer = $requete->fetchAll(PDO::FETCH_OBJ);
        $legos = [];
        foreach ($answer as $item) {
            $lego = new Lego($item->id, $item->name, $item->collection);
            $lego->setDescription($item->description);
            $lego->setPrice($item->price);
            $lego->setPieces($item->pieces);
            $lego->setImageBox($item->ImageBox);
            $lego->setImageMain($item->ImageMain);
            $legos[] = $lego;
        }
        return $legos;
    }
// Récupération des legos par collection
    public function getLegosbyCollection($collection): array {
        $this->PDO = new PDO('mysql:host=tp-symfony-mysql;dbname=lego_store', 'root', 'root');
        $requete = $this->PDO->prepare("SELECT * FROM lego WHERE collection = :collection");
        $requete->bindValue(':collection', $collection);
        $requete->execute();
        $answer = $requete->fetchAll(PDO::FETCH_OBJ);
        $legos = [];
        foreach ($answer as $item) {
            $lego = new Lego($item->id, $item->name, $item->collection);
            $lego->setDescription($item->description);
            $lego->setPrice($item->price);
            $lego->setPieces($item->pieces);
            $lego->setImageBox($item->ImageBox);
            $lego->setImageMain($item->ImageMain);
            $legos[] = $lego;
        }
        return $legos;
    }


// Récupération d'un seul lego
        // $this->PDO = new PDO('mysql:host=tp-symfony-mysql;dbname=lego_store', 'root', 'root');
        // $requete = $this->PDO->prepare("SELECT * FROM lego WHERE id = :id");
        // $requete->bindValue(':id', 10252);
        // $requete->execute();
        // $answer = $requete->fetch(PDO::FETCH_OBJ);
        // $lego = new Lego($answer->id, $answer->name, $answer->collection);
        // $lego->setDescription($answer->description);
        // $lego->setPrice($answer->price);
        // $lego->setPieces($answer->pieces);
        // $lego->setboxImage($answer->Imagebox);
        // $lego->setlegoImage($answer->ImageMain);

        // return $lego;
        // }


}

