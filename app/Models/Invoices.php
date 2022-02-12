<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoices extends Model
{
    use HasFactory;
    protected $table = 'invoices';
    public $timestamps = true;
    protected $fillable = [
        'customer_name',
        'user_name',
        'supplier_name',
        'relase_date',
        'pdf_url',
        'total_ht',
        'total_tva',
        'total_ttc',

        'is_paid'=> 'boolean',
    ];

}
