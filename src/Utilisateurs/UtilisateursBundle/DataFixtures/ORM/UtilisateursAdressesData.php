<?php


namespace Utilisateurs\UtilisateursBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Ecommerce\EcommerceBundle\Entity\UtilisateursAdresses;

class UtilisateursAdressesData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        
        
        $adresse1 = new UtilisateursAdresses();
        $adresse1->setUtilisateur($this->getReference('utilisateur1'));
        $adresse1->setNom('houimel');
        $adresse1->setPrenom('asma');
        $adresse1->setTelephone('225542222');
        $adresse1->setAdresse('22 rue exepmle exemple');
        $adresse1->setCp('55221');
        $adresse1->setPays('tunisie');
        $adresse1->setVille('sousse');
        $adresse1->setComplement('xxxxx xxxx xxxx xxx');
        
        
        $manager->persist($adresse1);
        
        
      
        
        
        $adresse2 = new UtilisateursAdresses();
        $adresse2->setUtilisateur($this->getReference('utilisateur2'));
        $adresse2->setNom('houimel');
        $adresse2->setPrenom('asma');
        $adresse2->setTelephone('225542222');
        $adresse2->setAdresse('22 rue exepmle exemple');
        $adresse2->setCp('55221');
        $adresse2->setPays('tunisie');
        $adresse2->setVille('sousse');
        $adresse2->setComplement('xxxxx xxxx xxxx xxx');
        
        
        $manager->persist($adresse2);
        
        
        
        $manager->flush();
        
        
        
        
        //$this->addReference('adresse1',$adresse1);
        //$this->addReference('adresse2',$adresse2);
        
        
        
    }
    public function getOrder(){
        return 6;
    }
}