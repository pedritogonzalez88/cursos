<?php

namespace App\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;
use function Symfony\Component\String\u;

class VinylController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function homepage(Environment $twig): Response
    {
        $tracks = [
            ['song' => 'Gangsta\'s Paradise', 'artist' => 'Coolio'],
            ['song' => 'Waterfalls', 'artist' => 'TLC'],
            ['song' => 'Creep', 'artist' => 'Radiohead'],
            ['song' => 'Kiss from a Rose', 'artist' => 'Seal'],
            ['song' => 'On Bended Knee', 'artist' => 'Boyz II Men'],
            ['song' => 'Fantasy', 'artist' => 'Mariah Carey'],
        ];
			
			$html = $this->render('vinyl/homepage.html.twig',
        [
            'title' => 'Pb & Jams',
            'tracks' => $tracks,
        ]);
			dd($html);
    }

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