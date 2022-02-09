<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;
    protected $table = 'customers';
    public $timestamps = true;
    protected $fillable = [
        'nom_complete',
        'email',
        'tele',
        'currency',
        'addr1',
        'addr2',
        'city',
        'zipcode',
        'country',
        'province',
        'account_number',
        'fax',
        'mobile',
        'website',
        'note',
        'is_valid' => 'boolean',
    ];

    public function invoices()
    {
        return $this->hasMany('App\Models\Invoices', 'customer_id');
    } 
}


