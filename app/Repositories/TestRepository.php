<?php

namespace App\Repositories;

use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
use App\Models\Test;

class TestRepository extends BaseRepository
{
    protected $tests;

    public function __construct(Test $tests){
        $this->tests = $tests;
    }

    private function save(Test $tests, array $inputs) {
        $tests->date_test = $inputs['date_test'];
        $tests->aspect = $inputs['aspect'];
        $tests->couleur = $inputs['couleur'];
        $tests->ebulition = $inputs['ebulition'];
        $tests->acidite = $inputs['acidite'];
        $tests->solubilite = $inputs['solubilite'];
        $tests->estValide = $inputs['estValide'];
        $tests->save();
    }

    public function store(array $inputs) {
        $tests = $this->tests->newInstance(); // Crée une nouvelle instance de la classe Test.
        $this->save($tests, $inputs);
        return $tests;
    }

    public function update(Test $tests, array $inputs){
        $this->save($tests, $inputs);
        return $tests;
    }
}
