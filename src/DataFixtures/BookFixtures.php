<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Book;

class BookFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i <= 10; $i++) {
        	$book = new Book();
        	$book->setName(sprintf('book %d', $i));
        	$book->setYear(2000 + $i);
        	$book->setAuthor(sprintf('John %d', $i));
        	$manager->persist($book);
        }

        $manager->flush();
    }
}
