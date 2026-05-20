<?php

include_once '../repos/FornitoreRepo.php';


class Magazzino {

    private FornitoreRepo $fornitoreRepo;

    public function __construct() {
        $this->fornitoreRepo = new FornitoreRepo();
    }

    public function getFornitori(): array {
        return $this->fornitoreRepo->getFornitori();
    }

    // Altri metodi per gestire prodotti, categorie, ordini, ecc.
    public function getFornitoreById(int $idFornitore): array {
        return $this->fornitoreRepo->getFornitoreById($idFornitore);
    }

}

