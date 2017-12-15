<?php

namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Ecommerce\EcommerceBundle\Entity\Categories;

class CategorieData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $categorie1 = new Categories();
        $categorie1->setNom('smartphones');
        $categorie1->setImage($this->getReference('media1'));
        
        $manager->persist($categorie1);
        
        
        $categorie2 = new Categories();
        $categorie2->setNom('laptop');
        $categorie2->setImage($this->getReference('media2'));
        
        $manager->persist($categorie2);
        
        
        $manager->flush();
        
        
        
        $this->addReference('categorie1',$categorie1);
        $this->addReference('categorie2',$categorie2);
        
        
        
        
    }
    public function getOrder(){
        return 2;
    }
}