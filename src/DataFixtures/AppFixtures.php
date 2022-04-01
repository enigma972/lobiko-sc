<?php

namespace App\DataFixtures;

use App\Entity\BloodBank;
use App\Entity\BloodBankAddress;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $this->loadBloodBank($manager);

        $manager->flush();
    }

    private function loadBloodBank(ObjectManager $manager): void
    {
        $all = [
            [
                'name' => 'Hospital de Bumbu',
                'codeName' => 'HB',
                'address' => 'Mafuta 25, Bumbu',
                'latitude' => '-4.369192',
                'longitude' => '15.297007',
            ],
            [
                'name' => 'Hospital Salutiste de Ngaliema',
                'codeName' => 'HSN',
                'address' => 'Binza Pigeon, Ngaliema',
                'latitude' => '-4.394855',
                'longitude' => '15.259209',
            ],
            [
                'name' => 'Hospital de la Gombe',
                'codeName' => 'HG',
                'address' => 'Mafuta 25, Gombe',
                'latitude' => '-4.303889',
                'longitude' => '15.306146',
            ],
            [
                'name' => 'Hospital de Barumbu',
                'codeName' => 'HB1',
                'address' => '333 Binza Pigeon, Barumbu',
                'latitude' => '-4.30874',
                'longitude' => '15.3062',
            ],
            [
                'name' => 'Hospital de Kinshasa',
                'codeName' => 'HK',
                'address' => ' Mafuta 25, Kinshasa',
                'latitude' => '-4.340731',
                'longitude' => '15.296682',
            ],
            
            [
                'name' => 'Hospital Général de Kin',
                'codeName' => 'HGK',
                'address' => ' Mafuta 25, Kinshasa',
                'latitude' => '-4.373747',
                'longitude' => '15.291058',
            ],
        ];

        foreach ($all as $item) {
            $address = new BloodBankAddress();
            $address->setLatitude($item['latitude']);
            $address->setLongitude($item['longitude']);
            $address->setZipCode('10200000');
            $address->setCity('Kinshasa');
            $address->setContry('Congo-Kinshasa');
            $address->setFullAddress($item['address']);

            $bank = new BloodBank();
            $bank->setName($item['name']);
            $bank->setCodeName($item['codeName']);
            $bank->setAddress($address);

            $manager->persist($bank);
        }

        
    }
}
