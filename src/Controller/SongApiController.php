<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SongApiController extends AbstractController
{
    #[Route('/api/songs/{id<\d+>}', name: 'api_songs_get_one', methods: ['GET'])]
    public function getSong(int $id): Response
    {
		$song = [
			'id' => $id,
			'name' => 'Waterfalls',
			'url' => 'https://symfonycasts.s3.amazonaws.com/sample.mp3',
		];
		return $this->json($song);
	}
}
