<?php

namespace App\DataFixtures;

use App\Entity\Author;
use App\Entity\Book;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManagerInterface;
use Faker;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
    	$faker = Faker\Factory::create('fr_FR');
        $bookGenres = ['Tragedy','Science fiction','Fantasy','Mythology','Adventure','Mystery','Drama','Finance','Horror','Satire','Romance','Thriller'];
        $books = [];
        for($i = 0; $i < 1000000; $i++){
            if(random_int(0, 1) == 1){
                $gender = 'M';
            } else {
                $gender = 'F';
            }
            $genreLivre = $bookGenres[array_rand($bookGenres)];
            if($genreLivre == 'Horror') {
                $date = new \DateTime(random_int(1970, 2019).'-10-31');
            } else {
                $date = $faker->dateTime();
            }
            $book = ['name' => $faker->word,
                'genre' => $genreLivre,
                'publishDate' => $date,
                'authorName' => $faker->name,
                'authorGenre' => $gender];

            array_push($books, $book);
        }

        $json_data = json_encode($books);
        file_put_contents('data.json', $json_data);
    }
}
