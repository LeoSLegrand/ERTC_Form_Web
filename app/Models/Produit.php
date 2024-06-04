<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Entreprise;
use App\Models\Test;

class Produit extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_produit',
        'type_produit',
        'description',
        'entreprise_id',
    ];

    public function produit(){
    
        return $this->belongsTo(Entreprise::class, 'entreprise_id');
    }

    public function test()
    {
        return $this->hasOne(Test::class);
    }

    public function validite()
    {
        return $this->test(); // return the relationship rather than a field.
    }
}
