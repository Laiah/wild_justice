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

}