<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = 'products';
    public $timestamps = true;
    protected $fillable = [
       
    ];

    public function invoice()
    {
        return $this->belongsTo('App\Models\Invoices', 'invoice_id');
    }
}
