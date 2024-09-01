<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Produto extends Model
{
    use HasFactory;

    protected $table = 'produtos';

    protected $fillable = [
        'name',
        'price',
        'id_category',
        'slug'
    ];

    public function category(){
        return $this->belongsTo(category::class, 'id_category');
    }
}
