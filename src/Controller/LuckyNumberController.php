<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LuckyNumberController extends AbstractController
{
    /**
     * @Route("/lucky/number", name="lucky_number",  methods={"GET"})
     * @throws \Exception
     */
    public function index()
    {
        $number = random_int(0, 100);
        return $this->render('lucky_number/index.html.twig', [
            'controller_name' => 'LuckyNumberController',
            'number' => $number,
        ]);
    }
}
