<?php

include_once '../model/Fornitore.php';

class FornitoreRepo {

    private array $fornitori = [];

    public function __construct(){
        $this->fornitori = $this->caricaFornitori();
    }

    private function caricaFornitori(): array|null {
        // Simulazione di caricamento da un database o file
        // In un'applicazione reale, qui si potrebbe utilizzare PDO per interagire con un database o
        
            $fornitori = file_get_contents('../database/fornitori.json');
            return json_decode($fornitori, true);
      
    }


    public function aggiungiFornitore(Fornitore $fornitore) {
        $this->fornitori[] = $fornitore;
    }

    public function getFornitori(): array {
        return $this->fornitori;
    }

public function getFornitoreById(int $idFornitore): array {
        foreach ($this->fornitori as $fornitore) {
            if ($fornitore['id_fornitore'] === $idFornitore) {
                return $fornitore;
            }
        }

        return null; // Ritorna null se non trovato
    }

    public function updateFornitore(Fornitore $fornitore) {
        foreach ($this->fornitori as $index => $f) {
            if ($f->idFornitore === $fornitore->idFornitore) {
                $this->fornitori[$index] = $fornitore;
                return true; // Aggiornamento riuscito
            }
        }
        return false; // Fornitore non trovato
    }

    public function deleteFornitore(int $idFornitore) {
        foreach ($this->fornitori as $index => $fornitore) {
            if ($fornitore->idFornitore === $idFornitore) {
                array_splice($this->fornitori, $index, 1);
                return true; // Cancellazione riuscita
            }
        }
        return false; // Fornitore non trovato
    }

}




