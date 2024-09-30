<?php


namespace App\Services;


use Psr\Log\LoggerInterface;


class TVA_Services{

    public function __construct(private LoggerInterface $logger) {

    }

    public function calculTVA(int $prix, int $tva){


        $results = $prix * ($tva /100);
        $tva_results = $results + $prix;
        $this->logger->debug('Prix après tva : ' . $tva_results);
        return $results;
    }

}