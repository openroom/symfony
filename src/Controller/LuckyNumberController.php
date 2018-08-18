<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class LuckyNumberController extends AbstractController
{
    /**
     * @Route("/lucky/number", name="lucky_number")
     * @Method("GET")
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
