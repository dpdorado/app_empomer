<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gift extends Model
{
    use HasFactory;

    protected $table = 'gifts';

    protected $fillable = [
        'id',
        'name',
        'price',
        'category_id'        
    ];    
    
    public function category()
    {
        return $this->hasOne(Category::class);
    }    
}
