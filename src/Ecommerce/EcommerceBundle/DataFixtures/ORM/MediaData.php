<?php

namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Ecommerce\EcommerceBundle\Entity\Media;

class MediaData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $media1 = new Media();
        $media1->setPath('http://worldheadway.com/wp-content/uploads/2015/03/android-phone.jpg');
        $media1->setAlt('samsung phone');
        $manager->persist($media1);
        
        
        $media2= new Media();
        $media2->setPath('http://cetoncorp.com/wp-content/uploads/2012/09/Android-Phone-Movie-Gallery.png');
        $media2->setAlt('nexus phone');
        $manager->persist($media2);
        
        $media3= new Media();
        $media3->setPath('http://cetoncorp.com/wp-content/uploads/2012/09/Android-Phone-Movie-Gallery.png');
        $media3->setAlt('nexus phone');
        $manager->persist($media3);
        
        $media4= new Media();
        $media4->setPath('http://cetoncorp.com/wp-content/uploads/2012/09/Android-Phone-Movie-Gallery.png');
        $media4->setAlt('nexus phone');
        $manager->persist($media4);
        
        $media5= new Media();
        $media5->setPath('http://cetoncorp.com/wp-content/uploads/2012/09/Android-Phone-Movie-Gallery.png');
        $media5->setAlt('nexus phone');
        $manager->persist($media5);
        
        $media6= new Media();
        $media6->setPath('http://cetoncorp.com/wp-content/uploads/2012/09/Android-Phone-Movie-Gallery.png');
        $media6->setAlt('nexus phone');
        $manager->persist($media6);
        
        $media7= new Media();
        $media7->setPath('http://cetoncorp.com/wp-content/uploads/2012/09/Android-Phone-Movie-Gallery.png');
        $media7->setAlt('nexus phone');
        $manager->persist($media7);
        
        $media8= new Media();
        $media8->setPath('http://cetoncorp.com/wp-content/uploads/2012/09/Android-Phone-Movie-Gallery.png');
        $media8->setAlt('nexus phone');
        $manager->persist($media8);

        
        $manager->flush();
        
        
        $this->addReference('media1',$media1);
        $this->addReference('media2',$media2);
        $this->addReference('media3',$media3);
        $this->addReference('media4',$media4);
        $this->addReference('media5',$media5);
        $this->addReference('media6',$media6);
        $this->addReference('media7',$media7);
        $this->addReference('media8',$media8);
    }
    public function getOrder(){
        return 1;
    }
}