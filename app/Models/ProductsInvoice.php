<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsInvoice extends Model
{
    use HasFactory;
    protected $table = 'products_invoices';
    public $timestamps = true;
    protected $fillable = [
        'invoice_id',
        'designation',
        'uml',
        'qte',
        'p_u',
        'p_t',
        //'is_paid'=> 'boolean',
    ];
}
