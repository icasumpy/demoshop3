<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'tbl_product'; 
    protected $primaryKey = 'product_id';
    public $timestamps = false;

    protected $fillable = [
        'product_name',
        'product_price',
        'product_image',
        'product_status',
    ];
}
