<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Entreprise;

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
}
