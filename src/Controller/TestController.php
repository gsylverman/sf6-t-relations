<?php

namespace App\Controller;

use App\Entity\Card;
use App\Entity\User;
use App\Repository\UserRepository;
use App\Services\FetcherService;
use DateTimeImmutable;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Date;

class TestController extends AbstractController

{
    public function __construct(private EntityManagerInterface $em)
    {
    }

    #[Route('/test', name: 'app_test')]
    public function index(UserRepository $userRepository): Response
    {

        $repository = $this->em->getRepository(User::class);
        $user = $userRepository->find(1);
        $cards = $user->getCards()->getValues();


//        $cardRepository = $this->em->getRepository(Card::class);
//        $newCard = new Card();
//        $newCard->setValid(true);
//        $newCard->setName('Mastercard');
//        $newCard->setCreatedAt(new DateTimeImmutable());
//        $newCard->setUpdatedAt(new DateTimeImmutable());
//        $this->em->persist($newCard);

//        $cardRepository = $this->em->getRepository(Card::class);
//        $masterCard = $cardRepository->find(2);
//
//
//        $user->addCard($masterCard);
//
//        $this->em->persist($user);
//
//        $this->em->flush();


        return $this->render('test/index.html.twig', [
            'data' => $cards,
        ]);
    }

    #[Route('/test-service', name: 'test_service')]
    public function testService(FetcherService $fetcherService): Response
    {
        return $this->render('test/test-service.html.twig', [
            'getUrl' => $fetcherService->get('https://sandbox-api.coinmarketcap.com/v1/cryptocurrency/listings/latest'),
        ]);
    }

}
