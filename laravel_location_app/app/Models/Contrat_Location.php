<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrat_Location extends Model
{
    use HasFactory;
    protected $fillable = ['magasin_id', 'locataire_id', 'date_debut', 'date_fin'];
}
