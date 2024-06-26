<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produit;


class Test extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_test',
        'aspect',
        'couleur',
        'ebulition',
        'acidite',
        'solubilite',
        'estValide',
        'produit_id'
    ];

    public function produit(){
    
        return $this->belongsTo(Produit::class, 'produit_id');
    }

}