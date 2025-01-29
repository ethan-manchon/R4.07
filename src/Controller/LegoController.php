<?

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LegoController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function home()
    {
        $identifiant = '10252';
        $nom = "La coccinelle Volkswagen";
        $collection = "Creator Expert";
        $description = "Construis une réplique LEGO® Creator Expert de l'automobile la plus populaire au monde. Ce magnifique modèle LEGO est plein de détails authentiques qui capturent le charme et la personnalité de la voiture, notamment un coloris bleu ciel, des ailes arrondies, des jantes blanches avec des enjoliveurs caractéristiques, des phares ronds et des clignotants montés sur les ailes.";
        $prix = 94.99;
        $pieces = 1167;
        $imageBox = "../../public/images/LEGO_10252_Box.png";
        $imageMain = "../../public/images/LEGO_10252_Main.png";
        return $this->render('lego.html.twig', [
            'lego.boxImage' => $imageBox,
            'lego.name' => $nom,
            'lego.collection' => $collection,
            'lego.pieces' => $pieces,
            'lego.price' => $prix,
            'lego.id' => $identifiant,
            'lego.description' => $description,
            'lego.legoImage' => $imageMain
        ]);
    }

}

// php bin/console debug:route affiche la liste des fonctions et de leurs routes respectives