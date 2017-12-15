<?php

namespace Utilisateurs\UtilisateursBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Utilisateurs\UtilisateursBundle\Entity\Utilisateurs;



class UtilisateurData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface, ContainerAwareInterface
{
    /**
     * {@inheritDoc}
     */
    private $container;
    
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }
    
    public function load(ObjectManager $manager)
    {
        
       $utilisateur1 = new Utilisateurs();
       $utilisateur1->setUsername('asma');
       $utilisateur1->setEmail('asma@mail.com');
       $utilisateur1->setEnabled(1);
       $utilisateur1->setPassword($this->container->get('security.encoder_factory')->getEncoder($utilisateur1)->encodePassword('poupou', $utilisateur1->getSalt()));
       $manager->persist($utilisateur1);
       
       
       $utilisateur2 = new Utilisateurs();
       $utilisateur2->setUsername('houda');
       $utilisateur2->setEmail('houda@email.com');
       $utilisateur2->setEnabled(1);
       $utilisateur2->setPassword($this->container->get('security.encoder_factory')->getEncoder($utilisateur2)->encodePassword('lolo', $utilisateur1->getSalt()));
       $manager->persist($utilisateur2);
       
       
       $utilisateur3 = new Utilisateurs();
       $utilisateur3->setUsername('henda');
       $utilisateur3->setEmail('henda@email.com');
       $utilisateur3->setEnabled(1);
       $utilisateur3->setPassword($this->container->get('security.encoder_factory')->getEncoder($utilisateur3)->encodePassword('coco', $utilisateur1->getSalt()));
       $manager->persist($utilisateur3);
       
       
       $utilisateur4 = new Utilisateurs();
       $utilisateur4->setUsername('asma2');
       $utilisateur4->setEmail('asma2@email.com');
       $utilisateur4->setEnabled(1);
       $utilisateur4->setPassword($this->container->get('security.encoder_factory')->getEncoder($utilisateur4)->encodePassword('soso', $utilisateur1->getSalt()));
       $manager->persist($utilisateur4);
        
        
       $manager->flush();
       
       $this->addReference('utilisateur1',$utilisateur1);
       $this->addReference('utilisateur2',$utilisateur2);
       $this->addReference('utilisateur3',$utilisateur3);
       $this->addReference('utilisateur4',$utilisateur4);
    }
    public function getOrder(){
        return 5 ;
    }
}