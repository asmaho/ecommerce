<?php



namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Ecommerce\EcommerceBundle\Entity\Produits;

class ProduitsData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        
        
        $produit1 = new Produits();
        $produit1->setNom('iphone ');
        $produit1->setDescription("llorec cdncdk dzcoceocecec em ipnroiv");
        $produit1->setCategorie($this->getReference('categorie1'));
        $produit1->setImage($this->getReference('media3'));
        $produit1->setPrix('199');
        $produit1->setTva($this->getReference('tva2'));
        $produit1->setDisponible('1');
        
        $manager->persist($produit1);
        
        
        $produit2 = new Produits();
        $produit2->setNom('aze ');
        $produit2->setDescription("llorec cdncdk dzcoceocecec em ipnroiv");
        $produit2->setCategorie($this->getReference('categorie2'));
        $produit2->setImage($this->getReference('media4'));
        $produit2->setPrix('199');
        $produit2->setTva($this->getReference('tva1'));
        $produit2->setDisponible('1');
        
        $manager->persist($produit2);
        
        
        $produit3 = new Produits();
        $produit3->setNom('yynyn ');
        $produit3->setDescription("0000lorec cdncdk dzcoceocecec em ipnroiv");
        $produit3->setCategorie($this->getReference('categorie1'));
        $produit3->setImage($this->getReference('media5'));
        $produit3->setPrix('199');
        $produit3->setTva($this->getReference('tva2'));
        $produit3->setDisponible('1');
        
        $manager->persist($produit3);
        
        
        
        $produit4 = new Produits();
        $produit4->setNom('vbbn ');
        $produit4->setDescription("lorec cdncdk dzcoceocecec em ipnroiv");
        $produit4->setCategorie($this->getReference('categorie2'));
        $produit4->setImage($this->getReference('media6'));
        $produit4->setPrix('199');
        $produit4->setTva($this->getReference('tva1'));
        $produit4->setDisponible('1');
        
        $manager->persist($produit4);
        
        
        
        $produit5= new Produits();
        $produit5->setNom('ipjjkkhone ');
        $produit5->setDescription("lorec cdncdk dzcoceocecec em ipnroiv");
        $produit5->setCategorie($this->getReference('categorie2'));
        $produit5->setImage($this->getReference('media7'));
        $produit5->setPrix('199');
        $produit5->setTva($this->getReference('tva1'));
        $produit5->setDisponible('1');
        
        $manager->persist($produit5);
        
        
        
        $produit6 = new Produits();
        $produit6->setNom('ipppo');
        $produit6->setDescription("lorec cdncdk dzcoceocecec em ipnroiv ");
        $produit6->setCategorie($this->getReference('categorie1'));
        $produit6->setImage($this->getReference('media1'));
        $produit6->setPrix('199');
        $produit6->setTva($this->getReference('tva2'));
        $produit6->setDisponible('1');
        
        $manager->persist($produit6);
        
        
        
      
        
        
        $manager->flush();
        
        
        
       
        
        
    }
    public function getOrder(){
        return 4;
    }
}