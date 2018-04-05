<?php

namespace Controller;
use Model\CharacterManager;

class CharacterController extends AbstractController
{
	public function index()
    {
        $characterManager = new CharacterManager();
        $fighters = $characterManager->selectAll();
        

        return $this->twig->render('Characters/index.html.twig', ['fighters' => $fighters]);
    }

    public function combat()
    {
        $characterManager = new CharacterManager();
        $fighters = $characterManager->selectAll();
        

        return $this->twig->render('Characters/combat.html.twig', ['fighters' => $fighters]);
    }
}