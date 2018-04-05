<?php

class CharacterController extends AbstractController
{
	public function index()
    {
        $characterManager = new CharacterManager();
        $fighters = $characterManager->selectAll();
        var_dump($fighters);

        return $this->twig->render('Characters/index.html.twig', ['fighters' => $fighters]);
    }
}