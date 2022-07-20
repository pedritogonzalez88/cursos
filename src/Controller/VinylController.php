<?php

namespace App\Controller;



use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VinylController
{
    #[Route('/browse/{slug}')]
    public function browser(string $slug = null) : Response
    {
        if($slug){
            $title = 'Genre'.u(str_replace('_', ' ', $slug))->title(true);
        }else{
            $title = 'All Genres';
        }

        return new Response($title);
    }
}