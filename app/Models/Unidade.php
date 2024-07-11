<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Unidade extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['nome', 'lat_lon', 'diretoria_id'];

    public function diretoria()
    {
        return $this->belongsTo(Diretoria::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function vendas()
    {
        return $this->hasManyThrough(Venda::class, User::class);
    }
}
