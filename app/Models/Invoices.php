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
       
    ];


    public function products()
    {
        return $this->hasMany('App\Models\Products', 'invoice_id');
    }
}
