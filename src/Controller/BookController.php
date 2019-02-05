<?php
// src/Controller/BookController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Author;
use App\Entity\Book;
use Faker;



class BookController extends AbstractController {
	/**
	* @Route("/books")
	*/
	public function book()
	{
		/*$repository = $this->getDoctrine()->getRepository(Book::class);
		$cptMin = 0;
		$cptMax = 500000;
		$author = [];
		//$author = $repository->findBetweenValue($cptMin,$cptMax);
		$author1 = $repository->findBetweenValue(0,500000);
		$author2 = $repository->findBetweenValue(500000,1000000);
		var_dump($author1[1]);
		$authors = array_merge($author1,$author2);*/
		$jsonString = file_get_contents('data.json');
		$list = json_decode($jsonString, true);
		return $this->render('books/listOfBooks.html.twig', ['list' => $list]);
	}

	/**
	* @Route("/bookJson")
	*/
	public function listJson() {
		$jsonString = file_get_contents('data.json');
		$list = json_decode($jsonString, true);
		return new JsonResponse($list);
	}
}