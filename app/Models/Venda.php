<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Venda extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['user_id', 'data', 'hora', 'valor', 'lat_lon'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
