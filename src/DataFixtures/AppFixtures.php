<?php

namespace App\DataFixtures;

use App\Factory\DragonTreasorFactory;
use App\Factory\UserFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        UserFactory::createMany(10);
        DragonTreasorFactory::createMany(40,function(){
            return [
           'owner' => UserFactory::random(),
            ];
        });
    }
}
