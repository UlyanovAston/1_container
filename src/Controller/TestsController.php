<?php

namespace App\Controller;

use App\Contract\Cat;
use App\Entity\HashGenerator;
use App\Entity\Newspaper\DailyBugle;
use App\Entity\Postman;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TestsController extends AbstractController
{
    /** @var Cat */
    private $cat;

    public function setCat(Cat $cat): void
    {
        $this->cat = $cat;
    }

    public function hash(Request $request, HashGenerator $hashGenerator): Response
    {
        $data = $request->query->get('data', 'default');

        return $this->json([
            'data' => $data,
            'hash' => $hashGenerator->generate($data),
        ]);
    }

    public function catSay(): Response
    {
        return $this->json([
            'message' => $this->cat->meow(),
        ]);
    }

    public function postmanReport(): Response
    {
        $dailyBugle = new DailyBugle();
        $postman = new Postman([$dailyBugle]);

        return $this->json([
            'report' => $postman->report(),
        ]);
    }
}