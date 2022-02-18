<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    use HasFactory;
    protected $table = 'suppliers';
    public $timestamps = true;
    protected $fillable = [
        'vendor_name',
        'email',
        'fname',
        'tele',
        'currency',
        'country',
        'addr1',
        'addr2',
        'city',
        'zipcode',
        'province', 
         
        'capital',
        'logo',
        'bic',
        'bank',
        'rcs',
        'c_naf',
        'n_siret',
        'n_immatriculation',  
    ];
}
