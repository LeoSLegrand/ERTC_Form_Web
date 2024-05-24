<?php

namespace App\Repositories;

use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
use App\Models\Entreprise;

class EntrepriseRepository extends BaseRepository
{
    protected $entreprises;

    public function __construct(Entreprise $entreprises){
        $this->entreprises = $entreprises;
    }

    private function save(Entreprise $entreprises, array $inputs) {
        $entreprises->nom_entreprise = $inputs['nom_entreprise'];
        $entreprises->responsable = $inputs['responsable'];
        $entreprises->pays = $inputs['pays'];
        $entreprises->save();
    }

    public function store(array $inputs) {
        $entreprises = $this->entreprises->newInstance(); // Crée une nouvelle instance de la classe Entreprise.
        $this->save($entreprises, $inputs);
        return $entreprises;
    }

    public function update(Entreprise $entreprises, array $inputs){
        $this->save($entreprises, $inputs);
        return $entreprises;
    }
}
