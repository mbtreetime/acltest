<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api", name="api_")
 */
class ApiController extends AbstractController
{

    /**
     * @Route("/test", name="test")
     */
    public function test(Request $request): Response
    {
        return $this->json(['success' => true, 'result' => true, 'msg' => '']);
    }

    /**
     * @Route("/test2", name="test2", methods={"GET", "POST"})
     */
    public function test2(Request $request): Response
    {
        return $this->json(['success' => true, 'result' => true, 'msg' => '']);
    }
}
