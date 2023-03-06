<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

class BreedsController extends AbstractController
{
    #[Route('/{breed}', name: 'breeds', defaults: ['breed' => null], methods:['GET'])]
    public function index($breed): Response
    {
        $breeds = [];
        $images = [];
        $showImages = false;
        $client = HttpClient::create();

        if ($breed) {

            $response = $client->request('GET', 'https://dog.ceo/api/breed/' . $breed . '/images');
            
            if ($response->getStatusCode() == 404) {
                throw new NotFoundHttpException('Sorry! Breed not found!');
            }
            
            $images = $response->toArray()['message'];
            $showImages = true;

        } else {
            
            $response = $client->request('GET', 'https://dog.ceo/api/breeds/list/all');
            $breeds = array_keys($response->toArray()['message']);
            
        }
        
        return $this->render('index.html.twig', [
            'breeds' => $breeds,
            'images' => $images,
            'showImages' => $showImages
        ]);
    }
}
