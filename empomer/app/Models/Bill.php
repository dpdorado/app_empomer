<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'bills';

    protected $fillable = [
        'id',
        'date_expedition',
        'customer_id'       
    ];    

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function detail()
    {
        return $this->hasOne(Detail::class);
    }    

}
