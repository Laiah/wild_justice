<?php

namespace Controller;
use Model\CharacterManager;

class CharacterController extends AbstractController
{
	public function index()
    {
        $characterManager = new CharacterManager();

        $fighters = [];
        for ($i = 0; $i < 5; $i++) {
            $fighters[] = $characterManager->selectOneById(rand(1,8));
        }

        return $this->twig->render('Characters/index.html.twig', ['fighters' => $fighters]);
    }


    public function combat()
    {
        $characterManager = new CharacterManager();

        $chooseFighters[0] = $characterManager->selectOneById($_GET['select']);
        $chooseFighters[1] = $characterManager->selectOneById($_GET['select2']);
         foreach ($chooseFighters as $key=> $value) {
            $stats[$key]['name'] = $value['name'];
            $stats[$key]['power'] = $value['powerstats']['power'];
            $stats[$key]['durability'] = $value['powerstats']['durability'];
            $stats[$key]['speed'] = $value['powerstats']['speed'];
            $images[] = $value['images']['lg'];
        }
       
        return $this->twig->render('Characters/combat.html.twig', ['stats' => $stats, 'images' => $images]);
    }


 
}

