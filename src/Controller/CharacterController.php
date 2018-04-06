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
        $fighters[] = $characterManager->selectOneById($_GET['select']);
        $fighters[] = $characterManager->selectOneById($_GET['select2']);

        $id_fighter = $_GET['select'];
        $imgs = [];
        foreach ($fighters as $f) {
            $imgs[] = $f['images']['lg'];
// var_dump($f['images']);
        }
        return $this->twig->render('Characters/combat.html.twig', ['fighters' => $imgs,
                                                                    'id_fighter'=> $id_fighter ]);
    }


 
}

