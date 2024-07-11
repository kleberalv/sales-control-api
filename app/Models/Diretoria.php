<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Diretoria extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['nome'];

    public function unidades()
    {
        return $this->hasMany(Unidade::class);
    }
}
