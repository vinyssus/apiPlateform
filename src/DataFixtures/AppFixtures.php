<?php

namespace App\DataFixtures;

use App\Factory\DragonTreasorFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        DragonTreasorFactory::createMany(40);
    }
}
