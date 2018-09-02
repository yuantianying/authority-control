<?php 
namespace AppBundle\Controller;
 
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController
{
    public function indexAction(Request $request)
    {
        return new Response("Hello world!");
    }
}