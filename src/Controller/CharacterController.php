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
            $fighters[] = $characterManager->selectOneById(rand(1,731));
        }

        return $this->twig->render('Characters/index.html.twig', ['fighters' => $fighters]);
    }
}