<?php

include_once("../model/Prodotto.php");
include_once '../repos/FornitoreRepo.php';
include_once '../presentation/MagazzinoREST.php';

// $p = new Prodotto(1, "Laptop", 999.99, 10, new Categoria(1, "Elettronica", "Dispositivi elettronici"), new Fornitore(1, "TechSupplier", "Milano", "info@techsupplier.com"));

// print_r($p);

// $fornitoreDAO = new FornitoreRepo();

// print_r($fornitoreDAO->getFornitori());

// $rest = new MagazzinoREST();

header('Content-Type: application/json');

// echo $rest->getFornitori();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['idFornitore'])) {
        $idFornitore = intval($_GET['idFornitore']);
        echo (new MagazzinoREST())->getFornitoreById($idFornitore);
    } else {
        echo (new MagazzinoREST())->getFornitori();
    }
} else {
    http_response_code(405); // Method Not Allowed
    echo json_encode(['error' => 'Method not allowed']);
}



